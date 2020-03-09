<?php

namespace App\Controller;

use App\Entity\Performance;
use App\Form\PerformanceType;
use App\Repository\PerformanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="Default")
     */
    public function index(PerformanceRepository $performanceRepository)
    {

        return $this->render('home/index.html.twig', [
            'performances' => $performanceRepository->findAll(),
            'title' => 'Welcome',
        ]);
    }
}
