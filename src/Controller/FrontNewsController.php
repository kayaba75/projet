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
    #[Route('/news', name: 'app_front_news2')]
    public function index2(NewsRepository $newsRepository, HomeRepository $homeRepository, ServicesRepository $servicesRepository, CalculHomeRepository $calculHomeRepository, PartenairesRepository $partenairesRepository): Response
    {
        $home = $homeRepository->findOneBy(["isActive"=>true]);
        // classer les news par date de création de la plus récente à la plus ancienne
        // $lastnews = $newsRepository->findBy(["isActive"=>true], ["createdAt"=>"DESC"],["slug"=>$slug]);

        return $this->render('front_news/news.html.twig', [
            'home' => $home,
            'news' => $newsRepository->findAll(),
            // 'lastnews' => $lastnews,
            'services' => $servicesRepository->findBy(["isActive"=>true]),
            'partenaires' => $partenairesRepository->findBy(["isActive"=>true]),
            ]);
    }



    #[Route('/news/{slug}', name: 'app_front_news')]
    public function index($slug, NewsRepository $newsRepository, HomeRepository $homeRepository, ServicesRepository $servicesRepository, CalculHomeRepository $calculHomeRepository, PartenairesRepository $partenairesRepository): Response
    {
        $home = $homeRepository->findOneBy(["isActive"=>true]);
        // classer les news par date de création de la plus récente à la plus ancienne
        // $lastnews = $newsRepository->findBy(["isActive"=>true], ["createdAt"=>"DESC"],["slug"=>$slug]);

        return $this->render('front_news/index.html.twig', [
            'home' => $home,
            'new' => $newsRepository->findOneBy(["slug"=>$slug]),
            'news' => $newsRepository->findBy(["isActive"=>true], ["createdAt"=>"DESC"]),
            // 'lastnews' => $lastnews,
            'services' => $servicesRepository->findBy(["isActive"=>true]),
            'partenaires' => $partenairesRepository->findBy(["isActive"=>true]),
            ]);
    }
}   
