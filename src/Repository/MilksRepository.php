<?php

namespace App\Repository;

use App\Entity\Milks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Milks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Milks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Milks[]    findAll()
 * @method Milks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MilksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Milks::class);
    }

    // /**
    //  * @return Milks[] Returns an array of Milks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Milks
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
