<?php

namespace App\Controller;

use App\Repository\JobsRepository;
use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
