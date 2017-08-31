<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 29/08/2017
 * Time: 19:41
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;

class UserService
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

    /**
     * Attribue les observations d'un utilisateur en cours de suppression
     * à un utilisateur standard
     * @param User $user
     */
    public function remove(User $user){
        // on modifie les observations pour les créateurs
        $utilisateurRepo = $this->em->getRepository("AppBundle:User");
        $naturalistedefault = $utilisateurRepo->findOneBy(Array(
            "mail" => "contact-fnat@digitalsciencefactory.com"
        ));

        foreach($user->getObservations() as $observation){
            $observation->setObservateur($naturalistedefault);
        }

        // on modifie les observation pour les valideurs
        foreach($user->getObservationsValidees() as $observation){
            $observation->setNaturaliste($naturalistedefault);
        }

        $this->em->remove($user);
        $this->em->flush();



        return true;
    }
}


