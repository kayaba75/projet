<?php

namespace App\Repository;

use App\Entity\RdvDispo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RdvDispo>
 *
 * @method RdvDispo|null find($id, $lockMode = null, $lockVersion = null)
 * @method RdvDispo|null findOneBy(array $criteria, array $orderBy = null)
 * @method RdvDispo[]    findAll()
 * @method RdvDispo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RdvDispoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RdvDispo::class);
    }

//    /**
//     * @return RdvDispo[] Returns an array of RdvDispo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RdvDispo
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
