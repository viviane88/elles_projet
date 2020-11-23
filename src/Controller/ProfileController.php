<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Form\ProfileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(): Response
    {
        return $this->render('profile/my_space.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/profile/info", name="profile_info")
     */
    public function createInfo(Request $request): Response
    {
        $profile = new Profile();
    
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);
        
        return $this->render('profile/profileForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
