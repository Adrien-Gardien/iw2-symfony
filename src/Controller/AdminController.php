<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{       
    #[Route('/admin', name: 'admin')]
    public function admin(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/add_films', name: 'add_film')]
    public function add_films(): Response
    {
        return $this->render('admin/admin_add_films.html.twig');
    }
    
    #[Route('/films', name: 'films')]
    public function films(): Response
    {
        return $this->render('admin/admin_films.html.twig');
    }
    
    #[Route('/admin_users', name: 'admin_users')]
    public function admin_users(): Response
    {
        return $this->render('admin/admin_users.html.twig');
    }

    #[Route('/upload', name: 'upload')]
    public function upload(): Response
    {
        return $this->render('admin/upload.html.twig');
    }
    
}
