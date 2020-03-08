<?php

namespace App\Repository;

use App\Entity\PropertyAnalytics;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PropertyAnalytics|null find($id, $lockMode = null, $lockVersion = null)
 * @method PropertyAnalytics|null findOneBy(array $criteria, array $orderBy = null)
 * @method PropertyAnalytics[]    findAll()
 * @method PropertyAnalytics[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyAnalyticsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PropertyAnalytics::class);
    }

    // /**
    //  * @return PropertyAnalytics[] Returns an array of PropertyAnalytics objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PropertyAnalytics
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
