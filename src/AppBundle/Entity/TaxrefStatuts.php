<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxrefStatuts
 *
 * @ORM\Table(name="fnat_taxref_statuts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxrefStatutsRepository")
 */
class TaxrefStatuts
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
     * @ORM\Column(name="statut", type="string", length=1)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_statut", type="text")
     */
    private $lbStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="df_statut", type="text")
     */
    private $dfStatut;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return TaxrefStatuts
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

    /**
     * Set lbStatut
     *
     * @param string $lbStatut
     *
     * @return TaxrefStatuts
     */
    public function setLbStatut($lbStatut)
    {
        $this->lbStatut = $lbStatut;

        return $this;
    }

    /**
     * Get lbStatut
     *
     * @return string
     */
    public function getLbStatut()
    {
        return $this->lbStatut;
    }

    /**
     * Set dfStatut
     *
     * @param string $dfStatut
     *
     * @return TaxrefStatuts
     */
    public function setDfStatut($dfStatut)
    {
        $this->dfStatut = $dfStatut;

        return $this;
    }

    /**
     * Get dfStatut
     *
     * @return string
     */
    public function getDfStatut()
    {
        return $this->dfStatut;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return TaxrefStatuts
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
