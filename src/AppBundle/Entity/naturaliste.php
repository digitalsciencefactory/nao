<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * naturaliste
 *
 * @ORM\Table(name="naturaliste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\naturalisteRepository")
 */
class naturaliste
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
     * @var int
     *
     * @ORM\Column(name="user", type="bigint", unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="carte", type="text", unique=true)
     */
    private $carte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dmod", type="datetime")
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
     * @return naturaliste
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
     * Set carte
     *
     * @param string $carte
     *
     * @return naturaliste
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
     * @return naturaliste
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
     * Set dmod
     *
     * @param \DateTime $dmod
     *
     * @return naturaliste
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

