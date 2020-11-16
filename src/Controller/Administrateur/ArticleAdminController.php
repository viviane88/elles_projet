<?php

namespace App\Controller\Administrateur;

use App\Entity\Articles;
use App\Form\ArticleType;
use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/article/admin", name="article_admin")
     */
    public function index(ArticlesRepository $articlesRepository): Response
    {
        $articles = $articlesRepository->findAll();

        return $this->render('Administrateur\articleAdmin.html.twig', [
            'articles' => $articles,
        ]);
    }
    /**
     * @Route("/article/admin/create", name="article_create")
     */
    public function createArticle(Request $request)
    {
        $articles = new Articles();
        
        $form = $this->createForm(ArticleType::class, $articles);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($articles);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel article a bien été ajoutée'
            );
            return $this->redirectToRoute('article_admin');

        }
        return $this->render('Administrateur/articleAdminForm.html.twig', [
            'formulaireArticles' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/article/update-{id}", name="article_update")
     */
    public function updateArticle(ArticlesRepository $articlesRepository, $id, Request $request)
    {
        $articles = $articlesRepository->find($id);


        $form = $this->createForm(ArticleType::class, $articles);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            
           
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($articles);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel article a bien été modifié'
            );

            return $this->redirectToRoute('article_admin');
        }

        return $this->render('Administrateur/articleAdminForm.html.twig', [
            'formulaireArticles' => $form->createView(),
        ]);

    }
    /**
     * @Route("/admin/article/delete-{id}", name="article_delete")
     */
    public function deleteArticle(ArticlesRepository $articlesRepository, $id)
    {
        $articles = $articlesRepository->find($id);

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($articles);
        $manager->flush();

        $this->addFlash(
            'danger',
            'Le nouvel article a bien été supprimée'
        );
        

        return $this->redirectToRoute('article_admin');
    }
}
