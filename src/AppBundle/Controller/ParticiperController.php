<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Observation;
use AppBundle\Entity\Taxref;
use AppBundle\Entity\User;
use AppBundle\Form\Type\CarteType;
use AppBundle\Form\Type\ModificationObsType;
use AppBundle\Form\Type\NatSignType;
use AppBundle\Form\Type\ObservationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\UserType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\DateTime;

class ParticiperController extends Controller
{
    /**
     * @Route("/participer/espace-naturaliste", name="fn_participer_espace_nat")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function espaceNatAction (Request $request)
    {
        //Formulaire des recherche d'espèce pour la Googlemap
        $obsForm = new Observation();
        $form = $this->createForm(CarteType::class, $obsForm)->handleRequest($request);

        // Liste des observations pour les tableaux
        $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
        $obsTable = $obsManager->findAll();

        // Gestion de la carte des observations (Liste)
        if ($form->isSubmitted() && $form->isValid()) {

            //Récupère la liste des observations selon l'éspèce
            $obsMap= $obsManager->findBy(array('espece' => $obsForm->getEspece()));

            return $this->render('Participer/espace_naturaliste.html.twig', array(
                'form' => $form->createView(),
                'obsMap' => $obsMap,
                'obsTable' => $obsTable,
            ));
        }

        return $this->render('Participer/espace_naturaliste.html.twig', array(
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

            $taxrefManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
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

        return $this->render('Participer/envoi_observation.html.twig', array(
            'form' => $form->createView(),
        ));

        }

        return $this->render('Participer/envoi_observation.html.twig', array(
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

            //Récupère la liste des observation selon l'éspèce
            $obsManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observation');
            $obsMap = $obsManager->findBy(array('espece' => $obsForm->getEspece()));

            return $this->render('Participer/carte_observations.html.twig', array(
                'form' => $form->createView(),
                'obsMap' => $obsMap,
            ));
        }

        return $this->render('Participer/carte_observations.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/participer/fiche-observation/{id}", name="fn_fiche_observation")
     * @Security("has_role('ROLE_NATURALISTE')")
     * @Method({"GET", "POST"})
     */
    public function ficheObsAction (Request $request, Observation $observation)
    {
        //Formulaire des recherche d'espèce pour la Googlemap
        $obsForm = new Observation();
        $form = $this->createForm(ModificationObsType::class, $obsForm)
            ->handleRequest($request);


        // Gestion de la carte des observations (Liste)
        if ($form->isSubmitted() && $form->isValid())
        {
            // Récupère l'epèce selon son id
            $taxrefManager = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
            $especeToSave = $taxrefManager->find($obsForm->getEspece());

            //Mise à jour des données
            $observation
                ->setEspece($taxrefManager->find($especeToSave))
                ->setCommNat($obsForm->getCommNat())
                ->setDvalid(new \DateTime('NOW'))
                ->setStatut('STATUT_VALIDE')
                ->setNaturaliste($this->getUser());

            //Sauvegarde dans la base
            $this->getDoctrine()->getManager()->flush();

            //Massage de confirmation
            $request->getSession()->getFlashBag()->add('notice', 'L\'observation est bien été sauvegardée.');

            return $this->redirectToRoute('fn_fiche_observation', ['id' => $observation->getId()]);
        }

        return $this->render('Participer/fiche_observation.html.twig', array(
            'observation' => $observation,
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/participer/supprimer-fiche/{id}", name="fn_fiche_supprimer")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function supprimerObsAction (Request $request, Observation $observation)
    {
        $obsManager = $this->getDoctrine()->getManager();
        $obsManager->remove($observation);
        $obsManager->flush();

        $request->getSession()->getFlashBag()->add('notice', 'L\'observation est bien été supprimée.');

        return $this->redirectToRoute('fn_participer_espace_nat');
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
            $userDB->setNom($user->getNom());
            $userDB->setPrenom($user->getPrenom());
            $userDB->setDdn($user->getDdn());
            $userDB->setCodePostal($user->getCodePostal());
            $userDB->setPhoto($user->getPhoto());

            $userManager->persist($userDB);
            $userManager->flush();

            $form = $this->createForm(UserType::class, $userDB);

            $request->getSession()->getFlashBag()->add('notice', 'Votre profil a été mis à jour..');
            return $this->render('Participer/mon_compte.html.twig',
                array(
                    'pseudonyme' => $user->getPseudo(),
                    'avatar' => $userDB->getPhoto(),
                    'form' => $form->createView(),
                    'obsTable' => $obsTable,
                ));

        }

        return $this->render('Participer/mon_compte.html.twig',
            array(
                'pseudonyme' => $user->getPseudo(),
                'avatar' => $user->getPhoto(),
                'form' => $form->createView(),
                'obsTable' => $obsTable,
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
        if($request->isXmlHttpRequest())
        {
            $search = $request->get('search');
            $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Taxref');
            $results = $repository->getByAutoComplete($search);
            return new JsonResponse($results);
        }
        $results = Array();
        return new JsonResponse($results);
    }

}
