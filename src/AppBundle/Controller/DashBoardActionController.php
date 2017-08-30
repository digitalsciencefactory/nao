<?php
namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Mailer\FnatMailer;
use AppBundle\Service\DashboardService;
use AppBundle\Service\ExtractionService;
use AppBundle\Entity\Observation;

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
     * @Route("/dashboard/extract/{slug}", name="fn_dashboard_extract")
     * @Security("has_role('ROLE_NATURALISTE')")
     * Déclenche le téléchargement du fichier
     * dont le chemin est passé en paramètre
     */
    public function fileAction($slug)
    {
        $path = $this->getParameter("downloads_dir");
        return $this->file($path.$slug);
    }

    /**
     * @Route("/dashboard/observateur-validation/{id}", name="fn_dashboard_validObs", requirements={"id": "\d+"})
     * @param $id
     * @param Request $request
     */
    public function obsValiderAction($id = 0, $request){
        if($id > 0) {
            $manager = $this
                ->getDoctrine()
                ->getManager();
            $userRepository = $manager->getRepository('AppBundle:User');

            $user = $userRepository->findOneBy(array(
                'id' => $id,
                'statut' => "STATUT_INACTIF",
            ));

            if($user === null){
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-warning');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur est déjà  validé ou n\'est pas reconnu dans la base de données.');

            } else {
                $user->setToken("");
                $user->setStatut("STATUT_ACTIF");

                $manager->persist($user);
                $manager->flush();

                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur a été validé. Un mail vient d\'être envoyé pour le prévenir');

                $mail = $this->getMailer();
                $mail->insValidObs($user);
            }
        }

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_observateurs") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/naturalistes-validation/{id}", name="fn_dashboard_natvalid", requirements={"id": "\d+"})
     * Valide le role naturaliste à  un user
     */
    public function natValiderAction($id = 0, Request $request){

        $this->validateOrRefuseNat($id, "validation",$request);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_natavalid") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }
    /**
     * @Route("dashboard/naturalistes-refus/{id}", name="fn_dashboard_natrefus", requirements={"id": "\d+"})
     * Refuse le role naturaliste à  un user
     */
    public function natRefuserAction($id = 0, Request $request){

        $this->validateOrRefuseNat($id, "refus",$request);

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_natavalid") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/bannir/{id}", name="fn_dashboard_bannir", requirements={"id": "\d+"})
     * Tente de bannir un utilisateur
     */
    public function bannirAction($id = 0, Request $request){

        if($id>0){
            $userManager = $this->getDoctrine()->getManager();
            $userRepository = $userManager->getRepository('AppBundle:User');

            $user = $userRepository->findOneBy(array(
               'id' => $id,
               'statut' => "STATUT_ACTIF"
            ));
            if($user === null){
                $this->setMessageFlashBag("warning", 'L\'utilisateur est déjà bloqué, inactif ou inconnu', $request);

            } else {
                $user->setStatut("STATUT_BANNI");

                $userManager->persist($user);
                $userManager->flush();

                $this->setMessageFlashBag("success", 'L\'utilisateur a été bloqué. Un mail vient d\'être envoyé pour le prévenir.', $request);

                $mail = $this->getMailer();
                $mail->banUser($user);
            }
        }

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_bannis") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/debloquer/{id}", name="fn_dashboard_debloquer", requirements={"id": "\d+"})
     * Tente de bannir un utilisateur
     */
    public function debloquerAction($id = 0, Request $request){

        if($id>0) {
            $userManager = $this->getDoctrine()->getManager();
            $userRepository = $userManager->getRepository('AppBundle:User');

            $user = $userRepository->findOneBy(array(
                'id' => $id,
                'statut' => "STATUT_BANNI"
            ));
            if ($user === null) {
                $this->setMessageFlashBag("warning", 'L\'utilisateur est déjà débloqué, actif  ou inconnu.', $request);

            } else {
                $user->setStatut("STATUT_ACTIF");

                $userManager->persist($user);
                $userManager->flush();

                $this->setMessageFlashBag("success", 'L\'utilisateur a été débloqué. Un mail vient d\'être envoyé pour le prévenir.', $request);

                $mail = $this->getMailer();
                $mail->debanUser($user);
            }
        }

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_index") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * @Route("dashboard/supprimer/{id}", name="fn_dashboard_supprimer", requirements={"id": "\d+"})
     * @param int $id
     * @param Request $request
     */
    public function supprimerAction(User $user, Request $request, UserService $userService){

        $resultat = $userService->remove($user);

        if($resultat){
            $this->setMessageFlashBag("success", 'L\'utilisateur ainsi que l\'ensemble des ses observation ont été supprimés. Un mail vient d\'être envoyé pour le prévenir.', $request);

            $mail = $this->getMailer();
            $mail->delUser($user);
        }

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_index") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * Factorisation des action de validation et de refus
     */
    protected function validateOrRefuseNat($id, $action, $request){
        if($id > 0){
            // on va chercher en base le user
            $userManager = $this->getDoctrine()->getManager();
            $userRepository = $userManager->getRepository('AppBundle:User');

            $user = $userRepository->findOneNatBy($id,false);

            // si il n'existe pas on crée un message d'erreur
            if($user === null){
                $this->setMessageNatValidation("warning", $action,$request);
            } else {

                $mail = $this->getMailer();

                if($action === "refus"){
                    // suppression du fichier carte
                    $fichier = $this->getParameter("carte_pro_dir") . $user->getCarte();
                    if(file_exists($fichier)){
                        unlink($fichier);
                    }
                    $user->setCarte(null);
                    $userManager->persist($user);
                    $userManager->flush();

                    $mail->insRefuseNat($user);

                } else {

                    $user->setRoles(array('ROLE_NATURALISTE'));
                    $userManager->persist($user);
                    $userManager->flush();


                    $mail->insValidNat($user);

                }

                $this->setMessageNatValidation("success",$action,$request);

            }
        } else {
            // message d'erreur
            $this->setMessageNatValidation("error",$action,$request);
        }
    }

    /**
     * Factorisation des messages à  enregistrer en session
     * lors de la validation et le refus d'un naturaliste
     */
    protected function setMessageNatValidation($level, $action,Request $request){

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
     * @return FnatMailer
     */
    protected function getMailer()
    {
        $mailer = $this->container->get('mailer');
        $twig = $this->container->get('twig');
        $mail = new FnatMailer($mailer, $twig);
        return $mail;
    }

    public function setMessageFlashBag($class, $message, Request $request){
        $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-'.$class);
        $request->getSession()->getFlashBag()->add('notice', $message);
    }
}



