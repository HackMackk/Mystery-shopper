<?php

namespace App\Repository;

use App\Entity\BDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method BDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method BDate[]    findAll()
 * @method BDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BDate::class);
    }

    // /**
    //  * @return BDate[] Returns an array of BDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BDate
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
