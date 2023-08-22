<?php

namespace App\Repository;

use App\Entity\CalculHome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CalculHome>
 *
 * @method CalculHome|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalculHome|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalculHome[]    findAll()
 * @method CalculHome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalculHomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalculHome::class);
    }

//    /**
//     * @return CalculHome[] Returns an array of CalculHome objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CalculHome
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
