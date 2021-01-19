<?php

namespace App\Repository;

use App\Entity\BoxDeformed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BoxDeformed|null find($id, $lockMode = null, $lockVersion = null)
 * @method BoxDeformed|null findOneBy(array $criteria, array $orderBy = null)
 * @method BoxDeformed[]    findAll()
 * @method BoxDeformed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoxDeformedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BoxDeformed::class);
    }

    // /**
    //  * @return BoxDeformed[] Returns an array of BoxDeformed objects
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
    public function findOneBySomeField($value): ?BoxDeformed
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
