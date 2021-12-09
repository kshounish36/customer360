<?php

namespace App\Repository;

use App\Entity\ProductVersions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductVersions|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductVersions|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductVersions[]    findAll()
 * @method ProductVersions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductVersionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductVersions::class);
    }

    // /**
    //  * @return ProductVersions[] Returns an array of ProductVersions objects
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
    public function findOneBySomeField($value): ?ProductVersions
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
