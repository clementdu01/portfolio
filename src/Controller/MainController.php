<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/tkt', name: 'app_main_2')]
    public function index2(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/tkt2', name: 'app_main_3')]
    public function index3(): Response
    {
        return $this->render('test3/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
