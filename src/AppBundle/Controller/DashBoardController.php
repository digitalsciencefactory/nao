<?php
namespace AppBundle\Controller;
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
class DashBoardController extends Controller
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
     * @Route("dashboard/naturalistes/{page}", name="fn_dashboard_naturalistes", requirements={"page": "\d+"})
     * Liste les naturalistes par page
     */
    public function naturalistesAction($page = 1, DashboardService $dashboardService){

        return $this->listerUser($page, $dashboardService, true);
    }

    /**
     * @Route("dashboard/observateurs/{page}", name="fn_dashboard_observateurs", requirements={"page": "\d+"})
     * Liste les naturalistes par page
     */
    public function observateursAction($page = 1, DashboardService $dashboardService){

        return $this->listerUser($page, $dashboardService, false);
    }

    /**
     * @Route("/dashboard/naturalistes-a-valider", name="fn_dashboard_natavalid")
     * Liste les naturalistes à  valider et permet de les valider ou refuser
     */
    public function natEnAttenteAction(){
        $users = $this->getUserEnAttente(true);
        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
    }

    /**
     * @Route("/dashboard/observateurs-a-valider", name="fn_dashboard_nobsavalid")
     * Liste les naturalistes à  valider et permet de les valider ou refuser
     */
    public function obsEnAttenteAction(){
        $users = $this->getUserEnAttente(false);
        return $this->render('dashboard/observateurs_en_attente.html.twig',
            array(
                'users' => $users,
            ));
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
     * @Route("dashboard/bannis", name="bannis")
     */
    public function listerBannisAction(){
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
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-warning');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur est déjà bloqué, inactif ou inconnu');

            } else {
                $user->setStatut("STATUT_BANNI");

                $userManager->persist($user);
                $userManager->flush();

                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur a été bloqué. Un mail vient d\'être envoyé pour le prévenir');

                $mail = $this->getMailer();
                //$mail->banUser($user);
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
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-warning');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur est déjà débloqué, actif  ou inconnu');

            } else {
                $user->setStatut("STATUT_ACTIF");

                $userManager->persist($user);
                $userManager->flush();

                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
                $request->getSession()->getFlashBag()->add('message', 'L\'utilisateur a été débloqué. Un mail vient d\'être envoyé pour le prévenir');

                $mail = $this->getMailer();
                //$mail->debanUser($user);
            }
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
                $this->getMessageNatValidation("warning", $action,$request);
            } else {

                if($action === "refus"){
                    // suppression du fichier carte
                    $fichier = $this->get('kernel')->getRootDir() . '/../web/assets/fnat/naturalistes/' . $user->getCarte();
                    if(file_exists($fichier)){
                        unlink($fichier);
                    }
                    $user->setCarte(null);
                    $userManager->persist($user);
                    $userManager->flush();

                } else {

                    $user->setRoles(array('ROLE_NATURALISTE'));
                    $userManager->persist($user);
                    $userManager->flush();
                }

                $this->getMessageNatValidation("success",$action,$request);

            }
        } else {
            // message d'erreur
            $this->getMessageNatValidation("error",$action,$request);
        }
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
    protected function getUserEnAttente($naturaliste)
    {
        $manager = $this
            ->getDoctrine()
            ->getManager();
        $userRepository = $manager->getRepository('AppBundle:User');
        $users = $userRepository->getUserEnAttente($naturaliste);
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
        $naturalistes = $userRepository->getUserByOffset(10, $calcul, $naturaliste);

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

}



