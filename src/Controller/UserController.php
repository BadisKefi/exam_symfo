<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    // #[Route('/user', name: 'app_user')]
    // public function index(): Response
    // {
    //     return $this->render('user/index.html.twig', [
    //         'controller_name' => 'UserController',
    //     ]);
    // }

    #[Route('/', name: 'home')]
    public function home()
    {
        return $this->render('user/index.html.twig');
    }
    #[Route('/inscrire', name: 'inscrire')]
    public function inscrire()
    {
        return $this->render('user/index.html.twig');
    }
    #[Route('/connexion', name: 'connexion')]
    public function connexion()
    {
        return $this->render('user/index.html.twig');
    }
}
