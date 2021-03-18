<?php

namespace App\Controller;

use App\Entity\Item;

use Symfony\Component\HttpFoundation\Response;

// use twig template engine
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// could use routes.yaml, but instead we're using annotations
use Symfony\Component\Routing\Annotation\Route;


Class ItemController extends AbstractController {
    /**
     * @Route("/Item")
     *
     * @return Response
     */
    public function index() {
        $items = $this->getDoctrine()->getRepository(Item::class)->findAll();
        return $this->render('items/index.html.twig', array('items' => $items));
    }

    /**
     * @Route("/Items")
     *
     */
    public function getItems() {
        $items = $this->getDoctrine()->getRepository(Item::class)->getItems();
        //return $items;
        return $this->render('items/index.html.twig', array('items' => $items));
    }
}


