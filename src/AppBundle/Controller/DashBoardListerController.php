<?php
namespace AppBundle\Controller;
use AppBundle\Mailer\FnatMailer;
use AppBundle\Service\DashboardService;
use AppBundle\Service\ExtractionService;
use AppBundle\Entity\Observation;

use AppBundle\Service\PageService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\FormError;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DashBoardListerController extends Controller
{
    /**
     * @Route("/dashboard", name="fn_dashboard_index")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        return $this->render('dashboard/accueil.html.twig');
    }

    /**
     * @Route("dashboard/naturalistes/{page}", name="fn_dashboard_naturalistes", requirements={"page": "\d+"})
     * Liste les naturalistes par page
     */
    public function naturalistesAction($page = 1, PageService $pageService ){

        $userManager = $this->getDoctrine()->getManager();
        $userRepository = $userManager->getRepository('AppBundle:User');

        // on compte le nombre de naturaliste
        $nombre = $userRepository->howMany(true);

        $nombrePageMax = $pageService->getPageMax($nombre);

        $page = $pageService->verifPage($page,$nombrePageMax);

        // on récupère le bon nombre de naturaliste
        $naturalistes = $userRepository->getUsersByOffset(10, (10 * ($page - 1)), true);

        return $this->render('dashboard/naturalistes.html.twig',
            array(
                'total' => $nombre,
                'page' => $page,
                'pages' => $nombrePageMax,
                'users' => $naturalistes,
                'pagination' => "fn_dashboard_naturalistes",
            ));
    }

    /**
     * @Route("dashboard/observateurs/{page}", name="fn_dashboard_observateurs", requirements={"page": "\d+"})
     * Liste les observateurs par page
     */
    public function observateursAction($page = 1,  PageService $pageService ){
        $userManager = $this->getDoctrine()->getManager();
        $userRepository = $userManager->getRepository('AppBundle:User');

        // on compte le nombre de naturaliste
        $nombre = $userRepository->howMany(false);

        $nombrePageMax = $pageService->getPageMax($nombre);

        $page = $pageService->verifPage($page,$nombrePageMax);

        // on récupère le bon nombre de naturaliste
        $naturalistes = $userRepository->getUsersByOffset(10, (10 * ($page - 1)), false);

        return $this->render('dashboard/observateurs.html.twig',
            array(
                'total' => $nombre,
                'page' => $page,
                'pages' => $nombrePageMax,
                'users' => $naturalistes,
                'pagination' => "fn_dashboard_observateurs",
            ));
    }

    /**
     * @Route("/dashboard/naturalistes-a-valider", name="fn_dashboard_natavalid")
     * Liste les naturalistes à  valider et permet de les valider ou refuser
     */
    public function natEnAttenteAction(){
        $users = $this->getUsersEnAttente(true);
        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }

    /**
     * @Route("/dashboard/observateurs-a-valider", name="fn_dashboard_obsavalid")
     * Liste les observateurs à  valider et permet de les valider
     */
    public function obsEnAttenteAction(){
        $users = $this->getUsersEnAttente(false);
        return $this->render('dashboard/observateurs_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }


    /**
     * @Route("dashboard/bannis", name="fn_dashboard_bannis")
     * Liste les bannis
     */
    public function bannisAction(){
        $userRepository = $this->getDoctrine()->getManager()->getRepository('AppBundle:User');

        $users = $userRepository->findBy(array(
           'statut' => 'STATUT_BANNI',
        ));

        return $this->render('dashboard/bannis.html.twig',
            array(
                'users' => $users,
            ));

    }


    /**
     * @return mixed
     */
    protected function getUsersEnAttente($naturaliste)
    {
        $manager = $this
            ->getDoctrine()
            ->getManager();
        $userRepository = $manager->getRepository('AppBundle:User');
        $users = $userRepository->getUsersEnAttente($naturaliste);
        return $users;
    }



}



