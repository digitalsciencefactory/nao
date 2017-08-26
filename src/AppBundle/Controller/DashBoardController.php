<?php
namespace AppBundle\Controller;
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
     * Liste les naturaliste par page
     */
    public function naturalistesAction($page = 1){

        $userManager = $this->getDoctrine()->getManager();
        $userRepository = $userManager->getRepository('AppBundle:User');

        // on compte le nombre de naturaliste
        $nombre =  $userRepository->howManyNat();

        // on compte la pagination nécessaire
        $nombrePageMax = ($nombre === "0") ? 1 : (int) ceil($nombre / 10.0);

        if($page > $nombrePageMax){
            $page = $nombrePageMax;
        }

        // on récupère le bon nombre de naturaliste
        $calcul = (10 * ($page - 1));
        $naturalistes = $userRepository->getNatByOffset(10,$calcul);


        return $this->render('dashboard/naturalistes.html.twig',
            array(
                'total' => $nombre,
                'page' => $page,
                'pages' => $nombrePageMax,
                'users' => $naturalistes,
            ));
    }
    /**
     * @Route("/dashboard/naturalistes-a-valider", name="fn_dashboard_natavalid")
     * Liste les naturalistes à  valider et permet de les valider ou refuser
     */
    public function natEnAttenteAction(){
        $users = $this->getNatEnAttente();
        return $this->render('dashboard/naturalistes_en_attente.html.twig',
            array(
                'users' => $users,
            ));
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

        $redirect = ($request->server->get('HTTP_REFERER') === null) ? $this->generateUrl("fn_dashboard_index") : $request->server->get('HTTP_REFERER');

        return $this->redirect($redirect);
    }

    /**
     * Factorisation des action de validation et de refus du statut de naturaliste
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
    protected function getNatEnAttente()
    {
// récupération des naturalistes en attente de validation
        $manager = $this
            ->getDoctrine()
            ->getManager();
        $userRepository = $manager->getRepository('AppBundle:User');
        $users = $userRepository->getNaturalistesEnAttente();
        return $users;
    }

}



