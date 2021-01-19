<?php

namespace App\Repository;

use App\Entity\CourierCloth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourierCloth|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierCloth|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierCloth[]    findAll()
 * @method CourierCloth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierClothRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierCloth::class);
    }

    // /**
    //  * @return CourierCloth[] Returns an array of CourierCloth objects
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
    public function findOneBySomeField($value): ?CourierCloth
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
