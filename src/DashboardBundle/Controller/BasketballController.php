<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BasketballController extends AbstractController
{
    /**
     * @Route("/basketball", name="basketball", methods={"GET"})
     */
    public function basketballAction()
    {
        return $this->render('DashboardBundle:football:index.html.twig');
    }
}
