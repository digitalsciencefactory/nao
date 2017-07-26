<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace AppBundle\Contact;

use AppBundle\Contact\Contact;
use Twig\Environment;

class ContactMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

    /**
     * @var Environment
     */
  private $twig;

  public function __construct(\Swift_Mailer $mailer, Environment $twig)
  {
      $this->twig = $twig;

    $this->mailer = $mailer;
  }

  /**
  * envoie d'un mail à l'utilisateur 
  * pour confirmer sa demande de contact
  * 
  * @param Contact $contact
  */
  public function sendFeedBack(Contact $contact)
  {
      $body = $this->twig->render('::message.html.twig', array('contact' => $contact));

    $message = new \Swift_Message(
        "[FlashNature - Contact] Confirmation de prise de contact : " .$contact->getTitre(),
        "Bonjour " .$contact->getPrenom() . " " . $contact->getNom().",\n\nNous avons bien reçu votre demande, et nous vous contacterons dans les plus brefs délais.\n\nVoici un récapitulatif de votre demande :\n\ntitre : " .$contact->getTitre(). "\nMessage: \n\n" .$contact->getMessage(). "\n\n-----\nCordialement,\nFlash Nature\nhttps://flashnature.digitalsciencefactory.com"
    );
    $message->addTo($contact->getMail());
    $message->addFrom("contact-fnat@digitalsciencefactory.com");

    $this->mailer->send($message);
  }
  
  /**
   * Envoie d'un mail à l'dministrateur 
   * pour le prévenir d'une demande de contact
   * 
   * @param Contact $contact
   */
  public function sendNotification(Contact $contact){
      $message = new \Swift_Message(
          '[Flash Nature - Contact] ' . $contact->getTitre(),
          "Bonjour, \n" . $contact->getPrenom() . " "  . $contact->getNom() . "(". $contact->getMail(). ") vient d'envoyer cette demande de contact: \n\nTitre: " .$contact->getTitre(). "\nMessage: \n" .$contact->getMessage()
      );

      $message->addTo('contact-fnat@digitalsciencefactory.com');
      $message->addFrom('contact-fnat@digitalsciencefactory.com');
      $message->addReplyTo($contact->getMail());

      $this->mailer->send($message);
  }
  
  
}

