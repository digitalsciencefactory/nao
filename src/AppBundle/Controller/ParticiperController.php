<?php

namespace AppBundle\Controller;

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
        /* todo:Compléter la méthode */
        return $this->render('Participer/envoi-observation.html.twig');
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
        return $this->render('Participer/mon-compte.html.twig',
            array(
                'form' => $form->createView(),
                'avatar' => $user->getPhoto(),
            ));
    }
}