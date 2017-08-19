<?php

namespace AppBundle\Controller;

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
    public function bddAction(){
        return $this->render('dashboard/extraction.html.twig');
    }


}
