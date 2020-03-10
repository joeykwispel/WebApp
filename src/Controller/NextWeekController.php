<?php

namespace App\Controller;

use App\Entity\Performance;
use App\Form\PerformanceType;
use App\Repository\PerformanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NextWeekController extends AbstractController
{
    /**
     * @Route("/nextweek", name="next_week")
     */
    public function index(PerformanceRepository $performanceRepository)
    {
        return $this->render('next_week/index.html.twig', [
            'performances' => $performanceRepository->findAll(),
            'controller_name' => 'NextWeekController',
        ]);
    }
}
