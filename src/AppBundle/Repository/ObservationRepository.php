<?php

namespace AppBundle\Repository;
use AppBundle\Entity\User;

/**
 * ObservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ObservationRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Retourne une observation avec ses dépendances
     * @param $espece
     * @return array
     */
    public function getEspeceWithJoin($espece){
        $qb = $this
            ->createQueryBuilder('a')
<<<<<<< HEAD
            ->select('a')
=======
            ->addselect('a')
>>>>>>> silh
            ->leftJoin('a.espece', 'espece')
            ->addSelect('espece')
            ->leftJoin('espece.rang', 'rang')
            ->addSelect('rang')
            ->leftJoin('espece.habitat', 'habitat')
            ->addSelect('habitat')
            ->leftJoin('espece.fr', 'fr')
            ->addSelect('fr')
            ->andWhere('a.espece = :espece')
            ->setParameter('espece', $espece)
            ->orderBy('a.dcree', 'ASC');

        return $qb
            ->getQuery()
            ->getResult()
            ;

    }

    /**
     * Retourne une observation avec ses dépendances
     * @param $espece
     * @return array
     */
    public function getOneWithJoin($id){
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->leftJoin('a.espece', 'espece')
            ->addSelect('espece')
            ->leftJoin('espece.rang', 'rang')
            ->addSelect('rang')
            ->leftJoin('espece.habitat', 'habitat')
            ->addSelect('habitat')
            ->leftJoin('espece.fr', 'fr')
            ->addSelect('fr')
            ->andWhere('a.id = :id')
            ->setParameter('id', $id);

        return $qb
            ->getQuery()
            ->getResult()
            ;

    }

    /**
     * Retourne toutes les observation entre deux dates
     *
     * @param $datedebut
     * @param $datefin
     * @return array
     */
    public function extract($datedebut, $datefin){
        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->leftJoin('a.espece', 'espece')
            ->addSelect('espece')
            ->leftJoin('espece.rang', 'rang')
            ->addSelect('rang')
            ->leftJoin('espece.habitat', 'habitat')
            ->addSelect('habitat')
            ->leftJoin('espece.fr', 'fr')
            ->addSelect('fr')
            ->andWhere('a.dobs >= :datedebut')
            ->setParameter('datedebut', $datedebut)
            ->andWhere('a.dobs <= :datefin')
            ->setParameter('datefin', $datefin)
            ->andWhere('a.statut = :statut')
            ->setParameter('statut', "STATUT_VALIDE");

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
<<<<<<< HEAD
=======

    /**
     * Retourne les taxons en et leur nombre dans les observations
     *
     * @param string $recherche
     * @return array
     */
    public function getByAutoComplete($recherche){


        /*
        $qb = $this->createQueryBuilder('o')
            ->select('count(o.id) as "occurence" ')
            ->addSelect('t.lb_nom')
            ->addSelect('t.nom_vern')
            ->addSelect('t.nom_vern_eng')
            ->leftJoin('o.espece_id', 't', 'WITH', 't.id = o.espece_id') // left join inversÃ© = right join
            ->from('AppBundle:Observation', 'o')
            ->from('AppBundle:Taxref', 't')
            ->where('t.lb_nom like :search OR t.nom_vern like :search OR t.nom_vern like :search')
            ->groupBy('t.id')
            ->setParameter('search', $recherche);*/

        $qb = $this->_em->createQueryBuilder();
        $qb->addSelect('Distinct t.id')
            ->addSelect('t.lbNom')
            ->addSelect('t.nomVern')
            ->addSelect('t.nomVernEng')
            ->from('AppBundle:Taxref', 't')
            ->andWhere('t.lbNom like :rechLbNom OR t.nomVern like :rechVern OR t.nomVernEng like :rechVernEng');
        $qb->setParameter('rechLbNom', '%'.$recherche.'%');
        $qb->setParameter('rechVern', '%'.$recherche.'%');
        $qb->setParameter('rechVernEng', '%'.$recherche.'%');

        $query = $qb->getQuery();

        return $query->getArrayResult();

    }
>>>>>>> silh

}
