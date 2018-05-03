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
 * @Route(service="Updates")
 */
class Updates
{
    private $container;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function runModule(){
        $em = $this->container->get('doctrine')->getManager();
        $twig = $this->container->get('twig');

        $updates = $em->getRepository('App:Update')->findBy([],['id' => 'desc'], 2);

        return $updates;
    }
}