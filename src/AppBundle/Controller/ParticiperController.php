<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/participercarte-des-observations", name="fn_participer_map")
     * @Route("/participer")
     */
    public function mapAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/carte-des-observations.html.twig');
    }
}