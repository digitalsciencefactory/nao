<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use AppBundle\Object\Contact;
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
        $form = $this->createForm(AdvertType::class, $contact);
        
         if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
             // gestion de l'envoi par mail
             // TODO
         }
        
        return $this->render('AppBundle:Front:contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}