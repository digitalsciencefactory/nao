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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Taxref")
     * @ORM\JoinColumn(nullable=false)
     */
    private $espece;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $observateur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $naturaliste;

    /**
     * @var decimal
     *
     * @ORM\Column(name="latitude", type="decimal", precision=16, scale=6)
     */
    private $latitude;

    /**
     * @var decimal
     *
     * @ORM\Column(name="longitude",type="decimal", precision=16, scale=6)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_obs", type="text", nullable=true)
     */
    private $commObs;

    /**
     * @var string
     *
     * @ORM\Column(name="comm_nat", type="text", nullable=true)
     */
    private $commNat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dobs", type="datetime")
     */
    private $dobs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dvalid", type="datetime", nullable=true)
     */
    private $dvalid;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=17)
     */
    private $statut;


    /**
     * Observation constructor.
     */
    public function __construct()
    {
        $this->dcree = new \DateTime();
        $this->statut = "STATUT_EN_ATTENTE";
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
     * Set espece
     *
     * @param \stdClass $espece
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
     * @return \stdClass
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set observateur
     *
     * @param \stdClass $observateur
     *
     * @return Observation
     */
    public function setObservateur($observateur)
    {
        $this->observateur = $observateur;

        return $this;
    }

    /**
     * Get observateur
     *
     * @return \stdClass
     */
    public function getObservateur()
    {
        return $this->observateur;
    }

    /**
     * Set naturaliste
     *
     * @param \stdClass $naturaliste
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
     * @return \stdClass
     */
    public function getNaturaliste()
    {
        return $this->naturaliste;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Observation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Observation
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set commObs
     *
     * @param string $commObs
     *
     * @return Observation
     */
    public function setCommObs($commObs)
    {
        $this->commObs = $commObs;

        return $this;
    }

    /**
     * Get commObs
     *
     * @return string
     */
    public function getCommObs()
    {
        return $this->commObs;
    }

    /**
     * Set commNat
     *
     * @param string $commNat
     *
     * @return Observation
     */
    public function setCommNat($commNat)
    {
        $this->commNat = $commNat;

        return $this;
    }

    /**
     * Get commNat
     *
     * @return string
     */
    public function getCommNat()
    {
        return $this->commNat;
    }

    /**
     * Set dobs
     *
     * @param \DateTime $dobs
     *
     * @return Observation
     */
    public function setDobs($dobs)
    {
        $this->dobs = $dobs;

        return $this;
    }

    /**
     * Get dobs
     *
     * @return \DateTime
     */
    public function getDobs()
    {
        return $this->dobs;
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
     * Set dvalid
     *
     * @param \DateTime $dvalid
     *
     * @return Observation
     */
    public function setDvalid($dvalid)
    {
        $this->dvalid = $dvalid;

        return $this;
    }

    /**
     * Get dvalid
     *
     * @return \DateTime
     */
    public function getDvalid()
    {
        return $this->dvalid;
    }

    /**
     * Set statut
     *
     * @param string $statut
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
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
