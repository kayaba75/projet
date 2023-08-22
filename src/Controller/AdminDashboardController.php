<?php

namespace App\Controller;

use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(HomeRepository $homeRepository): Response
    {
        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
        ]);
    }
}
