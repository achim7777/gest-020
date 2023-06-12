<?php

namespace App\Controller;

use App\Repository\EnseignantsRepository;

use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/enseignants' )]
class EnseignantsController extends AbstractController
{
    #[Route('/', name: 'app_enseignants')]
    public function index(EnseignantsRepository $repository,
        PaginatorInterface $paginator, Request $request): Response
    {
        $enseignants = $paginator->paginate( $repository->findAll(),
            $request->query->getInt('page', 1), 10);

        return $this->render('enseignants/index.html.twig', [
            'enseignants' => $enseignants, 'isPaginated' => true
        ]);

    }

}


