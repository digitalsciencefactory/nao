<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observation
 *
 * @ORM\Table(name="fnat_observation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObservationRepository")
 */
class Observation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Taxref")
     * @ORM\JoinColumn(nullable=false)
     */
    private $espece;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Naturaliste")
     * @ORM\JoinColumn(nullable=true)
     */
    private $naturaliste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Photo", cascade={"persist"})
     */
    private $image;
    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="commobservateur", type="text", nullable=true)
     */
    private $commobservateur;

    /**
     * @var string
     *
     * @ORM\Column(name="commnaturaliste", type="text", nullable=true)
     */
    private $commnaturaliste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dmod", type="datetime", nullable=true)
     */
    private $dmod;


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
     * Set user
     *
     * @param integer $user
     *
     * @return Observation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set espece
     *
     * @param integer $espece
     *
     * @return Observation
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return int
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set naturaliste
     *
     * @param integer $naturaliste
     *
     * @return Observation
     */
    public function setNaturaliste($naturaliste)
    {
        $this->naturaliste = $naturaliste;

        return $this;
    }

    /**
     * Get naturaliste
     *
     * @return int
     */
    public function getNaturaliste()
    {
        return $this->naturaliste;
    }

    /**
     * Set dcree
     *
     * @param \DateTime $dcree
     *
     * @return Observation
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
     * Set laltitude
     *
     * @param float $laltitude
     *
     * @return Observation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get laltitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Observation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return Observation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set commobservateur
     *
     * @param string $commobservateur
     *
     * @return Observation
     */
    public function setCommobservateur($commobservateur)
    {
        $this->commobservateur = $commobservateur;

        return $this;
    }

    /**
     * Get commobservateur
     *
     * @return string
     */
    public function getCommobservateur()
    {
        return $this->commobservateur;
    }

    /**
     * Set commnaturaliste
     *
     * @param string $commnaturaliste
     *
     * @return Observation
     */
    public function setCommnaturaliste($commnaturaliste)
    {
        $this->commnaturaliste = $commnaturaliste;

        return $this;
    }

    /**
     * Get commnaturaliste
     *
     * @return string
     */
    public function getCommnaturaliste()
    {
        return $this->commnaturaliste;
    }

    /**
     * Set dmod
     *
     * @param \DateTime $dmod
     *
     * @return Observation
     */
    public function setDmod($dmod)
    {
        $this->dmod = $dmod;

        return $this;
    }

    /**
     * Get dmod
     *
     * @return \DateTime
     */
    public function getDmod()
    {
        return $this->dmod;
    }
}

