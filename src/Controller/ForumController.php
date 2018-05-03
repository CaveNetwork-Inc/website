<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    /**
     * @Route("/forums", name="forums")
     */
    public function index()
    {
        $nodes = $this->getDoctrine()->getRepository('App:Node')->findAll();
        return $this->render('forum/index.html.twig', [
            'controller_name' => 'ForumController',
            'nodes' => $nodes
        ]);
    }
}
