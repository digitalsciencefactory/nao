<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Newsletter;
use AppBundle\Form\NewsletterType;
use AppBundle\Entity\User;
use AppBundle\Form\NatSignType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class FrontController extends Controller
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
    public function aboutAction (Request $request)
    {
        $newsletter = new Newsletter();
        $formn = $this->createForm(NewsletterType::class, $newsletter);

        $formn->handleRequest($request);
        if ($formn->isSubmitted() && $formn->isValid()) {
            // création du token de vérifiction d'inscription
            $length = 65;
            $newsletter->setToken(substr(bin2hex(random_bytes($length)),0,65));
            // essayer d'insérer en base
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();
            // mail de confirmation d'inscription
            $mailer = $this->container->get('mailer');
            $twig = $this->container->get('twig');
            $mail = new FnatMailer($mailer,$twig);
            $mail->insVerifNews($newsletter);
            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('noticenews', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');
            $newsletter = new Newsletter();
            $formn = $this->createForm(NewsletterType::class, $newsletter);
            return $this->render('Front/qui-sommes-nous.html.twig#news', array(
                'formn' => $formn->createView(),
            ));
        }
        return $this->render('Front/qui-sommes-nous.html.twig', array(
            'formn' => $formn->createView(),
        ));
    }

    /**
     * @param Request $request
     * @Route("/activate")
     */
    public function validerInscriptionAction(Request $request){
        // récupérer les valeurs de l'url
        $mail = $request->query->get('mail');
        $token = $request->query->get('token');
        $length = strlen($token);

        $messageBag = "";
        $classMessage = "";

        // vérifier qu'elles ne sont pas vides et que le token = 65 caractères
        if($mail != null && $length == 65){
            // tenter de select le user
            $manager = $this->getDoctrine()->getManager();
            $repository = $manager->getRepository('AppBundle:User');
            $user = $repository->findOneBy(array(
               'mail' => $mail,
               'token' => $token,
            ));

            if($user != null){
               // update du user en supprimant le token et en le passant en actif
                $user->setToken(null);
                $user->setStatut("STATUT_ACTIF");
                $manager->persist($user);
                $manager->flush();

                $this->mailerAction($user);

                // on crée le message à afficher
                $messageBag = "Votre compte est validé. Vous pouvez vous identifier sur le site.";
                $classMessage = "alert alert-success";

            } else {
                $messageBag = "L'adresse email est inconnue ou votre compte est déjà validé.";
                $classMessage = "alert alert-danger";
            }
        } else {
            $messageBag = "Le lien de vérification est érroné.";
            $classMessage = "alert alert-danger";

        }

        return $this->render('Front/validation.html.twig', array(
            'message' => $messageBag,
            'classMessage' => $classMessage,
        ));


    }
    /**
     * @Route("/login", name="fn_front_connexion")
     *
     * Affiche la page de connexion
     */
    public function loginAction ()
    {

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('fn_front_index');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('Front/connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));

    }

    /**
    * @Route("/login_check", name="login_check")
    */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
        throw new \Exception('Symfony devrait intercepter cette route login_check !');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
        throw new \Exception('Symfony devrait intercepter cette route logout !');
    }

}