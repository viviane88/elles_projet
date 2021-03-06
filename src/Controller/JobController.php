<?php

namespace App\Controller;

use App\Entity\Jobs;
use App\Entity\SearchJob;
use App\Form\SearchJobType;
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
        $search = new SearchJob();
        $form = $this->createForm(SearchJobType::class, $search);
        $form->handleRequest($request);


        $jobs = $paginator -> paginate(
            $jobsRepository->findAllVisibleQuery($search),
            $request->query->getInt('page',1),
            5
        );

        return $this->render('job/job.html.twig', [
            'jobs' => $jobs,
            'form' => $form->createView()

        ]);
    }
    /**
     * @Route("/all/job", name="all_job")
     */
    public function allJob(JobsRepository $jobsRepository, PaginatorInterface $paginator, Request $request ): Response
    {
        $allJob = $paginator -> paginate(
            $jobsRepository->findAll(),
            $request->query->getInt('page',1),
            5
        );

        return $this->render('job/allJob.html.twig', [
            'allJob' => $allJob,


        ]);
    }

    /**
     * @Route("/job-{id}", name="job_show", methods={"GET"})
     */
    public function show(Jobs $jobs): Response
    {
        return $this->render('job/show.html.twig', [
            'jobs' => $jobs,
        ]);
    }
    

}
