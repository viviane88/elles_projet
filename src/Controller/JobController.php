<?php

namespace App\Controller;

use App\Repository\JobsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(JobsRepository $jobsRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $jobs = $paginator -> paginate(
            $jobsRepository->findAll(),
            $request->query->getInt('page',1),
            5
        );

        return $this->render('job/job.html.twig', [
            'jobs' => $jobs,
        ]);
    }
}
