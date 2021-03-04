<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;

// use twig template engine
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// could use routes.yaml, but instead we're using annotations
use Symfony\Component\Routing\Annotation\Route;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

Class ArticleController extends AbstractController {
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index() {
//        return new Response('<html><body>Hello</body></html>');

//        $articles = ['Article 1', 'Article 2', 'Article 3', 'Article 4'];

        // get articles from the db
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

     /**
      * @Route("/article/save")
      */
     public function save() {
       $entityManager = $this->getDoctrine()->getManager();

       $article = new Article();
       $article->setTitle('Article One');
       $article->setBody('This is the body for article two');

       $entityManager->persist($article);

       $entityManager->flush();

       return new Response('Saved an article with the id of  '.$article->getId());
     }
}


