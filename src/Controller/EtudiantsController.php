<?php

namespace App\Controller;

use App\Repository\EtudiantsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiants' )]
class EtudiantsController extends AbstractController
{
    #[Route('/', name: 'app_etudiants')]
    public function index(EtudiantsRepository $etudiantsRepository): Response
    {
        $etudiants = $etudiantsRepository -> findAll();

        return $this->render('etudiants/index.html.twig', [
            'etudiants' => $etudiants
        ]);
    }
}
