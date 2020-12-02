<?php

namespace App\Controller\Administrateur;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminListUserController extends AbstractController
{
    /**
     * @Route("/admin/list/user", name="admin_list_user")
     */
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('administrateur\AdminListUser.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/user/create", name="user_create")
     */

    public function createUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le nouvel utilisateur à bien été ajouté'
                );
            }
            else{
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue'
                );
            }
            return $this->redirectToRoute('admin_list_user');
        };

        return $this->render('Administrateur\adminListUserForm.html.twig', [
            'formulaireUser' => $form->createView()
        ]);
    }
    /**
     * @Route("/admin/user/update-{id}", name="user_update")
     */
    public function updateUser(UserRepository $userRepository, $id, Request $request,  UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $userRepository->find($id);

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le nouvel utilisateur à bien été modifié'
                );
            }
            else{
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue'
                );
            }
            return $this->redirectToRoute('admin_list_user');
        };

        return $this->render('Administrateur\adminListUserForm.html.twig', [
            'formulaireUser' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/user/delete-{id}", name="user_delete")
     */
    public function deleteUser(UserRepository $userRepository, $id)
    {
        $user = $userRepository->find($id);

        $manager =$this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();

        $this->addFlash(
            'danger',
            'L\'utilisateur a bien été supprimé'
        );
        return $this->redirectToRoute('admin_list_user');
    }
   

}

