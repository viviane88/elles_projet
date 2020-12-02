<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(ArticlesRepository $articlesRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $articles = $paginator -> paginate(
            $articlesRepository->findAllLatest(),
            $request->query->getInt('page',1),
            4
        );
        return $this->render('article/article.html.twig', [
            'articles' => $articles,
        ]);
    }
    
    /**
     * @Route("/article-{id}", name="article_show", methods={"GET"})
     */
    public function show(Articles $articles): Response
    {
        return $this->render('article/show.html.twig', [
            'articles' => $articles,
        ]);
    }
}
