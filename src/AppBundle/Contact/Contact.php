<?php

namespace AppBundle\Contact;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classe représentant le formulaire de contact
 */
class Contact {
    
    /* ATTRIBUTS */
    
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=3,minMessage="Le nom doit faire au moins {{ limit }} caractères.",max=255)
     */
    protected $nom;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=3,minMessage="Le prénom doit faire au moins {{ limit }} caractères.",max=255)
     */
    protected $prenom;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Email(checkMX=true)
     */
    protected $mail;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=3,minMessage="Le titre doit faire au moins {{ limit }} caractères.",max=255)
     */
    protected $titre;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=250,minMessage="Le message doit faire au moins {{ limit }} caractères.",max=2500, maxMessage="Le message ne peut excéder {{ limit }} caractères.")
     */
    protected $message;
    
    /**
     * @Assert\DateTime()
     */
    protected $date;

    /* CONSTRUCTEUR */
    
    public function __construct() {
        $this->_date = new \Datetime();
    }
    
    /* GETTER SETTER */
    
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getDate() {
        return $this->date;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    /* METHODES */
}

