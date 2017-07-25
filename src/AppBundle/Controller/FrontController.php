<?php

namespace AppBundle\Controller;

use AppBundle\Contact\ContactMailer;
use AppBundle\Form\ContactType;
use AppBundle\Contact\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/", name="fn_front_home")
     * @Route("/accueil")
     */
    public function indexAction(Request $request){
        return $this->render('Front/accueil.html.twig');
    }

    /**
     * @Route("/contact", name="fn_front_contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact;

        $form = $this->createForm(ContactType::class, $contact, array());

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
    public function inscriptionAction (Request $request){
        return $this->render('Front/inscription.html.twig');
    }


    /**
     * @Route("/inscription/particulier", name="fn_front_inscription_par")
     */
    public function inscriptionParAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/inscriptionPar.html.twig');
    }

    /**
     * @Route("/inscription/naturaliste", name="fn_front_inscription_obs")
     */
    public function inscriptionNatAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/inscriptionNat.html.twig');
    }

}