<?php

namespace App\Repository;

use App\Entity\ContractVehicles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContractVehicles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractVehicles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractVehicles[]    findAll()
 * @method ContractVehicles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractVehiclesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractVehicles::class);
    }

    // /**
    //  * @return ContractVehicles[] Returns an array of ContractVehicles objects
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
    public function findOneBySomeField($value): ?ContractVehicles
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
