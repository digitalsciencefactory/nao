<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace AppBundle\Mailer;

use AppBundle\Entity\Newsletter;
use AppBundle\Entity\User;
use Twig\Environment;
use AppBundle\Contact\Contact;

class FnatMailer
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
  public function ctcFeedBack(Contact $contact)
  {
      $body = $this->twig->render('mail\ctc.feedback.html.twig', array('contact' => $contact));

    $message = new \Swift_Message(" Votre message à Flash Nature par NAO");
      $message->setBody($body,'text/html');

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
  public function ctcSendToAdmin(Contact $contact){
      $body = $this->twig->render('mail\ctc.toAdmin.html.twig', array('contact' => $contact));
      $message = new \Swift_Message('[Flash Nature - Contact] ' . $contact->getPrenom() . ' ' . $contact->getNom() .'vous a envoyé un message depuis Flash Nature.');
    $message->setBody($body,'text/html');
      $message->addTo('contact-fnat@digitalsciencefactory.com');
      $message->addFrom('contact-fnat@digitalsciencefactory.com');
      $message->addReplyTo($contact->getMail());

      $this->mailer->send($message);
  }

    /**
     * Envoie un mail au nouvel utilisateur pour vérifier son mail
     *
     * @param User $user
     */
  public function insVerifObs(User $user){
      $body = $this->twig->render('mail\ins.confirmObs.html.twig', array('user' => $user));

      $message = new \Swift_Message("Bienvenue sur Flash Nature, finalisez votre inscription.");
      $message->setBody($body,'text/html');

      $message->addTo($user->getMail());
      $message->addFrom("contact-fnat@digitalsciencefactory.com");

      $this->mailer->send($message);
  }

    /**
     * @param User $user
     */
  public function insValidObs(User $user){
      $body = $this->twig->render('mail\ins.validObs.html.twig', array('user' => $user));

      $message = new \Swift_Message("Votre inscription sur Flash Nature est finalisée.");
      $message->setBody($body,'text/html');

      $message->addTo($user->getMail());
      $message->addFrom("contact-fnat@digitalsciencefactory.com");

      $this->mailer->send($message);
  }

    /**
     * @param User $user
     */
    public function insValidNat(User $user){
        $body = $this->twig->render('mail\ins.validNat.html.twig', array('user' => $user));

        $message = new \Swift_Message("Votre statut Naturaliste sur Flash Nature.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }

    /**
     * @param User $user
     */
    public function insRefuseNat(User $user){
        $body = $this->twig->render('mail\ins.refuseNat.html.twig', array('user' => $user));

        $message = new \Swift_Message("Votre statut Naturaliste sur Flash Nature.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }


    /**
     * Envoie un mail au nouveau naturaliste pour vérifier son mail
     *
     * @param User $user
     */
    public function insVerifNat(User $user){
        $body = $this->twig->render('mail\ins.confirmNat.html.twig', array('user' => $user));

        $message = new \Swift_Message("Bienvenue sur Flash Nature, finalisez votre inscription.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }

<<<<<<< HEAD
=======
    /**
     * Mail pour prévenir un utilisateur qu'il est bannis.
     * @param User $user
     */
    public function banUser(User $user){
        $body = $this->twig->render('mail\ban.html.twig', array('user' => $user));

        $message = new \Swift_Message("Votre compte sur Flash Nature a été suspendu.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }

    /**
     * Mail pour prévenir un utilisateur que son compte est supprimé
     * @param User $user
     */
    public function delUser(User $user){
        $body = $this->twig->render('mail\del.html.twig', array('user' => $user));

        $message = new \Swift_Message("Votre compte sur Flash Nature a été supprimé.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }

    /**
     * Mail pour prévenir un utilisateur qu'il est bannis.
     * @param User $user
     */
    public function debanUser(User $user){
        $body = $this->twig->render('mail\deban.html.twig', array('user' => $user));

        $message = new \Swift_Message("Votre compte sur Flash Nature a été rétabli.");
        $message->setBody($body,'text/html');

        $message->addTo($user->getMail());
        $message->addFrom("contact-fnat@digitalsciencefactory.com");

        $this->mailer->send($message);
    }

>>>>>>> silh
}

