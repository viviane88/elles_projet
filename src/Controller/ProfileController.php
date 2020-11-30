<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Form\ProfileType;
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
    public function index(): Response
    {
        return $this->render('baseAdmin.html.twig', [
            'controller_name' => 'ProfileController',
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
            }
            
            return $this->redirectToRoute('profile');
        };
        
        return $this->render('profile/profileForm.html.twig', [
            'formulaireInfo' => $form->createView(),      
        ]);
    }

}
