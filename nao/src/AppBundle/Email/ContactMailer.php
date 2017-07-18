<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace AppBundle\Email;

use AppBundle\Object\Contact;

class ContactMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
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
    $message = new \Swift_Message(
      'Nouvelle candidature',
      'Vous avez reçu une nouvelle candidature.'
    );

    $message
      ->addTo($application->getAdvert()->getAuthor()) // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place
      ->addFrom('admin@votresite.com')
    ;

    $this->mailer->send($message);
  }
  
  /**
   * Envoie d'un mail à l'dministrateur 
   * pour le prévenir d'une demande de contact
   * 
   * @param Contact $contact
   */
  public function sendNotification(Contact $contact){
      
  }
  
  
}

