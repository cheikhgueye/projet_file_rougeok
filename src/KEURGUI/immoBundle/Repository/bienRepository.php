<?php

namespace KEURGUI\immoBundle\Repository;

/**
 * bienRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class bienRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBien($localite, $prix, $type)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('l = :localite')
        ->andWhere('t= :type')
        ->andWhere('b.prix between :prix-10000 and :prix+10000')
        ->setParameters(array(
            ':localite' => $localite,
            ':prix' => $prix,
            ':type' => $type,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBienl($localite)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('l = :localite')
        ->setParameters(array(
            ':localite' => $localite,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBienp($prix)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('b.prix between :prix-10000 and :prix+10000')
        ->setParameters(array(
            ':prix' => $prix,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBient($type)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('t= :type')
        ->setParameters(array(
            ':type' => $type,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBienlt($localite, $type)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('l = :localite')
        ->andWhere('t= :type')
        ->setParameters(array(
            ':localite' => $localite,
            ':type' => $type,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBienlp($localite, $prix)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('l = :localite')
        ->andWhere('b.prix between :prix-10000 and :prix+10000')
        ->setParameters(array(
            ':localite' => $localite,
            ':prix' => $prix,
            ))->getQuery();

        return $u->getResult();
    }

    public function findBienpt($prix, $type)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $u = $qb->select('b', 't', 'l', 'i')
        ->from('KEURGUIimmoBundle:bien', 'b')
        ->leftJoin('b.localite', 'l')
        ->leftJoin('b.type', 't')
        ->leftJoin('b.image', 'i')
        ->where('b.prix between :prix-10000 and :prix+10000')
        ->andWhere('t= :type')
        ->setParameters(array(
            ':prix' => $prix,
            ':type' => $type,
            ))->getQuery();

        return $u->getResult();
    }
}
