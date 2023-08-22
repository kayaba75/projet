<?php

namespace App\Controller;

use App\Repository\CalculHomeRepository;
use App\Repository\HomeRepository;
use App\Repository\NewsRepository;
use App\Repository\PartenairesRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontNewsController extends AbstractController
{
    #[Route('/news/{slug}', name: 'app_front_news')]
    public function index($slug, NewsRepository $newsRepository, HomeRepository $homeRepository, ServicesRepository $servicesRepository, CalculHomeRepository $calculHomeRepository, PartenairesRepository $partenairesRepository): Response
    {
        $home = $homeRepository->findOneBy(["isActive"=>true]);
        return $this->render('front_news/index.html.twig', [
            'home' => $home,
            'news' => $newsRepository->findOneBy(['slug' => $slug]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
            'calcul_home' => $calculHomeRepository->findOneBy(["isActive"=>true]),
            'partenaires' => $partenairesRepository->findBy(["isActive"=>true]),
            ]);
    }
}
