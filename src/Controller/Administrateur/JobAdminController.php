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
        $userId = $this->getUser();
        $jobs = $jobsRepository->findByUser($userId);
        $jobsDate = $jobsRepository->findAllLatest();

        return $this->render('Administrateur/jobAdmin.html.twig', [
            'jobs' => $jobs,
            'jobsDate' => $jobsDate,

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

        $logo = $form['uploads']->getData();


        if($form->isSubmitted() && $form->isValid()){

            $nomlogo = md5(uniqid()); 
            $extensionlogo = $logo->guessExtension(); //  l'extension de l'img
            $newNomlogo = $nomlogo.'.'.$extensionlogo; // recomposer du nom

            try{ // on tente d'importer l'image
               
                $logo->move(
                    $this->getParameter('dossier_photos_jobs'),
                    $newNomlogo
                );
           }
           catch(FileException $e){
            $this->addFlash(
                'danger',
                'Une erreur est survenue lors de l\'importation de l\'image'
            );
        }

        $jobs->setUploads($newNomlogo); // nom pour la base de données

        $userId = $this->getUser();
        $jobs->setUser($userId);


            $manager = $this->getDoctrine()->getManager();
            $manager->persist($jobs);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel emploi a bien été ajouté'
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

        $logo = $form['uploads']->getData();


        if($form->isSubmitted() && $form->isValid()){

            $nomlogo = md5(uniqid()); 
            $extensionlogo = $logo->guessExtension(); //  l'extension de l'img
            $newNomlogo = $nomlogo.'.'.$extensionlogo; // recomposer du nom

            try{ // on tente d'importer l'image
               
                $logo->move(
                    $this->getParameter('dossier_photos_jobs'),
                    $newNomlogo
                );
           }
           catch(FileException $e){
            $this->addFlash(
                'danger',
                'Une erreur est survenue lors de l\'importation de l\'image'
            );
        }

        $jobs->setUploads($newNomlogo); // nom pour la base de données
            
           
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

        // récupérer le nom et le chemin de l'image à supprimer
        $nomlogo = $jobs->getUploads();
        $cheminLogo = $this->getParameter('dossier_photos_jobs').'/'.$nomlogo;

        // supprimer img1
        if($nomlogo != null){
            unlink($cheminLogo);
        }

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($jobs);
        $manager->flush();

        $this->addFlash(
            'danger',
            'Le nouvel emploi a bien été supprimé'
        );
        

        return $this->redirectToRoute('job_admin');
    }
    

}
