<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 29/08/2017
 * Time: 19:41
 */

namespace AppBundle\Service;

use AppBundle\Mailer\FnatMailer;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;

class UserService
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
     * Valide un utilisateur standard et le prévient pas mail.
     *
     * @param User $user
     */
    public function validObs(User $user){

            if($user->getStatut() === "STATUT_INACTIF") {
                $user->setToken("");
                $user->setStatut("STATUT_ACTIF");

                $this->em->persist($user);
                $this->em->flush();

                $this->mailer->insValidObs($user);

                $this->mfs->messageSuccess('L\'utilisateur a été validé. Un mail vient d\'être envoyé pour le prévenir');

            } else {
                $this->mfs->messageWarning('L\'utilisateur est déjà  validé ou n\'est pas reconnu dans la base de données.');
            }

    }

    /**
     * Valide le statut Naturaliste à un utilisateur.
     * Envoi un mail pour prévenir lutilisateur.
     *
     * @param User $user
     */
    public function validNat(User $user){
        if($this->isNatEnAttente($user)) {
            $user->setRoles(array('ROLE_NATURALISTE'));
            $this->em->persist($user);
            $this->em->flush();

            $this->mfs->messageSuccess('L\'utilisateur a été validé');

            $this->mailer->insValidNat($user);
        } else {
            $this->mfs->messageWarning('L\'utilisateur est déjà validé ou n\'a pas demandé à être naturaliste');
        }
    }

    /**
     * Refuse le statut Naturaliste à un utilisateur.
     * Envoi un mail pour prévenir lutilisateur.
     *
     * @param User $user
     * @param $carteProDir
     */
    public function refuseNat(User $user, $carteProDir){

        if($this->isNatEnAttente($user)){
            // on gère la carte professionnelle en la supprimant
            $fichier = $carteProDir . $user->getCarte();
            if(file_exists($fichier)){
                unlink($fichier);
            }
            $user->setCarte(null);

            $this->em->persist($user);
            $this->em->flush();

            $this->mfs->messageSuccess('L\'utilisateur a été refusé et reste observateur.');

            $this->mailer->insRefuseNat($user);

        } else {
            $this->mfs->messageWarning('L\'utilisateur est déjà  validé ou n\'a pas demandé à  être naturaliste');
        }

    }

    /**
     * Vérifie si l'utilisateur est un naturaliste en attente de validation
     *
     * @param User $user
     * @return bool
     */
    protected function isNatEnAttente(User $user){
        $role = $user->getRoles();
        $carte = $user->getCarte();
        $statut = $user->getStatut();

        if($statut === "STATUT_ACTIF" && $carte !== null && $role === "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}"){
            return true;
        }
        return false;
    }

    /**
     * Bloque le compte d'un utilisateur.
     * Envoi un mail pour prévenir l'utilisateur.
     *
     * @param User $user
     */
    public function banUser(User $user)
    {
        if ($user->getStatut() === "STATUT_ACTIF") {
            $user->setStatut("STATUT_BANNI");

            $this->em->persist($user);
            $this->em->flush();

            $this->mfs->messageSuccess('L\'utilisateur a été bloqué. Un mail vient d\'être envoyé pour le prévenir.');

            $this->mailer->banUser($user);
        } else {
            $this->mfs->messageWarning('L\'utilisateur est déjà bloqué, inactif ou inconnu');
        }
    }

    /**
     * Rétablit l'accès au site le compte sélectionné.
     * Envoi un mail pour prévenir l'utilisateur.
     * @param User $user
     */
    public function debanUser(User $user)
    {

        if ($user->getStatut() === "STATUT_BANNI") {
            $user->setStatut("STATUT_ACTIF");

            $this->em->persist($user);
            $this->em->flush();

            $this->mfs->messageSuccess('L\'utilisateur a été débloqué. Un mail vient d\'être envoyé pour le prévenir.');

            $this->mailer->debanUser($user);

        } else {
            $this->mfs->messageWarning('L\'utilisateur est déjà débloqué, actif  ou inconnu.');

        }
    }
}

