<?php

namespace App\Controller\Administrateur;

use App\Entity\Jobs;
use App\Form\JobType;
use App\Repository\JobsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class JobAdminController extends AbstractController
{
    /**
     * @Route("/job/admin", name="job_admin")
     */
    public function index(JobsRepository $jobsRepository): Response
    {
        $jobs = $jobsRepository->findAll();

        return $this->render('Administrateur/jobAdmin.html.twig', [
            'jobs' => $jobs,
        ]);
    }
    /**
     * @Route("/job/admin/create", name="job_create")
     */
    public function createJob(Request $request)
    {
        $jobs = new Jobs();
    
        $form = $this->createForm(JobType::class, $jobs);
        $form->handleRequest($request);

        $img1 = $form['uploads']->getData();


        if($form->isSubmitted() && $form->isValid()){

            $nomImg1 = md5(uniqid()); // nom unique
            $extensionImg1 = $img1->guessExtension(); // récupérer l'extension de l'img
            $newNomImg1 = $nomImg1.'.'.$extensionImg1; // recomposer un nom d'img

            try{ // on tente d'importer l'image
               
                $img1->move(
                    $this->getParameter('dossier_photos_jobs'),
                    $newNomImg1
                );
           }
           catch(FileException $e){
            $this->addFlash(
                'danger',
                'Une erreur est survenue lors de l\'importation de l\'image'
            );
        }

        $jobs->setUploads($newNomImg1); // nom pour la base de données


            $manager = $this->getDoctrine()->getManager();
            $manager->persist($jobs);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel emploi a bien été ajoutée'
            );
            return $this->redirectToRoute('job_admin');

        }
        return $this->render('Administrateur/jobAdminForm.html.twig', [
            'formulaireJobs' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/job/update-{id}", name="job_update")
     */
    public function updateJob(JobsRepository $jobsRepository, $id, Request $request)
    {
        $jobs = $jobsRepository->find($id);


        $form = $this->createForm(jobType::class, $jobs);
        $form->handleRequest($request);

        $img1 = $form['uploads']->getData();


        if($form->isSubmitted() && $form->isValid()){

            $nomImg1 = md5(uniqid()); // nom unique
            $extensionImg1 = $img1->guessExtension(); // récupérer l'extension de l'img
            $newNomImg1 = $nomImg1.'.'.$extensionImg1; // recomposer un nom d'img

            try{ // on tente d'importer l'image
               
                $img1->move(
                    $this->getParameter('dossier_photos_jobs'),
                    $newNomImg1
                );
           }
           catch(FileException $e){
            $this->addFlash(
                'danger',
                'Une erreur est survenue lors de l\'importation de l\'image'
            );
        }

        $jobs->setUploads($newNomImg1); // nom pour la base de données
            
           
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($jobs);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel emploi a bien été modifié'
            );

            return $this->redirectToRoute('job_admin');
        }

        return $this->render('Administrateur/jobAdminForm.html.twig', [
            'formulaireJobs' => $form->createView(),
        ]);

    }

    /**
     * @Route("/admin/job/delete-{id}", name="job_delete")
     */
    public function deleteJob(JobsRepository $jobsRepository, $id)
    {
        $jobs = $jobsRepository->find($id);

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($jobs);
        $manager->flush();

        $this->addFlash(
            'danger',
            'Le nouvel emploi a bien été supprimée'
        );
        

        return $this->redirectToRoute('job_admin');
    }
}
