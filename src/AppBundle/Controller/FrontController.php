<?php

namespace AppBundle\Controller;

use AppBundle\Contact\ContactMailer;
use AppBundle\Form\ContactType;
use AppBundle\Form\LoginType;
use AppBundle\Contact\Contact;
use AppBundle\Entity\User;
use AppBundle\Form\NatSignType;
use AppBundle\Form\ObsSignType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/contact", name="fn_front_contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact;

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mailer = $this->container->get('mailer');

            $contactMail = new ContactMailer($mailer);
            $contactMail->sendFeedBack($contact);
            $contactMail->sendNotification($contact);

            $contact = new Contact;
            $form = $this->createForm(ContactType::class, $contact);
            $request->getSession()->getFlashBag()->add('notice', 'Formulaire envoyé avec succès.');

            return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
        }

        return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Route("/inscription", name="fn_front_inscription")
     */
    public function inscriptionAction (){
        return $this->render('Front/inscription.html.twig');
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
            // on complète l'entité
            $user->setStatut('STATUT_INACTIF');
            $user->setRoles(('ROLE_OBSERVATEUR'));
            $user->setDcree(new \DateTime());

            // hash du mot de passe
            $user->getMdp($encoder->encodePassword($user, $user->getPlainPassword()));

            // création du token de vérifiction d'inscription
            $length = 65;
            $user->setToken(bin2hex(random_bytes($length)));


            // TODO essayer d'insérer en base

            // TODO envoyer un mail de confirmation d'inscription
        }

        return $this->render('Front/inscription-observateur.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/inscription-naturaliste", name="fn_front_inscription_nat")
     */
    public function inscriptionNatAction (Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(NatSignType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // on complète l'entité
            $user->setStatut('STATUT_INACTIF');
            $user->setRoles(('ROLE_OBSERVATEUR'));
            $user->setDcree(new \DateTime());

            // hash du mot de passe
            $user->getMdp($encoder->encodePassword($user, $user->getPlainPassword()));

            // création du token de vérifiction d'inscription
            $length = 65;
            $user->setToken(bin2hex(random_bytes($length)));


            // TODO essayer d'insérer en base

            // TODO envoyer un mail de confirmation d'inscription
        }

        return $this->render('Front/inscription-naturaliste.html.twig', array(
            'form' => $form->createView(),
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

    /**
     * @Route("/kit-observation", name="fn_front_kit")
     */
    public function kitObservationAction (Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(ObsSignType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // on complète l'entité
            $user->setStatut('STATUT_INACTIF');
            $user->setRoles(('ROLE_OBSERVATEUR'));
            $user->setDcree(new \DateTime());

            // hash du mot de passe
            $user->getMdp($encoder->encodePassword($user, $user->getPlainPassword()));

            // création du token de vérifiction d'inscription
            $length = 65;
            $user->setToken(bin2hex(random_bytes($length)));


            // TODO essayer d'insérer en base

            // TODO envoyer un mail de confirmation d'inscription
        }

        return $this->render('Front/kit_observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/qui-sommes-nous", name="fn_front_about")
     */
    public function aboutAction ()
    {
        return $this->render('Front/qui-sommes-nous.html.twig');
    }

}