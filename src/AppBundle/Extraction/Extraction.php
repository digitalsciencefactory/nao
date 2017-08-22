<?php
namespace AppBundle\Extraction;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Extraction
 *
 * Représente les données nécessaires au formulaire pour extraire
 * des observations de la base de données
 *
 * @package AppBundle\Extraction
 */
class Extraction
{
    /**
     * @Assert\Date(
     *     message = "La date doit être au format DD/MM/AAAA"
     * )
     */
    private $datedebut;

    /**
     * @Assert\Date(
     *     message = "La date doit être au format DD/MM/AAAA"
     * )
     */
    private $datefin;

    /**
     * @var Array(Extrait)
     */
    private $tab_extraits;

    /**
     * Extraction constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param mixed $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param mixed $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    /* METHODES */

    /**
     * @return bool
     */
    public function datefinApresDatedebut(){
        return $this->datedebut <= $this->datefin;
    }
}
