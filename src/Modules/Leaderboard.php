<?php
/**
 * Created by PhpStorm.
 * User: glegr
 * Date: 12-4-2018
 * Time: 21:27
 */

namespace App\Modules;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManager;

/**
 * @Route(service="Leaderboard")
 */
class Leaderboard
{
    private $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function runModule(){
        $leaderboard = $this->entityManager->getRepository('App:LeaderboardScore')->getLeaderboard();

        return $leaderboard;
    }
}