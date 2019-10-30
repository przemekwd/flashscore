<?php

namespace DashboardBundle\Controller;

use DashboardBundle\Service\Football\BaseConnector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FootballController extends AbstractController
{
    /**
     * @Route("/", name="football", methods={"GET"})
     *
     * @param   BaseConnector   $connector
     * @return  Response
     */
    public function indexAction(BaseConnector $connector)
    {
        return $this->render('DashboardBundle:football:index.html.twig', [
            'connector' => $connector,
        ]);
    }
}
