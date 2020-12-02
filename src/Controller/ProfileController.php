<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Profile;
use App\Form\ProfileType;
use App\Repository\ProfileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function index(ProfileRepository $profilerepository): Response
    {
        $profile = $profilerepository->findAll();

        return $this->render('profile/profile.html.twig', [
            'profile' => $profile,
        ]);
    }
    /**
     * @Route("/profile/create/info", name="profile_create")
     */
    public function createInfo(Request $request): Response
    {
        $user = $this->security->getUser();

        $profile = new Profile();

        $form=$this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        $profile->setUser($user);

        if($form->isSubmitted()){
            if($form->isValid()){
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($profile);
                $manager->flush(); 
                $this->addFlash(
                    'success',
                    'Vos infos ont bien été enregistrées'
                );
            }
            else{
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue'
                );     
            }
    
            return $this->redirectToRoute('profile');
        };
        
        return $this->render('profile/profileForm.html.twig', [
            'formulaireInfo' => $form->createView(),      
        ]);
    }
    /**
     * @Route("/profile/info", name="profile_info", )
     */
    public function show(ProfileRepository $profilerepository): Response
    {
        $profile = new Profile();

        return $this->render('profile/profileInfo.html.twig', [
            'profile' => $profile,
        ]);
    }
   /**
     * @Route("/{id}/edit", name="profile_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Profile $profile): Response
    {
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('profile/edit.html.twig', [
            'profile' => $profile,
            'formulaireInfo' => $form->createView(),
        ]);
    }
    /**
     * @Route("/profile/delete-{id}", name="profile_delete")
     */
    public function deleteUser(ProfileRepository $profilerepository, $id)
    {
        $profile = $profilerepository->find($id);

        $manager =$this->getDoctrine()->getManager();
        $manager->remove($profile);
        $manager->flush();

        $this->addFlash(
            'danger',
            'L\'utilisateur a bien été supprimé'
        );
        return $this->redirectToRoute('profile');
    }
   

   

}
