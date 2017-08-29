<?php
namespace AppBundle\Controller;
use AppBundle\Mailer\FnatMailer;
use AppBundle\Service\DashboardService;
use AppBundle\Service\ExtractionService;
use AppBundle\Entity\Observation;

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
     * @Route("/dashboard/")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        return $this->render('dashboard/accueil.html.twig');
    }

    /**
     * @Route("dashboard/naturalistes/{page}", name="fn_dashboard_naturalistes", requirements={"page": "\d+"})
     * Liste les naturalistes par page
     */
    public function naturalistesAction($page = 1, DashboardService $dashboardService){

        return $this->listerUser($page, $dashboardService, true);
    }

    /**
     * @Route("dashboard/observateurs/{page}", name="fn_dashboard_observateurs", requirements={"page": "\d+"})
     * Liste les observateurs par page
     */
    public function observateursAction($page = 1, DashboardService $dashboardService){

        return $this->listerUser($page, $dashboardService, false);
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
     * @Route("/dashboard/observateurs-a-valider", name="fn_dashboard_nobsavalid")
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
     * Factorisation des messages à  enregistrer en session
     * lors de la validation et le refus d'un naturaliste
     */
    protected function getMessageNatValidation($level, $action,Request $request){

        if($level === "error") {
            $request->getSession()->getFlashBag()->add('notice', 'Une erreur est survenue.');
            $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-danger');
            return;
        }

        switch($level) {

            case "success":
                // tous les messages de réussite
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');

                switch ($action) {

                    case "refus":
                        $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur a été refusé et reste observateur.');
                        break;

                    case "validation":
                        $request->getSession()->getFlashBag()->add('notice', 'L\'utilisateur a été validé');
                        break;
                }

                break;

            case "warning":
                // tous les messages de warning
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-warning');

                switch ($action) {

                    case "refus":
                        $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur est déjà  refusé ou n\'a pas demandé à être naturaliste');
                        break;

                    case "validation":
                        $request->getSession()->getFlashBag()->add('noticeWarning', 'L\'utilisateur est déjà  validé ou n\'a pas demandé à  être naturaliste');
                        break;
                }

        }
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

    /**
     * @param $page
     * @param DashboardService $dashboardService
     * @return Response
     */
    protected function listerUser($page, DashboardService $dashboardService, $naturaliste)
    {
        $userManager = $this->getDoctrine()->getManager();
        $userRepository = $userManager->getRepository('AppBundle:User');

        // on compte le nombre de naturaliste
        $nombre = $userRepository->howMany($naturaliste);

        // on compte la pagination nécessaire
        $nombrePageMax = $dashboardService->getPageMax($page, $nombre);

        if ($page > $nombrePageMax) {
            $page = $nombrePageMax;
        }

        // on récupère le bon nombre de naturaliste
        $calcul = (10 * ($page - 1));
        $naturalistes = $userRepository->getUsersByOffset(10, $calcul, $naturaliste);

        if($naturaliste){
            $pageName = 'dashboard/naturalistes.html.twig';
        } else {
            $pageName = 'dashboard/observateurs.html.twig';
        }

        return $this->render($pageName,
            array(
                'total' => $nombre,
                'page' => $page,
                'pages' => $nombrePageMax,
                'users' => $naturalistes,
            ));
    }


}



