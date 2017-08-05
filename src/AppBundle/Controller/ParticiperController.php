<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Observation;
use AppBundle\Entity\User;
use AppBundle\Form\NatSignType;
use AppBundle\Form\ObservationType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserType;

class ParticiperController extends Controller
{
    /**
     * @Route("/participer/espace-naturaliste", name="fn_participer_espace_nat")
     */
    public function espaceNatAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Participer/espace-naturaliste.html.twig');
    }

    /**
     * @Route("/participer/envoi-observation", name="fn_participer_envoi_obs")
     */
    public function envoiObsAction (Request $request)
    {
        $observation = new Observation();
        $form = $this->createForm(ObservationType::class, $observation);
        $user = $this->getUser();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        // On complète l'entité
            $observation->setObservateur($user);


        // on essaye d'insérer en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();


        // on affiche la page de connexion avec le flash bag
        $request->getSession()->getFlashBag()->add('notice', 'Votre observation a bien été transmise à un naturaliste.');
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
     * @Route("/participer/carte-des-observations", name="fn_participer_map")
     * @Route("/participer")
     */
    public function mapAction (Request $request)
    {
        /* todo:Compléter la méthode */

        return $this->render('Participer/carte-des-observations.html.twig');
    }

    /**
     * @Route("/participer/mon-compte", name="fn_participer_profil")
     */
    public function profilAction (Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Votre profil a été mis à jour.');

            return $this->render('Participer/mon-compte.html.twig',
                array(
                    'form' => $form->createView(),
                    'avatar' => $user->getPhoto(),
                ));
        }


        return $this->render('Participer/mon-compte.html.twig',
            array(
                'form' => $form->createView(),
                'avatar' => $user->getPhoto(),
            ));
    }
}