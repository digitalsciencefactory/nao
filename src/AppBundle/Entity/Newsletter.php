<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Newsletter
 *
 * @ORM\Table(name="fnat_newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsletterRepository")
 * @UniqueEntity(fields={"mail"}, message="Vous êtes déjà inscrit à la newsletter.")
 * @ORM\HasLifecycleCallbacks
 */
class Newsletter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     * @Assert\Email
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=65, nullable=true)
     */
    private $token;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /**
     * Newsletter constructor.
     */
    public function __construct()
    {
        $this->dcree = new \DateTime();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Newsletter
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Newsletter
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set dcree
     *
     * @param \DateTime $dcree
     *
     * @return Newsletter
     */
    public function setDcree($dcree)
    {
        $this->dcree = $dcree;

        return $this;
    }

    /**
     * Get dcree
     *
     * @return \DateTime
     */
    public function getDcree()
    {
        return $this->dcree;
    }

    /**
    * @ORM\PostPersist()
    * @ORM\PostUpdate()
    */
    private function sendToNewsList(){
        if($this->token === null){

            // TODO faire l'envoie vers mailchimp api
        }
    }

    /**
     * @ORM\PostRemove()
     */
    private function eraseFromNewsList(){
        // TODO utiliser l'api de mailchimp pour supprimer l'adresse de la liste
    }
}
