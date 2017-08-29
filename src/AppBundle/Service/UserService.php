<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 29/08/2017
 * Time: 19:41
 */

namespace AppBundle\Service;


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
        $observationsObs = $this->em->findBy(array(
            "observateur" => $user->getId()
        ));

        foreach($observationsObs as $observation){
            $observation->setId("1");
        }

        // on modifie les observation pour les valideurs
        $observationsValid = $this->em->findBy(array(
            "valideur" => $user->getId()
        ));

        foreach($observationsValid as $observation){
            $observation->setId("1");
        }

        $this->em->update($observationsObs);
        $this->em->update($observationsValid);
        $this->em->flush();
    }
}