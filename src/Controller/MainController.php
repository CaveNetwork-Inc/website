<?php

namespace App\Controller;

use App\Modules\Leaderboard;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $config = $this->getDoctrine()->getRepository('App:Config')->findOneByType('server_link');
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $context = [
            'controller_name' => 'MainController',
            $config->getType() => $config->getContent(),
            'user_count' => count($users)
        ];
        return $this->render('main/index.html.twig', $context);
    }
}
