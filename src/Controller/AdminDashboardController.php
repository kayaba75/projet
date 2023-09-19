<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use App\Repository\HomeRepository;
use App\Repository\NewsRepository;
use App\Repository\RdvRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(HomeRepository $homeRepository, UserRepository $userRepository,NewsRepository $newsRepository, ContactRepository $contactRepository,RdvRepository $rdvRepository): Response
    {
        $nbnews = $newsRepository->findBy(["isActive"=>true]);
        $nbusers = $userRepository->findAll();
        $nbcontacts = $contactRepository->findAll();
        $nbRdv = $rdvRepository->findAll();

        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'users' => $userRepository->findAll(),
            'news' => $newsRepository->findAll(),
            'nbNews' => count($nbnews),
            'nbUsers' => count($nbusers),
            'nbContacts' => count($nbcontacts),
            'nbRdv' => count($nbRdv),
        ]);
    }
}
