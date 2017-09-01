<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /* *** MIXTE *** */

    /**

     * @param bool $naturaliste
     * @return int
     */
    public function howMany($naturaliste){
        $qb = $this->createQueryBuilder('a');
        $qb->select('count(a.id)');
        $qb->andWhere('a.roles = :role');
        $qb->andWhere('a.statut = :statut');
        $qb->setParameter('statut', "STATUT_ACTIF");
        if($naturaliste) {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_NATURALISTE\";}");
        } else {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}");

        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     *  Retrouve un utilisateur actif avec son id
     *  ou renvoi un tableau vide
     * @param $id
     * @return array
     */
    public function getUserToBan($id){
        $qb = $this->createQueryBuilder('a')
            ->select('a')
            ->andWhere('a.id = :id')
            ->setParameter('id', $id)
            ->andWhere('a.statut = :statut')
        ->setParameter('statut', "STATUT_ACTIF");

        return $qb->getQuery()->getArrayResult();
    }

    /**
     * Retourne $limit naturaliste en commenceant par le $offset
     * @param int $limit
     * @param int $offset
     * @param bool $naturaliste
     * @return array
     */
    public function getUsersByOffset($limit,$offset,$naturaliste){
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->andWhere('a.roles = :role');
        $qb->andWhere('a.statut = :statut');
        $qb->setParameter('statut', "STATUT_ACTIF");
        if($naturaliste) {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_NATURALISTE\";}");
        } else {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}");
        }

        $qb->setFirstResult( $offset );
        $qb->setMaxResults( $limit );
        $qb->orderBy("a.id","ASC");

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @param bool $naturaliste
     * @return array
     */
    public function getUsersEnAttente($naturaliste){
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->andWhere('a.roles = :role');

        $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}");
        $qb->andWhere('a.statut = :statut');

        if($naturaliste) {
            $qb->andWhere('a.carte is not null');
            $qb->setParameter('statut', "STATUT_ACTIF");
        } else {
            $qb->andWhere('a.carte is null');
            $qb->setParameter('statut', "STATUT_INACTIF");
        }

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Retourne un (futur) naturaliste ou null si on ne le trouve pas
     * @param $id
     * @param $bool false si on veut des futurs naturalistes
     * @return mixed
     */
    public function findOneNatBy($id, $bool)
    {
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->andWhere('a.carte is not null')
            ->andWhere('a.roles = :role');

        if ($bool) {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_NATURALISTE\";}");
        } else {
            $qb->setParameter('role', "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}");
        }

        $qb->andWhere('a.id = :id');
        $qb->setParameter('id', $id);
        
        $result = $qb->getQuery()->getResult();

        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;
        }
    }
}
