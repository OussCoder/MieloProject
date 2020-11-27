<?php

namespace App\Repository;

use App\Entity\Apiculteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apiculteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apiculteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apiculteur[]    findAll()
 * @method Apiculteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApiculteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apiculteur::class);
    }

    // /**
    //  * @return Apiculteur[] Returns an array of Apiculteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apiculteur
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
