<?php

namespace App\Repository;

use App\Entity\PostMetaData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PostMetaData|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostMetaData|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostMetaData[]    findAll()
 * @method PostMetaData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostMetaDataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PostMetaData::class);
    }

//    /**
//     * @return PostMetaData[] Returns an array of PostMetaData objects
//     */
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
    public function findOneBySomeField($value): ?PostMetaData
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
