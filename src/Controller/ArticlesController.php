<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(): Response
    {
        $articles=["Article1","Article2","Article3"];
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    
    /**
     * @Route("/home/{name?}/{age?}", name="home")
     */
    public function index1($name,$age): Response
    {
        
        return $this->render('shared/home.html.twig', [
            'name' => $name,
            'age' => $age
        ]);
    }



}
