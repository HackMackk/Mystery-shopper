<?php

namespace App\Repository;

use App\Entity\CourierMask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourierMask|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierMask|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierMask[]    findAll()
 * @method CourierMask[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierMaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierMask::class);
    }

    // /**
    //  * @return CourierMask[] Returns an array of CourierMask objects
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
    public function findOneBySomeField($value): ?CourierMask
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
