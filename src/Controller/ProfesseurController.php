<?php

namespace App\Controller;
use App\Repository\ModuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfesseurController extends AbstractController
{
    #[Route('/professeur', name: 'app_professeur')]
    public function index(ModuleRepository $moduleRepository): Response
    {
        $modules=$moduleRepository->findBy(['isArchived'=>false]);

        return $this->render('professeur/index.html.twig', [
            'ProfesseurNotArchived' => $modules
        ]);
    }
}
