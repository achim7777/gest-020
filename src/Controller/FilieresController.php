<?php

namespace App\Controller;

use App\Repository\FilieresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/filieres')]
class FilieresController extends AbstractController
{
    #[Route('/', name: 'app_filieres')]
    public function index(FilieresRepository $filieresRepository): Response
    {
        $filieres = $filieresRepository->findAll();

        return $this->render('filieres/index.html.twig', [
            'filieres' => $filieres
        ]);
    }
}
