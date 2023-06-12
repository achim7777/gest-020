<?php

namespace App\Controller;

use App\Repository\ModulesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/modules')]
class ModulesController extends AbstractController
{
    #[Route('/', name: 'app_modules')]
    public function index(ModulesRepository $modulesRepository): Response
    {
        $modules = $modulesRepository->findAll();

        return $this->render('modules/index.html.twig', [
            'modules' => $modules
        ]);
    }
}
