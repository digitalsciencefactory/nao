<?php

namespace AppBundle\Controller;

use AppBundle\Mailer\FnatMailer;
use AppBundle\Entity\User;
use AppBundle\Form\Type\NatSignType;
use AppBundle\Form\Type\ObsSignType;
use AppBundle\Form\Type\ContactType;
use AppBundle\Contact\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Newsletter;
use AppBundle\Form\Type\NewsletterType;

class InscriptionController extends Controller
{
    /**
     * @Route("/qui-sommes-nous", name="fn_front_about")
     */
    public function aboutAction (Request $request)
    {
        return $this->render('front/qui-sommes-nous.html.twig');
    }

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

            $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
            $request->getSession()->getFlashBag()->add('notice', 'Formulaire envoyé avec succès.');

            return $this->render('front/contact.html.twig', array('form' => $form->createView(),));
        }

        return $this->render('front/contact.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Route("/inscription-observateur", name="fn_front_inscription_obs")
     */
    public function inscriptionObsAction (Request $request,UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(ObsSignType::class, $user);
        $form->handleRequest($request);

        // on gère le cas du formulaire d'inscription
        if ($form->isSubmitted() && $form->isValid()) {

            // on gère l'inscription de l'observateur
            $this->saveSignUpObs($encoder, $user);

            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');

            $user = new User();
            $form = $this->createForm(ObsSignType::class, $user);
            return $this->render('front/inscription-observateur.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('front/inscription-observateur.html.twig', array(
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

        // on gère le cas du formulaire d'inscription
        if ($form->isSubmitted() && $form->isValid()) {

            // on gère l'inscription de l'observateur
            $this->saveSignUpNat($encoder, $user);

            // on affiche la page de inscription avec le flash bag
            $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');

            $user = new User();
            $form = $this->createForm(NatSignType::class, $user);
            return $this->render('front/inscription-naturaliste.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('front/inscription-naturaliste.html.twig', array(
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

        // vérifier qu'elles ne sont pas vides et que le token = 65 caractères
        if($mail !== null && strlen($token) == 65){
            // tenter de select le user
            $manager = $this->getDoctrine()->getManager();
            $repository = $manager->getRepository('AppBundle:User');
            $user = $repository->findOneBy(array(
               'mail' => $mail,
               'token' => $token,
            ));

            if($user !== null){
               // update du user en supprimant le token et en le passant en actif
                $user->setToken(null)
                    ->setStatut("STATUT_ACTIF");
                $manager->persist($user);
                $manager->flush();

                // on crée le message à afficher
                $this->addMessageBag($request,"success","inscription");

            } else {
                $this->addMessageBag($request,"warning","inscription");
            }
        } else {
            $this->addMessageBag($request,"error","inscription");

        }

        return $this->render('validation.html.twig');
    }


    /**
     * @Route("/kit-observation", name="fn_front_kit")
     */
    public function kitObservationAction (Request $request,UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(ObsSignType::class, $user);
        $form->handleRequest($request);

        // on gère le cas du formulaire d'inscription
        if ($form->isSubmitted() && $form->isValid()) {

            // on gère l'inscription de l'observateur
            $this->saveSignUpObs($encoder, $user);

            // on affiche la page de connexion avec le flash bag
            $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');
            $request->getSession()->getFlashBag()->add('notice', 'Votre inscription a été prise en compte. Vous aller recevoir un mail contenant un lien d\'activation.');
            $user = new User();
            $form = $this->createForm(ObsSignType::class, $user);
            return $this->render('front/kit_observation.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('front/kit_observation.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param UserPasswordEncoderInterface $encoder
     * @param $user
     */
    protected function saveSignUpobs(UserPasswordEncoderInterface $encoder, $user)
    {

        $user->setRoles(array('ROLE_OBSERVATEUR'));
        $user->setDcree(new \DateTime());
        $user->setStatut('STATUT_INACTIF');
        // hash du mot de passe
        $user->setMdp($encoder->encodePassword($user, $user->getPlainPassword()));
        // création du token de vérifiction d'inscription
        $length = 65;
        $user->setToken(substr(bin2hex(random_bytes($length)), 0, 65));
        // essayer d'insérer en base
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        // mail de confirmation d'inscription
        $mailer = $this->container->get('mailer');
        $twig = $this->container->get('twig');
        $mail = new FnatMailer($mailer, $twig);
        $mail->insVerifObs($user);
    }

    /**
     * @param UserPasswordEncoderInterface $encoder
     * @param $user
     */
    protected function saveSignUpNat(UserPasswordEncoderInterface $encoder, $user)
    {

        $user->setRoles(array('ROLE_OBSERVATEUR'));
        $user->setDcree(new \DateTime());
        $user->setStatut('STATUT_INACTIF');

        // hash du mot de passe
        $user->setMdp($encoder->encodePassword($user, $user->getPlainPassword()));

        // création du token de vérifiction d'inscription
        $length = 65;
        $user->setToken(substr(bin2hex(random_bytes($length)), 0, 65));

        // sauvegarde de la carte pro
        $name = substr(bin2hex(random_bytes(30)),0,25) . "." . $user->getFile()->getClientOriginalExtension();

        $user->getFile()->move($this->getParameter("carte_pro_dir"), $name);
        $user->setCarte($name);

        // essayer d'insérer en base
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        // mail de confirmation d'inscription
        $mailer = $this->container->get('mailer');
        $twig = $this->container->get('twig');
        $mail = new FnatMailer($mailer, $twig);
        $mail->insVerifObs($user);
    }

    protected function addMessageBag($request, $etat, $sujet){
        switch($etat){
            case "success":
                // tous les messages de réussites
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-success');

                switch($sujet){
                    case "inscription":
                        $request->getSession()->getFlashBag()->add('notice', 'Votre compte est validé. Vous pouvez vous identifier sur le site.');
                        break;

                    case "newsletter":
                        $request->getSession()->getFlashBag()->add('notice', 'Votre abonnement à notre newsletter est validé. Vous pouvez continuer sur le site.');
                        break;
                }

                break;
            case "warning":
                // tous les messages de warning
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-warning');

                switch($sujet){
                    case "inscription":
                    case "newsletter":
                        $request->getSession()->getFlashBag()->add('notice', 'L\'adresse email est inconnue ou votre compte est déjà validé.');
                        break;
                }
                break;

            case "error":
                // tous les messages d'erreur
                $request->getSession()->getFlashBag()->add('noticeClass', 'alert alert-danger');

                switch($sujet){
                    case "inscription":
                    case "newsletter":
                        $request->getSession()->getFlashBag()->add('notice', 'Le lien de vérification est érroné.');
                        break;
                }
                break;
        }
    }
}
