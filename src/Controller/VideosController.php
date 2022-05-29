<?php

namespace App\Controller;

use App\Entity\Videos;
use App\Repository\VideosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/videos')]
class VideosController extends AbstractController
{
    
    #[Route('/', name: 'videos', methods: ['GET'])]
    public function index(VideosRepository $videosRepository): Response
    {
        $videos = $videosRepository->findAll();
        return $this->render('videos/index.html.twig', [
            'videos' => $videos,
        ]);
    }


    #[Route('/{slug}', name: 'app_videos_show', methods: ['GET'])]
    public function show(Videos $video): Response
    {

        return $this->render('videos/show.html.twig', [
            'video' => $video,
        ]);
    }

}