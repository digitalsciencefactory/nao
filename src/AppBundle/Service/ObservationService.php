<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 01/09/2017
 * Time: 15:18
 */

namespace AppBundle\Service;

use AppBundle\Mailer\FnatMailer;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Observation;
use AppBundle\Entity\Taxref;

class ObservationService
{

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var MessagesFlashService
     */
    private $mfs;

    /**
     * @var FnatMailer
     */
    private $mailer;

    /**
     * ExtractionService constructor.
     */
    public function __construct(EntityManager $em, MessagesFlashService $mfs, FnatMailer $mailer)
    {
        $this->em = $em;
        $this->mfs = $mfs;
        $this->mailer = $mailer;
    }


    /**
     * Liste des observations en attente
     *
     * @return Observation[]|array
     */
    public function findObsEnAttente()
    {
        $result = $this->em->getRepository('AppBundle:Observation')
            ->findBy(array('statut' => 'STATUT_EN_ATTENTE'));

        if ($result == null)
        {
            $this->mfs->messageInfo('Aucune observation en attente de validation');
            return $result;
        }
        else
        {
            return $result;
        }
    }


    /**
     * Liste des observations d'une espèce
     *
     * @param $espece
     * @return Observation[]|array
     */
    public function findObsByEspece($espece)
    {
        return $this->em->getRepository('AppBundle:Observation')
            ->findBy(array('espece' => $espece));
    }

    public function valideObservation(Observation $observation, $form, $user)
    {
        // Récupère l'epèce selon son id pour la mise à jour
        $especeToSave = $this->em->getRepository('AppBundle:Taxref')
            ->find($form->getEspece());

        //Mise à jour des données
        $observation
            ->setEspece($especeToSave)
            ->setCommNat($form->getCommNat())
            ->setDvalid(new \DateTime('NOW'))
            ->setStatut('STATUT_VALIDE')
            ->setNaturaliste($user)
        ;

        $this->em->persist($observation);
        $this->em->flush();

        $this->mfs->messageSuccess('L\'observation a bien été enregistrée');

        $this->mailer->validObs($observation);
    }

    public function deleteObservation(Observation $observation, $form)
    {
        //Permet de garder les info pour le mail
        $observation->setCommNat($form->getCommNat());

        $this->mailer->DeleteObs($observation);

        $this->em->remove($observation);
        $this->em->flush();

        $this->mfs->messageSuccess('L\'observation a bien été supprimée');
    }

}

