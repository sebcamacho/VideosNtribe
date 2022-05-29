<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/approche', name: 'approche')]
    public function approche(): Response
    {
        return $this->render('home/approche.html.twig');
    }

    #[Route('/parcours', name: 'parcours')]
    public function parcours(): Response
    {
        return $this->render('home/parcours.html.twig');
    }
}
