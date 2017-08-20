<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 20/08/2017
 * Time: 19:39
 */

namespace AppBundle\Extraction;


use AppBundle\Entity\Observation;

class Extrait
{
    private $date;
    private $lbNom;
    private $nomVern;
    private $nomVernEng;
    private $latitude;
    private $longitude;
    private $comm_obs;
    private $comm_nat;

    /**
     * Extrait constructor.
     */
    public function __construct(Observation $observation)
    {
        $this->date        = $observation->getDobs();
        $this->lbNom       = $observation->getEspece()->getLbNom();
        $this->nomVern     = $observation->getEspece()->getNomVern();
        $this->nomVernEng  = $observation->getEspece()->getNomVernEng();
        $this->latitude    = $observation->getLatitude();
        $this->longitude   = $observation->getLongitude();
        $this->comm_obs    = $observation->getCommObs();
        $this->comm_nat    = $observation->getCommNat();
    }

    /**
     * Retourne l'extrait sour forme de tableau
     *
     * @return array
     */
    public function toArray(){
        return array($this->date,$this->lbNom,$this->nomVern,$this->nomVernEng,$this->latitude,$this->longitude,$this->comm_obs,$this->comm_nat);
    }

}