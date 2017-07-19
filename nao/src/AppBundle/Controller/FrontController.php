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
             return $this->render('Front/contact.html.twig', array(
                 'form' => $form->createView(),
             ));
         }
        
        return $this->render('Front/contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}