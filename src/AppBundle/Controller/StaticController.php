<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    /**
     * @Route("/", name="fn_front_index")
     * @Route("/accueil")
     */
    public function indexAction(){
        return $this->render('Front/accueil.html.twig');
    }

    /**
     * @Route("/inscription", name="fn_front_inscription")
     */
    public function inscriptionAction (){
        return $this->render('Front/inscription.html.twig');
    }


    /**
     * @Route("/qui-sommes-nous", name="fn_front_about")
     */
    public function aboutAction ()
    {
        return $this->render('Front/qui-sommes-nous.html.twig');
    }

}