<?php

namespace App\Repository;

use App\Entity\LeaderboardScore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LeaderboardScore|null find($id, $lockMode = null, $lockVersion = null)
 * @method LeaderboardScore|null findOneBy(array $criteria, array $orderBy = null)
 * @method LeaderboardScore[]    findAll()
 * @method LeaderboardScore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeaderboardScoreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LeaderboardScore::class);
    }

    public function getLeaderboard(): array
    {
        return $this->_em->createQueryBuilder()
            ->select('l')
            ->addSelect('SUM(l.score) as score')
            ->from('App:LeaderboardScore', 'l')
            ->groupBy('l.user')
            ->setMaxResults(10)
            ->getQuery()
            ->getresult();
    }
}
