<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function jobs(JobsRepository $jobsRepository, ArticlesRepository $articlesRepository): Response
    {
        $jobs = $jobsRepository->findThree();
        $articles = $articlesRepository->findThree();


        return $this->render('home/index.html.twig', [
            'jobs' => $jobs,
            'articles' => $articles,

        ]);
    }
    
}
