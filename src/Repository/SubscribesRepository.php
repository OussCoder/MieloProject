<?php

namespace App\Repository;

use App\Entity\Subscribes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subscribes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subscribes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subscribes[]    findAll()
 * @method Subscribes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubscribesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subscribes::class);
    }

    // /**
    //  * @return Subscribes[] Returns an array of Subscribes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Subscribes
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
