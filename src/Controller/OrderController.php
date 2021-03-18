<?php

namespace App\Controller;

use App\Entity\Orders;

use Symfony\Component\HttpFoundation\Response;

// use twig template engine
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// could use routes.yaml, but instead we're using annotations
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

Class OrderController extends AbstractController {
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index() {
//        $orders = $this->getDoctrine()->getRepository(Orders::class)->findAll();
        $orders = $this->getDoctrine()->getRepository(Orders::class)->findActiveUsers();
        return $this->render('orders/index.html.twig', array('orders' => $orders));
//        $criteria = new \Doctrine\Common\Collections\Criteria();
//        $criteria->where($criteria->expr()->gt('id', 5));
//
//        $orders = $this->getDoctrine()->getRepository(Orders::class)->findBy(array('createdAt' => ));
//        return $this->render('orders/index.html.twig', array('orders' => $orders));
    }

    /**
     * @Route("/orders/{id}", name="order_show")
     */
    public function getOrder($id) {
        $order = $this->getDoctrine()->getRepository(Orders::class)->find($id);

        return $this->render('orders/show.html.twig', array('order' => $order));
    }




}


