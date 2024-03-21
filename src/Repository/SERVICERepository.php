<?php

namespace App\Repository;

use App\Entity\SERVICE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SERVICE>
 *
 * @method SERVICE|null find($id, $lockMode = null, $lockVersion = null)
 * @method SERVICE|null findOneBy(array $criteria, array $orderBy = null)
 * @method SERVICE[]    findAll()
 * @method SERVICE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SERVICERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SERVICE::class);
    }

    //    /**
    //     * @return SERVICE[] Returns an array of SERVICE objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?SERVICE
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
