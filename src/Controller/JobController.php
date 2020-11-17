<?php

namespace App\Controller;

use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(JobsRepository $jobsRepository): Response
    {
        $jobs = $jobsRepository->findAll();

        return $this->render('job/job.html.twig', [
            'jobs' => $jobs,
        ]);
    }
}
