<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SemestresController extends AbstractController
{
    #[Route('/semestres', name: 'app_semestres')]
    public function index(): Response
    {
        return $this->render('semestres/index.html.twig', [
            'controller_name' => 'SemestresController',
        ]);
    }
}
