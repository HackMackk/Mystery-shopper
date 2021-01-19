<?php

namespace App\Repository;

use App\Entity\CourierContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourierContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierContact[]    findAll()
 * @method CourierContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierContact::class);
    }

    // /**
    //  * @return CourierContact[] Returns an array of CourierContact objects
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
    public function findOneBySomeField($value): ?CourierContact
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
