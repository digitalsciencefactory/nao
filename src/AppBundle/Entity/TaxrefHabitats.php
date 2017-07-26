<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxrefHabitats
 *
 * @ORM\Table(name="fnat_taxref_habitats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxrefHabitatsRepository")
 */
class TaxrefHabitats
{
    /**
     * @var int
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(name="id", type="bigint", unique=true)
     */
    private $id;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @var int
     * @ORM\Column(name="habitat", type="smallint", unique=true)
     */
    private $habitat;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_habitat", type="text")
     */
    private $lbHabitat;

    /**
     * @var string
     *
     * @ORM\Column(name="rm_habitat", type="text")
     */
    private $rmHabitat;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set habitat
     *
     * @param integer $habitat
     *
     * @return TaxrefHabitats
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return int
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set lbHabitat
     *
     * @param string $lbHabitat
     *
     * @return TaxrefHabitats
     */
    public function setLbHabitat($lbHabitat)
    {
        $this->lbHabitat = $lbHabitat;

        return $this;
    }

    /**
     * Get lbHabitat
     *
     * @return string
     */
    public function getLbHabitat()
    {
        return $this->lbHabitat;
    }

    /**
     * Set rmHabitat
     *
     * @param string $rmHabitat
     *
     * @return TaxrefHabitats
     */
    public function setRmHabitat($rmHabitat)
    {
        $this->rmHabitat = $rmHabitat;

        return $this;
    }

    /**
     * Get rmHabitat
     *
     * @return string
     */
    public function getRmHabitat()
    {
        return $this->rmHabitat;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return TaxrefHabitats
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
