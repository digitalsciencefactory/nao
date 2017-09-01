<?php
namespace AppBundle\Service;

use AppBundle\Extraction\Extraction;
use Doctrine\ORM\EntityManager;
use SensioLabs\Security\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Session\Session;

class ExtractionService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * ExtractionService constructor.
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getObservationsDatees(Extraction $extraction)
    {

        // on récupère les observations validées et entre les 2 dates
        $manager = $this->em;
        $observationRepository = $manager->getRepository('AppBundle:Observation');
        $observations = $observationRepository->extract($extraction->getDatedebut(), $extraction->getDatefin());

        if ($observations !== null && count($observations) !== 0) {
            return $observations;
        }

        throw new RuntimeException("La requête n'a retourné aucune observation.");

    }

    /**
     * @param Extraction $extraction
     * @param array $observations
     * @param $path
     * @param array $entete
     * @return string
     */

    public function generateCsv(Extraction $extraction, array $observations, $path, array $entete)
    {
        // création d'un fichier csv
        $now = new \DateTime();
        $file =
            "FNAT_exctract_"
            . $now->format("Ymd_His_")
            . $extraction->getDatedebut()->format("Ymd")
            . "_"
            . $extraction->getDatefin()->format("Ymd")
            . ".csv";
        // ouverture en écriture
        $handle = fopen($path . $file, "w");
        // écriture de l'entête
        fputcsv($handle, $entete);

        // écriture de chaque ligne
        foreach ($observations as $observation) {
            fputcsv($handle, $observation->toArray());
        }

        // fermeture du fichier
        fclose($handle);

        return $file;

    }
}

