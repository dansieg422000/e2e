<?php

namespace App\Repository;

use App\Entity\AnalyticTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AnalyticTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnalyticTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnalyticTypes[]    findAll()
 * @method AnalyticTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnalyticTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnalyticTypes::class);
    }

    // /**
    //  * @return AnalyticTypes[] Returns an array of AnalyticTypes objects
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
    public function findOneBySomeField($value): ?AnalyticTypes
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
