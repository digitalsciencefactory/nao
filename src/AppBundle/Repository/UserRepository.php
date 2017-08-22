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
    /**
     * @return array
     */
    public function getNaturalistesEnAttente(){
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->andWhere('a.carte is not null')
            ->andWhere('a.roles = :role')
            ->setParameter('role', "a:1:{i:0;s:16:\"ROLE_OBSERVATEUR\";}");

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
