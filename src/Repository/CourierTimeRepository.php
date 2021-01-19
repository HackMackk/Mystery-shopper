<?php

namespace App\Repository;

use App\Entity\CourierTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourierTime|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierTime|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierTime[]    findAll()
 * @method CourierTime[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierTimeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierTime::class);
    }

    // /**
    //  * @return CourierTime[] Returns an array of CourierTime objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CourierTime
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
