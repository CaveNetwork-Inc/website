<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthenticationController extends Controller
{
    /**
     * @Route("/auth", name="authentication")
     */
    public function index()
    {
        return $this->render('authentication/index.html.twig', [
            'controller_name' => 'AuthenticationController',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('authentication/login.html.twig', [
            'controller_name' => 'AuthenticationController',
            'action' => 'login',
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request){

    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(){}
}
