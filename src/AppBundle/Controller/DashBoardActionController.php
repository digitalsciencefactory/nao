<?php
namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Mailer\FnatMailer;
use AppBundle\Service\DashboardService;
use AppBundle\Service\ExtractionService;
use AppBundle\Entity\Observation;

use AppBundle\Service\MessagesFlashService;
use AppBundle\Service\UserService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\FormError;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DashBoardActionController extends Controller
{
    /**
     * @Route("/dashboard/observateur-validation/{id}", name="fn_dashboard_validObs", requirements={"id": "\d+"})
     * @param $id
     * @param Request $request
     */
    public function obsValiderAction(User $user, $request, UserService $userService){

        $userService->validObs($user);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_observateurs") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/naturalistes-validation/{id}", name="fn_dashboard_natvalid", requirements={"id": "\d+"})
     * Valide le role naturaliste à  un user
     */
    public function natValiderAction(User $user, Request $request, UserService $userService){

        $userService->validNat($user);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_natavalid") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }
    /**
     * @Route("dashboard/naturalistes-refus/{id}", name="fn_dashboard_natrefus", requirements={"id": "\d+"})
     * Refuse le role naturaliste à  un user
     */
    public function natRefuserAction(User $user, Request $request, UserService $userService){

        $userService->refuseNat($user, $this->getParameter("carte_pro_dir"));

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_natavalid") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/bannir/{id}", name="fn_dashboard_bannir", requirements={"id": "\d+"})
     * Tente de bannir un utilisateur
     */
    public function bannirAction(User $user, Request $request, UserService $userService){

        $userService->banUser($user);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_bannis") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/debloquer/{id}", name="fn_dashboard_debloquer", requirements={"id": "\d+"})
     * Tente de bannir un utilisateur
     */
    public function debloquerAction(User $user, Request $request, UserService $userService){

        $userService->debanUser($user);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_index") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/supprimer/{id}", name="fn_dashboard_supprimer", requirements={"id": "\d+"})
     * @param int $id
     * @param Request $request
     */
    public function supprimerAction(User $user, Request $request, UserService $userService){

        $userService->remove($user);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_index") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }


}



