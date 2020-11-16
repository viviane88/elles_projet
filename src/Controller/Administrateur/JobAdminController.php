<?php

namespace App\Controller\Administrateur;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobAdminController extends AbstractController
{
    /**
     * @Route("/job/admin", name="job_admin")
     */
    public function index(): Response
    {
        return $this->render('Administrateur/jobAdmin.html.twig', [
            'controller_name' => 'JobAdminController',
        ]);
    }
}
