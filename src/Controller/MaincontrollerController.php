<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaincontrollerController extends AbstractController
{
    #[Route('/', name: 'app_maincontroller')]
    public function index(): Response
    {
        return $this->render('maincontroller/index.html.twig', [
            'controller_name' => 'MaincontrollerController',
        ]);
    }
}
