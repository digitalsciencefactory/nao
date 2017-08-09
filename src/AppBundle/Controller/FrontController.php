<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
<<<<<<< HEAD

    /**
     * @Route("/contact", name="fn_front_contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mailer = $this->container->get('mailer');
            $twig = $this->container->get('twig');
            $contactMail = new FnatMailer($mailer,$twig);
            $contactMail->ctcFeedBack($contact);
            $contactMail->ctcSendToAdmin($contact);

            $contact = new Contact;
            $form = $this->createForm(ContactType::class, $contact);
            $request->getSession()->getFlashBag()->add('notice', 'Formulaire envoyé avec succès.');

            return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
        }

        return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Route("/inscription-observateur", name="fn_front_inscription_obs")
     */
    public function inscriptionObsAction (Request $request,UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(ObsSignType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->userAction($user, $encoder);
            $this->mailerAction($user);

            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');
            $user = new User();
            $form = $this->createForm(ObsSignType::class, $user);
            return $this->render('Front/inscription-observateur.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('Front/inscription-observateur.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/inscription-naturaliste", name="fn_front_inscription_nat")
=======

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
>>>>>>> Sylvain
     */
    public function aboutAction ()
    {
<<<<<<< HEAD
        $user = new User();
        $form = $this->createForm(NatSignType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->userAction($user, $encoder);
            $this->mailerAction($user);

            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');
            $user = new User();
            $form = $this->createForm(NatSignType::class, $user);
            return $this->render('Front/inscription-naturaliste.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('Front/inscription-naturaliste.html.twig', array(
            'form' => $form->createView(),
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
=======
        return $this->render('Front/qui-sommes-nous.html.twig');
    }

    /**
>>>>>>> Sylvain
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

<<<<<<< HEAD
    /**
     * @Route("/kit-observation", name="fn_front_kit")
     */
    public function kitObservationAction (Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(ObsSignType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->userAction($user, $encoder);
            $this->mailerAction($user);

            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');
            $user = new User();
            $form = $this->createForm(NatSignType::class, $user);
            return $this->render('Front/inscription-naturaliste.html.twig', array(
                'form' => $form->createView(),
            ));
        }


        return $this->render('Front/kit_observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function userAction(User $user, UserPasswordEncoderInterface $encoder)
    {
        // on complète l'entité
        $user->setRoles(array('ROLE_OBSERVATEUR'));
        $user->setDcree(new \DateTime('NOW'));

        // hash du mot de passe
        $user->setMdp($encoder->encodePassword($user, $user->getPlainPassword()));

        // création du token de vérifiction d'inscription
        $length = 65;
        $user->setToken(substr(bin2hex(random_bytes($length)),0,65));

        // essayer d'insérer en base
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
    }

    public function mailerAction(User $user)
    {
        // mail de confirmation d'inscription
        $mailer = $this->container->get('mailer');
        $twig = $this->container->get('twig');
        $mail = new FnatMailer($mailer,$twig);
        $mail->insVerifObs($user);
    }
=======
>>>>>>> Sylvain
}