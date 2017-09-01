<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 01/09/2017
 * Time: 15:18
 */

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Mailer\FnatMailer;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Observation;
use AppBundle\Entity\Taxref;

class ObservationService
{

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var MessagesFlashService
     */
    protected $mfs;

    /**
     * @var FnatMailer
     */
    protected $mailer;

    /**
     * @var UserService
     */
    protected $userService;

    /**
     * ExtractionService constructor.
     */
    public function __construct(EntityManager $em, MessagesFlashService $mfs, FnatMailer $mailer, UserService $userService)
    {
        $this->em = $em;
        $this->mfs = $mfs;
        $this->mailer = $mailer;
        $this->userService = $userService;
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

        if ($result === null)
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

    /**
     * @param Observation $observation
     * @param Observation $form
     * @param User $user
     */
    public function valideObservation(Observation $observation, Observation $form, User $user)
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

    /**
     * @param Observation $observation
     * @param Observation $form
     */
    public function deleteObservation(Observation $observation, Observation $form)
    {
        //Permet de garder les info pour le mail
        $observation->setCommNat($form->getCommNat());

        $this->mailer->DeleteObs($observation);

        $this->em->remove($observation);
        $this->em->flush();

        $this->mfs->messageSuccess('L\'observation a bien été supprimée');
    }

    /**
     * @param Observation $observation
     */
    public function saveObservation(User $user, Observation $observation, $espece, $photoDir){

        $observation = $this->dealWithPhoto($observation, $photoDir);

        // on récupère l'espèce avec son id
        $observation->setEspece($espece);

        // On complète l'entité
        $observation->setObservateur($user);
        $observation->setDcree(new \DateTime('NOW'));

        if ($this->userService->hasNatRole($user)) {
            $observation->setStatut("STATUT_VALIDE");
            $observation->setNaturaliste($user);
            $observation->setDvalid(new \DateTime('NOW'));
        }
        // on essaye d'insérer en base
        $em = $this->getDoctrine()->getManager();
        $em->persist($observation);
        $em->flush();

        // on affiche la page envoi_observation avec le flash bag
        if ($this->userService->hasNatRole($user)) {
            $this->mfs->messageSuccess('Votre observation est bien enregistrée et validée.');
        } else {
            $this->mfs->messageSuccess('Votre observation a bien été transmise à un naturaliste.');
        }

    }

    /**
     * Gère la photo de l'observation si il y en a une.
     *
     * @param Observation $observation
     * @param $photoDir
     * @return Observation
     */
    protected function dealWithPhoto(Observation $observation, $photoDir){
        if (null !== $observation->getFile()) {
            $name = $this->randomizePhotoNameFile($observation);
            // On déplace le fichier envoyé dans le répertoire de notre choix
            $observation->getFile()->move($photoDir, $name);
            // On sauvegarde le nom de fichier dans notre attribut $url
            $observation->setPhoto($name);
        }
        return $observation;
    }

    /**
     * Retourne un nom random de la photo avec la bonne extension
     *
     * @param Observation $observation
     * @return string newNameRandomized
     */
    protected function randomizePhotoNameFile(Observation $observation){
        $name = substr(bin2hex(random_bytes(200)),0,100) . "." . $observation->getFile()->getClientOriginalExtension();
        return Date("yyyy-mm-dd") . "_" . $name;
    }
}

