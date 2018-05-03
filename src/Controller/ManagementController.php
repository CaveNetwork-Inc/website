<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManagementController extends Controller
{
    /**
     * @Route("/manage/users", name="user_management")
     */
    public function index()
    {
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        return $this->render('management/users.html.twig', [
            'controller_name' => 'ManagementController',
            'users' => $users,
        ]);
    }
}
