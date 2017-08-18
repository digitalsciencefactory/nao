<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Observation;
use AppBundle\Entity\User;
use AppBundle\Form\Type\CarteType;
use AppBundle\Form\Type\NatSignType;
use AppBundle\Form\Type\ObservationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\UserType;

class ParticiperController extends Controller
{
    /**
     * @Route("/participer/espace-naturaliste", name="fn_participer_espace_nat")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function espaceNatAction (Request $request)
    {
        $observation = new Observation();
        $form = $this->createForm(CarteType::class, $observation);
        $xmlFile = 'assets/fnat/xml/point.xml';

        //On initialise le fichier xml pour ne pas afficher de points avant requète
        if (file_exists($xmlFile))
        {
            $domDocument = new \DOMDocument('1.0', "UTF-8");
            $domDocument->save($xmlFile);
        }

        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsTable = $obsManager->findAll();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $obsList = $obsManager->findBy(array('espece' => $observation->getEspece()));

            // On rempli le fichier XML
            $this->SqlToXml($obsList, $xmlFile);

            return $this->render('Participer/espace-naturaliste.html.twig', array(
                'form' => $form->createView(),
                'obsList' => $obsList,
                'obsTable' => $obsTable,
            ));

        }

        return $this->render('Participer/espace-naturaliste.html.twig', array(
            'form' => $form->createView(),
            'obsTable' => $obsTable,
        ));
    }

    /**
     * @Route("/participer/envoi-observation", name="fn_participer_envoi_obs")
     */
    public function envoiObsAction (Request $request)
    {
        $observation = new Observation();
        $form = $this->createForm(ObservationType::class, $observation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $espece = $observation->getEspece();

            $taxrefManager = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Taxref');

            $especeToSave = $taxrefManager->getOneWithJoin($espece);

            $observation->setEspece($especeToSave[0]);
            // on récupère l'espèce avec son id


            // On complète l'entité
            $observation->setObservateur($user);
            $observation->setDcree(new \DateTime('NOW'));


            if($user->getRoles()[0] == "ROLE_NATURALISTE"){
                $observation->setStatut("STATUT_VALIDE");
                $observation->setNaturaliste($user);
                $observation->setDvalid(new \DateTime('NOW'));
            }


        // on essaye d'insérer en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();


        // on affiche la page envoi_observation avec le flash bag
            if($user->getRoles()[0] == ("ROLE_NATURALISTE")) {
                $request->getSession()->getFlashBag()->add('notice', 'Votre observation est bien enregistrée et validée.');
            }else{
                $request->getSession()->getFlashBag()->add('notice', 'Votre observation a bien été transmise à un naturaliste.');
            }
        $observation = new Observation();
        $form = $this->createForm(ObservationType::class, $observation);

        return $this->render('Participer/envoi-observation.html.twig', array(
            'form' => $form->createView(),
        ));

        }

        return $this->render('Participer/envoi-observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/carte-des-observations", name="fn_participer_carte_obs")
     * @Route("/participer")
     */
    public function carteObsAction (Request $request)
    {
        $observation = new Observation();
        $form = $this->createForm(CarteType::class, $observation);
        $xmlFile = 'assets/fnat/xml/point.xml';

        //On initialise le fichier xml pour ne pas afficher de points avant requète
        if (file_exists($xmlFile))
        {
            $domDocument = new \DOMDocument('1.0', "UTF-8");
            $domDocument->save($xmlFile);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $obsList = $obsManager
                ->getEspeceWithJoin($observation->getEspece());

            // On rempli le fichier XML
            $this->SqlToXml($obsList, $xmlFile);

            return $this->render('Participer/carte-des-observations.html.twig', array(
                'form' => $form->createView(),
                'obsList' => $obsList,
            ));

        }

        return $this->render('Participer/carte-des-observations.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/fiche-observation/{slug}", name="fn_fiche_observation")
     *
     */
    public function ficheObsAction ($slug)
    {
        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsList = $obsManager->findBy(array('id' => $slug));
        $observation = $obsManager->getOneWithJoin($slug);

        $xmlFile = 'assets/fnat/xml/point.xml';

        //On initialise le fichier xml pour ne pas afficher de points avant requète
        if (file_exists($xmlFile))
        {
            $domDocument = new \DOMDocument('1.0', "UTF-8");
            $domDocument->save($xmlFile);
        }

        // On rempli le fichier XML
        $this->SqlToXml($obsList, $xmlFile);

        return $this->render('Participer/fiche-observation.html.twig', array(
            'observation' => $observation,
        ));
    }

    /**
     * @Route("/participer/fiche-modification/{slug}", name="fn_fiche_modification")
     *
     */
    public function ficheModifAction ($slug)
    {
        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsList = $obsManager->findBy(array('id' => $slug));
        $observation = $obsManager->getOneWithJoin($slug);

        $xmlFile = 'assets/fnat/xml/point.xml';

        //On initialise le fichier xml pour ne pas afficher de points avant requète
        if (file_exists($xmlFile))
        {
            $domDocument = new \DOMDocument('1.0', "UTF-8");
            $domDocument->save($xmlFile);
        }

        // On rempli le fichier XML
        $this->SqlToXml($obsList, $xmlFile, 'all');

        return $this->render('Participer/fiche-modification.html.twig', array(
            'observation' => $observation,
        ));
    }


    /**
     * @Route("/participer/mon-compte", name="fn_participer_profil")
     */
    public function profilAction (Request $request)
    {
        /* todo:Compléter la méthode */
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        return $this->render('Participer/mon-compte.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @Route("/participer/autocomplete/", name="fn_participer_autocomplete")
     */
    public function autoCompletionAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {

        $search = $request->get('search');

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Taxref');

        $results = $repository->getByAutoComplete($search);
        return new JsonResponse($results);
    }
        $results = Array();

        return new JsonResponse($results);
    }

    public function SqlToXml($obsList, $xmlFile, $status=null)
    {
        $domDocument = new \DOMDocument('1.0', "UTF-8");
        $markers = $domDocument->createElement('markers');
        $domDocument->appendChild($markers);

        if ($status == null){
            foreach ($obsList as $observation){
                if ($observation->getStatut() == 'STATUT_VALIDE'){
                    $marker = $domDocument->createElement('marker');
                    $markers->appendChild($marker);
                    $marker->setAttribute("lat", $observation->getLatitude());
                    $marker->setAttribute("lng", $observation->getLongitude());
                }
            }
        } else {
            foreach ($obsList as $observation){
                $marker = $domDocument->createElement('marker');
                $markers->appendChild($marker);
                $marker->setAttribute("lat", $observation->getLatitude());
                $marker->setAttribute("lng", $observation->getLongitude());
            }

        }

        echo $domDocument->saveXML();

        // Sauvegarder le document XML
        $domDocument->save($xmlFile);
    }

}
