<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Observation;
use AppBundle\Entity\Taxref;
use AppBundle\Entity\User;
use AppBundle\Form\Type\CarteType;
use AppBundle\Form\Type\ModalObsType;
use AppBundle\Form\Type\ModificationObsType;
use AppBundle\Form\Type\ObservationType;
use AppBundle\Form\Type\ExtractType;
use AppBundle\Form\Type\UserType;
use AppBundle\Service\ExtractionService;
use AppBundle\Extraction\Extraction;
use AppBundle\Service\MessagesFlashService;
use AppBundle\Service\ObservationService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Class ParticiperController
 * @package AppBundle\Controller
 */
class ParticiperController extends Controller
{
    /**
     * @Route("/participer/observation-en-attente", name="fn_participer_obs_attente")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function obsAttenteAction (ObservationService $obsService)
    {
        return $this->render('participer/observations_attente.html.twig', array(
            'obsTable' => $obsService->findObsEnAttente()
        ));
    }
    /**
     * @Route("/participer/envoi-observation", name="fn_participer_envoi_obs")
     */
    public function envoiObsAction (Request $request, ObservationService $observationService)
    {
        $observation = new Observation();
        $form = $this->createForm(ObservationType::class, $observation)
            ->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $espece = $observation->getEspece();
            $taxrefManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
            $especeToSave = $taxrefManager->getOneWithJoin($espece);

            $observationService->saveObservation($user, $observation, $especeToSave[0],  $this->getParameter('photos_dir'));

            $form = $this->createForm(ObservationType::class, new Observation());
        }

        return $this->render('participer/envoi_observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/participer/carte-des-observations", name="fn_participer_carte_obs")
     * @Route("/participer")
     */
    public function carteObsAction (Request $request, ObservationService $obsService)
    {
        //Formulaire des recherche d'espèce pour la Googlemap
        $obsForm = new Observation();
        $form = $this->createForm(CarteType::class, $obsForm)
            ->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return $this->render('participer/carte_observations.html.twig', array(
                'form' => $form->createView(),
                'obsMap' => $obsService->findObsByEspece($obsForm->getEspece()),
            ));
        }
        return $this->render('participer/carte_observations.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/participer/fiche-observation/{id}", name="fn_fiche_observation", requirements={"id": "\d+"})
     * @Method({"GET", "POST"})
     *
     * @param Request $request
     * @param Observation $observation
     * @param ObservationService $obsService
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function ficheObsAction (Request $request, Observation $observation, ObservationService $obsService)
    {
        //Formulaire de validation
        $obsValid = new Observation();
        $formValid = $this->createForm(ModificationObsType::class, $obsValid)
            ->handleRequest($request);
        //Formulaire de confirmation de suppression
        $obsDel = new Observation();
        $formDel = $this->createForm(ModalObsType::class, $obsDel)
            ->handleRequest($request);
        if ($formValid->isSubmitted() && $formValid->isValid())
        {
            $obsService->valideObservation($observation, $obsValid, $this->getUser() );
            return $this->redirectToRoute('fn_fiche_observation', ['id' => $observation->getId()]);
        }
        if ($formDel->isSubmitted() && $formDel->isValid())
        {
            $obsService->deleteObservation($observation, $obsDel);
            return $this->redirectToRoute('fn_participer_obs_attente');
        }
        return $this->render('participer/fiche_observation.html.twig', array(
            'observation' => $observation,
            'form' => $formValid->createView(),
            'formModal' => $formDel->createView()
        ));
    }
    /**
     * @Route("/participer/mon-compte", name="fn_participer_profil")
     */
    public function profilAction (Request $request, MessagesFlashService $messagesFlashService)
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
            
            $messagesFlashService->messageSuccess('Votre profil a été mis à jour.');
            
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
        if($request->isXmlHttpRequest())
        {
            $search = $request->get('search');
            $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $results = $repository->getByAutoComplete($search);
            return new JsonResponse($results);
        }
        $results = Array();
        return new JsonResponse($results);
    }

    /**
     * @Route("/participer/extraction-donnees", name="fn_participer_bdd")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function bddAction(Request $request, ExtractionService $extractionService, MessagesFlashService $messagesFlashService){
        $extraction = new Extraction();
        $file = "";
        $form = $this->createForm(ExtractType::class, $extraction);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            try {
                $observations = $extractionService->getObservationsDatees($extraction);
                $file = $extractionService->generateCsv($extraction,$observations, $this->getParameter('downloads_dir'),$this->getParameter('entete_csv_extract'));
                $messagesFlashService->messageSuccess('La requête a retournée ' . count($observations) .' observation(s). Le téléchargement va commencer automatiquement.');

                // création de la réponse html
                $response = $this->render('participer/extraction.html.twig', array(
                    'fichierExtract' => $file, // file est le string du chemin du fichier
                    'form' => $form->createView(),
                ));

                // création du refresh dans le header pour déclencher le download du fichier
                $response->headers->set('Refresh', '2; url='.$this->generateUrl('fn_participer_extract', array('fichier' => $file)));

                // envoi de la double réponse
                return $response;
            } catch(\RuntimeException $re){
                $messagesFlashService->messageError($re->getMessage());
            }
        }
        return $this->render('participer/extraction.html.twig', array(
            'fichierExtract' => $file,
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/dashboard/extract/{fichier}", name="fn_participer_extract")
     * @Security("has_role('ROLE_NATURALISTE')")
     * Déclenche le téléchargement du fichier
     * dont le chemin est passé en paramètre
     */
    public function fileAction($fichier)
    {
        $path = $this->getParameter("downloads_dir");
        return $this->file($path.$fichier);
    }
}


