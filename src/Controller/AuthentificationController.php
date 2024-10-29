<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthentificationController extends AbstractController
{
    #[Route('/login')]
    public function login(): Response
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('auth/register.html.twig');
    }
    
    #[Route('/reset', name: 'reset')]
    public function reset(): Response
    {
        return $this->render('auth/reset.html.twig');
    }
    
    #[Route('/forgot', name: 'forgot')]
    public function index(): Response
    {
        return $this->render('auth/forgot.html.twig');
    }
    
}
