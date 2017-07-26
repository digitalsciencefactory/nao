<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxrefRang
 *
 * @ORM\Table(name="fnat_taxref_rang")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxrefRangRepository")
 */
class TaxrefRang
{
    /**
     * @var int
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(name="id", type="bigint", unique=true)
     */
    private $id;

    /**
     * @var string
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Id
     * @ORM\Column(name="rang", type="string", length=4, unique=true)
     */
    private $rang;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_rang", type="string", length=25)
     */
    private $lbRang;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set rang
     *
     * @param string $rang
     *
     * @return TaxrefRang
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return string
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set lbRang
     *
     * @param string $lbRang
     *
     * @return TaxrefRang
     */
    public function setLbRang($lbRang)
    {
        $this->lbRang = $lbRang;

        return $this;
    }

    /**
     * Get lbRang
     *
     * @return string
     */
    public function getLbRang()
    {
        return $this->lbRang;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return TaxrefRang
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
