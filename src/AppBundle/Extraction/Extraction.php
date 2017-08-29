<?php
namespace AppBundle\Extraction;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context, $payload)
    {
        if($this->datedebut > $this->datefin){
            $context->buildViolation('La date de début doit être antérieur à la date de fin.')
                ->atPath('dateDebut')
                ->addViolation();
        }
    }
}

