<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Observation;
use AppBundle\Extraction\Extraction;
use AppBundle\Form\Type\ExtractType;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use ZipArchive;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashBoardController extends Controller
{
    /**
     * @Route("/dashboard", name="fn_dashboard_index")
     * @Route("/dashboard/")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        return $this->render('dashboard/accueil.html.twig');
    }

    /**
     * @Route("/dashboard/extraction-donnees", name="fn_dashboard_bdd")
     * @Route("/dashboard/extraction-donnees")
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

    /**
     * @Route("dashboard/naturalistes/", name="fn_dashboard_naturalistes")
     * Valide le role naturaliste à un user
     */
    public function naturalistesAction($slug){
        return new Response("Notre propre Hello World !");
    }

    /**
     * @Route("/dashboard/naturalistes/avalider", name="fn_dashboard_natavalid")
     * Liste les naturalistes à valider et permet de les valider ou refuser
     */
    public function natEnAttenteAction(){
        $users = $this->getNatEnAttente();

        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }

    /**
     * @Route("dashboard/naturalistes/valider/{id}", name="fn_dashboard_natvalid", requirements={"id": "\d+"})
     * Valide le role naturaliste à un user
     */
    public function natValiderAction($id = 0, Request $request){
        if($id > 0){
            // on va chercher en base le user
            $userManager = $this->getDoctrine()->getManager();
            $userRepository = $userManager->getRepository('AppBundle:User');
            $user = $userRepository->findOneNatBy($id,false);

            // si il n'existe pas on crée un message d'erreur
            if($user === null){
                $request->getSession()->getFlashBag()->add('noticeWarning', 'L\'utilisateur est déjà validé ou n\'a pas demandé à être naturaliste');

            } else {
                $user->setRoles(array('ROLE_NATURALISTE'));
                $userManager->persist($user);
                $userManager->flush();
                $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur '. $user->getPseudo() . ' a été validé.');

            }

            //
        } else {
            // message d'erreur
            $request->getSession()->getFlashBag()->add('noticeError', 'Une erreur est survenue.');
        }

        $users = $this->getNatEnAttente();


        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }

    /**
     * @Route("dashboard/naturalistes/refuser/{id}", name="fn_dashboard_natrefus", requirements={"id": "\d+"})
     * Refuse le role naturaliste à un user
     */
    public function natRefuserAction($id = 0, Request $request){
        if($id > 0){
            // on va chercher en base le user
            $userManager = $this->getDoctrine()->getManager();
            $userRepository = $userManager->getRepository('AppBundle:User');
            $user = $userRepository->findOneNatBy($id,false);

            // si il n'existe pas on crée un message d'erreur
            if($user === null){
                $request->getSession()->getFlashBag()->add('noticeWarning', 'L\'utilisateur est déjà refusé ou n\'a pas demandé à être naturaliste');

            } else {
                // suppression du fichier carte
                unlink(__DIR__.'/../../../web/assets/fnat/naturalistes/'.$user->getCarte());

                $user->setCarte(null);
                $userManager->persist($user);
                $userManager->flush();
                $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur '. $user->getPseudo() . ' a été refusé et reste observateur.');

            }

        } else {
            // message d'erreur
            $request->getSession()->getFlashBag()->add('noticeError', 'Une erreur est survenue.');
        }

        $users = $this->getNatEnAttente();


        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }

    /**
     * @return mixed
     */
    protected function getNatEnAttente()
    {
// récupération des naturalistes en attente de validation
        $manager = $this
            ->getDoctrine()
            ->getManager();
        $userRepository = $manager->getRepository('AppBundle:User');

        $users = $userRepository->getNaturalistesEnAttente();

        return $users;
    }
}
