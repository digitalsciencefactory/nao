<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Observation;
use AppBundle\Extraction\Extraction;
use AppBundle\Form\Type\ExtractType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use ZipArchive;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashBoardController extends Controller
{
    /**
     * @Route("/dashboard", name="fn_dashboard_index")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        return $this->render('dashboard/accueil.html.twig');
    }

    /**
     * @Route("/dashboard/extraction-donnees", name="fn_dashboard_bdd")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function bddAction(Request $request){
        $extraction = new Extraction();
        $file = "";
        $form = $this->createForm(ExtractType::class, $extraction);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            // on vérifie que les dates sont dans le bon sens
            if($extraction->datefinApresDatedebut()){

                // on récupère les observations validées et entre les 2 dates
                $manager = $this
                    ->getDoctrine()
                    ->getManager();

                $observationRepository = $manager->getRepository('AppBundle:Observation');

                $observations = $observationRepository->extract($extraction->getDatedebut(), $extraction->getDatefin());

                // si il y a au moins 1 observation
                if($observations !== null && count($observations) !== 0){
                    $path = __DIR__.'/../../../web/downloads/';

                    // création d'un fichier csv
                    $now = new \DateTime();
                    $file =
                        "FNAT_exctract_"
                        . $now->format("Ymd_His_")
                        . $extraction->getDatedebut()->format("Ymd")
                        . "_"
                        . $extraction->getDatefin()->format("Ymd")
                        . ".csv"
                    ;

                    // ouverture en écriture
                    $handle = fopen($path.$file, "w");

                    // écriture de l'entête
                    $entete = array("date observation", "lb nom", "nom vern", "nom vern eng", "latitude", "longitude", "commentaire observateur", "commentaire naturaliste");

                    fputcsv($handle, $entete);

                    // écriture de chaque ligne
                    foreach($observations as $observation){
                        fputcsv($handle, $observation->toArray());
                    }

                    // fermeture du fichier
                    fclose($handle);

                    // création du zip
                    /*$zip = new \ZipArchive();
                    $fileZip = $file . '.zip';

                    if ($zip->open($path.$fileZip, ZipArchive::CREATE)) {
                        $zip->addFile($path.$file);
                        $zip->close();

                    }

                    // suppression du fichier csv
                    unlink($path.$file);*/

                    // notice du téléchargement
                    $request->getSession()->getFlashBag()->add('notice', 'La requête a retournée ' . count($observations) .' observation(s). Le téléchargement va commencer automatiquement.');

                    // création de la réponse html
                    $response = $this->render('dashboard/extraction.html.twig', array(
                        'fichierExtract' => $file, // file est le string du chemin du fichier
                        'form' => $form->createView(),
                    ));

                    // création du refresh dans le header pour déclencher le download du fichier

                    $response->headers->set('Refresh', '2; url='.$this->generateUrl('fn_dashboard_extract', array('slug' => $file)));

                    // envoi de la double réponse
                    return $response;

                } else {
                    // ajout d'une notice comme quoi la requête n'a renvoyée aucun résultat
                    $request->getSession()->getFlashBag()->add('notice', 'La requête n\'a retourné aucune observation.');
                }


            } else {
                // on informe l'utilisateur du problème
                $form->addError(new FormError("La date de début doit être antérieur à la date de fin"));
            }

        }

        return $this->render('dashboard/extraction.html.twig', array(
            'fichierExtract' => $file,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/dashboard/extract/{slug}", name="fn_dashboard_extract")
     * @Security("has_role('ROLE_NATURALISTE')")
     * Déclenche le téléchargement du fichier
     * dont le chemin est passé en paramètre
     */
    public function fileAction($slug)
    {
        $path = __DIR__.'/../../../web/downloads/';
        return $this->file($path.$slug);
    }
}
