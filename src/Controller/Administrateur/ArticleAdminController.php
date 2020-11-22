<?php

namespace App\Controller\Administrateur;

use App\Entity\Articles;
use App\Form\ArticleType;
use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

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

        $img1 = $form['uploads']->getData();

        if($form->isSubmitted() && $form->isValid()){

            $nomImg1 = md5(uniqid()); // nom unique
            $extensionImg1 = $img1->guessExtension(); // récupérer l'extension de l'img
            $newNomImg1 = $nomImg1.'.'.$extensionImg1; // recomposer un nom d'img

            try{ // on tente d'importer l'image
               
                 $img1->move(
                     $this->getParameter('dossier_photos_articles'),
                     $newNomImg1
                 );
            }
            catch(FileException $e){
                $this->addFlash(
                    'danger',
                    'Une erreur est survenue lors de l\'importation de l\'image'
                );
            }

            $articles->setUploads($newNomImg1); // nom pour la base de données

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($articles);
            $manager->flush();

            $this->addFlash(
                'success',
                'Le nouvel article a bien été ajouté'
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

        $img1 = $form['uploads']->getData();



        if($form->isSubmitted() && $form->isValid()){

            $nomImg1 = md5(uniqid()); // nom unique
            $extensionImg1 = $img1->guessExtension(); // récupérer l'extension de l'img
            $newNomImg1 = $nomImg1.'.'.$extensionImg1; // recomposer un nom d'img

            try{ // on tente d'importer l'image
               
                $img1->move(
                    $this->getParameter('dossier_photos_articles'),
                    $newNomImg1
                );
           }
           catch(FileException $e){
               $this->addFlash(
                   'danger',
                   'Une erreur est survenue lors de l\'importation de l\'image'
               );
           }

           $articles->setUploads($newNomImg1); // nom pour la base de données
            
           
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

        // récupérer le nom et le chemin de l'image à supprimer
        $nomImg1 = $articles->getUploads();
        $cheminImg1 = $this->getParameter('dossier_photos_articles').'/'.$nomImg1;

        // supprimer img1
        if($nomImg1 != null){
            unlink($cheminImg1);
        }

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($articles);
        $manager->flush();

        $this->addFlash(
            'danger',
            'Le nouvel article a bien été supprimé'
        );
        

        return $this->redirectToRoute('article_admin');
    }
}
