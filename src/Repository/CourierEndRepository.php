<?php

namespace App\Repository;

use App\Entity\CourierEnd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourierEnd|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierEnd|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierEnd[]    findAll()
 * @method CourierEnd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierEndRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierEnd::class);
    }

    // /**
    //  * @return CourierEnd[] Returns an array of CourierEnd objects
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
    public function findOneBySomeField($value): ?CourierEnd
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
