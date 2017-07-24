<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Naturaliste
 *
 * @ORM\Table(name="fnat_naturaliste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NaturalisteRepository")
 */
class Naturaliste
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
     * @@ORM\OneToOne(targetEntity="AppBundle\Entity\User", mappedBt="naturaliste")
     */
    private $user;
    /**
     * @var string
     *
     * @ORM\Column(name="carte", type="string", length=255, nullable=true)
     */
    private $carte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /**
     *  @var \DateTime
     *
     * @ORM\Column(name="dmod", type="datetime")
     *
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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Set carte
     *
     * @param string $carte
     *
     * @return Naturaliste
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return string
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * Set dcree
     *
     * @param \DateTime $dcree
     *
     * @return Naturaliste
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
     * @return \DateTime
     */
    public function getDmod()
    {
        return $this->dmod;
    }

    /**
     * @param \DateTime $dmod
     */
    public function setDmod($dmod)
    {
        $this->dmod = $dmod;
    }


}

