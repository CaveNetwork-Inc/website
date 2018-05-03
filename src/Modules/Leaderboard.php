<?php
/**
 * Created by PhpStorm.
 * User: glegr
 * Date: 12-4-2018
 * Time: 21:27
 */

namespace App\Modules;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\Container;

/**
 * @Route(service="Leaderboard")
 */
class Leaderboard
{
    private $container;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function runModule(){
        $em = $this->container->get('doctrine')->getManager();
        $twig = $this->container->get('twig');

        $leaderboard = $em->getRepository('App:LeaderboardScore')->getLeaderboard();

        return $leaderboard;
    }
}