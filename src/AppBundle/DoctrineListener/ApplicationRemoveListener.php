<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 29/08/2017
 * Time: 19:36
 */

namespace AppBundle\DoctrineListener;


use AppBundle\Entity\User;
use AppBundle\Service\UserService;

class ApplicationRemoveListener
{
    /**
     * @var ApplicationMailer
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // On ne veut envoyer un email que pour les entités Application
        if (!$entity instanceof User) {
            return;
        }

        $this->userService->remove($entity);
    }
}