<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Observation;
use AppBundle\Entity\Taxref;
use AppBundle\Entity\User;
use AppBundle\Form\Type\CarteType;
use AppBundle\Form\Type\ModificationObsType;
use AppBundle\Form\Type\NatSignType;
use AppBundle\Form\Type\ObservationType;
use AppBundle\Service\ExtractionService;
use AppBundle\Extraction\Extraction;
use AppBundle\Form\Type\ExtractType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\DateTime;

class ParticiperController extends Controller
{
    /**
     * @Route("/participer/observation-en-attente", name="fn_participer_obs_attente")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function obsAttenteAction (Request $request)
    {
        // Liste des observations pour les tableaux
        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsTable = $obsManager->findAll();

        return $this->render('participer/observations_attente.html.twig', array(
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

            $this->saveObservationInDataBase($request, $observation);

            $observation = new Observation();
            $form = $this->createForm(ObservationType::class, $observation);

            return $this->render('participer/envoi_observation.html.twig', array(
                'form' => $form->createView(),
            ));

        }

        return $this->render('participer/envoi_observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/carte-des-observations", name="fn_participer_carte_obs")
     * @Route("/participer")
     */
    public function carteObsAction (Request $request)
    {
        //Formulaire des recherche d'espèce pour la Googlemap
        $obsForm = new Observation();
        $form = $this->createForm(CarteType::class, $obsForm)->handleRequest($request);

        // Gestion de la carte des observations (Liste)
        if ($form->isSubmitted() && $form->isValid()) {

            //Récupère la liste des observationspour la Map
            $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $obsMap= $obsManager->findBy(array('espece' => $obsForm->getEspece()));

            return $this->render('participer/carte_observations.html.twig', array(
                'form' => $form->createView(),
                'obsMap' => $obsMap,
            ));
        }

        return $this->render('participer/carte_observations.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/fiche-observation/{id}", name="fn_fiche_observation")
     * @Method({"GET", "POST"})
     */
    public function ficheObsAction (Request $request, Observation $observation, \Swift_Mailer $mailer)
    {
        $obsForm = new Observation();
        $form = $this->createForm(ModificationObsType::class, $obsForm)
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            //Préparation du mail de confirmation
            $message = (new \Swift_Message('Observation examinée'))
                ->setFrom($this->getUser()->getMail())
                ->setTo($observation->getObservateur()->getMail());

            //Traitement du formulaire
            if ($form->get('valider')->isClicked()) {

                // Récupère l'epèce selon son id pour la mise à jour
                $taxrefManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
                $especeToSave = $taxrefManager->find($obsForm->getEspece());

                //Mise à jour des données
                $observation
                    ->setEspece($taxrefManager->find($especeToSave))
                    ->setCommNat($obsForm->getCommNat())
                    ->setDvalid(new \DateTime('NOW'))
                    ->setStatut('STATUT_VALIDE')
                    ->setNaturaliste($this->getUser());

                $this->getDoctrine()->getManager()->flush();

                //Sélection du message du mail
                $message->setBody( $this->renderView(
                        'mail/obs.validation.html.twig',
                        array('observation' => $observation)),
                    'text/html');

                //Message de confirmation
                $mailer->send($message);
                $request->getSession()->getFlashBag()->add('notice', 'L\'observation est bien été sauvegardée.');

                return $this->redirectToRoute('fn_fiche_observation', ['id' => $observation->getId()]);
            }
            else
            {
                //Sélection du message du mail
                $message->setBody( $this->renderView(
                    'mail/obs.suppression.html.twig',
                    array('observation' => $observation)),
                    'text/html');

                //Suppression de l'observation
                $obsManager = $this->getDoctrine()->getManager();
                $obsManager->remove($observation);
                $obsManager->flush();

                //Message de confirmation
                $mailer->send($message);
                $request->getSession()->getFlashBag()->add('notice', 'L\'observation est bien été supprimée.');

                return $this->redirectToRoute('fn_participer_espace_nat');

            }
        }
        return $this->render('participer/fiche_observation.html.twig', array(
            'observation' => $observation,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/mon-compte", name="fn_participer_profil")
     */
    public function profilAction (Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        //Récupère la liste des observation de l'utilisateur
        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsTable = $obsManager->findBy(array('observateur' => $user));

        // on gère la modification du compte
        if ($form->isSubmitted() && $form->isValid()) {
            $userManager = $this
                ->getDoctrine()
                ->getManager();

            $userRepository = $userManager->getRepository('AppBundle:User');
            $userMail = $this->getUser()->getMail();
            $userDB = $userRepository->findOneBy(array('mail' => $userMail));

            // $user vient du formulaire utilisateur
            // $userDB vient de la BDD
            $userDB->setNom($user->getNom())
                ->setPrenom($user->getPrenom())
                ->setDdn($user->getDdn())
                ->setCodePostal($user->getCodePostal())
                ->setPhoto($user->getPhoto());

            $userManager->persist($userDB);
            $userManager->flush();

            $form = $this->createForm(UserType::class, $userDB);

            $request->getSession()->getFlashBag()->add('notice', 'Votre profil a été mis à jour..');
            return $this->render('participer/mon_compte.html.twig',
                array(
                    'pseudonyme' => $user->getPseudo(),
                    'avatar' => $userDB->getPhoto(),
                    'form' => $form->createView(),
                    'obsTable' => $obsTable,
                ));
        }

        return $this->render('participer/mon_compte.html.twig',
            array(
                'pseudonyme' => $user->getPseudo(),
                'avatar' => $user->getPhoto(),
                'form' => $form->createView(),
                'obsTable' => $obsTable,
            ));
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/participer/autocomplete/", name="fn_participer_autocomplete")
     */
    public function autoCompletionAction(Request $request)
    {
        //if($request->isXmlHttpRequest())
        //{
            $search = $request->get('search');
            $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $results = $repository->getByAutoComplete($search);
            return new JsonResponse($results);
        //return new JsonResponse($results);
        //}
        $results = Array();

        return new JsonResponse($results);
    }

    /**
     * @param Request $request
     * @param $observation
     */
    protected function saveObservationInDataBase(Request $request, $observation)
    {
        $user = $this->getUser();
        $espece = $observation->getEspece();

        $taxrefManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
        $especeToSave = $taxrefManager->getOneWithJoin($espece);
        if (null !== $observation->getFile()) {
            $name = substr(bin2hex(random_bytes(200)),0,100) . "." . $observation->getFile()->getClientOriginalExtension();

            $name = Date("yyyy-mm-dd") . "_" . $name;
            // On déplace le fichier envoyé dans le répertoire de notre choix
            $observation->getFile()->move($this->getParameter('photos_dir'), $name);

            // On sauvegarde le nom de fichier dans notre attribut $url
            $observation->setPhoto($name);
        }


        // on récupère l'espèce avec son id
        $observation->setEspece($especeToSave[0]);

        // On complète l'entité
        $observation->setObservateur($user);
        $observation->setDcree(new \DateTime('NOW'));

        if ($user->getRoles()[0] == "ROLE_NATURALISTE") {
            $observation->setStatut("STATUT_VALIDE");
            $observation->setNaturaliste($user);
            $observation->setDvalid(new \DateTime('NOW'));
        }

        // on essaye d'insérer en base
        $em = $this->getDoctrine()->getManager();
        $em->persist($observation);
        $em->flush();

        // on affiche la page envoi_observation avec le flash bag
        if ($user->getRoles()[0] == ("ROLE_NATURALISTE")) {
            $request->getSession()->getFlashBag()->add('notice', 'Votre observation est bien enregistrée et validée.');
        } else {
            $request->getSession()->getFlashBag()->add('notice', 'Votre observation a bien été transmise à un naturaliste.');
        }
    }

    /**
     * @Route("/participer/extraction-donnees", name="fn_participer_bdd")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function bddAction(Request $request, ExtractionService $extractionService){
        $extraction = new Extraction();
        $file = "";
        $form = $this->createForm(ExtractType::class, $extraction);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            try {
                $observations = $extractionService->getObservationsDatees($extraction);
                $file = $extractionService->generateCsv($extraction,$observations, $this->getParameter('downloads_dir'),$this->getParameter('entete_csv_extract'));

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
            } catch(\RuntimeException $re){
                $request->getSession()->getFlashBag()->add('notice', $re->getMessage());
            }

        }
        return $this->render('participer/extraction.html.twig', array(
            'fichierExtract' => $file,
            'form' => $form->createView(),
        ));
    }

}
