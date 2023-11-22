<?php

namespace App\Repository;

use App\Entity\VinlyMix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinlyMix>
 *
 * @method VinlyMix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinlyMix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinlyMix[]    findAll()
 * @method VinlyMix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinlyMixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinlyMix::class);
    }

//    /**
//     * @return VinlyMix[] Returns an array of VinlyMix objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VinlyMix
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
