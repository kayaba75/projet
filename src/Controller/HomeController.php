<?php

namespace App\Controller;

use App\Repository\CalculHomeRepository;
use App\Repository\CategorieRepository;
use App\Repository\HomeRepository;
use App\Repository\NewsRepository;
use App\Repository\PartenairesRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HomeRepository $homeRepository, ServicesRepository $servicesRepository, CalculHomeRepository $CalculHomeRepository, PartenairesRepository $partenairesRepository, NewsRepository $newsRepository, CategorieRepository $categorieRepository): Response
    {

        $home = $homeRepository->findOneBy(["isActive"=>true]);
        $services = $servicesRepository->findBy(["isActive"=>true]);
        $calculHome = $CalculHomeRepository->findOneBy(["isActive"=>true]);
        $partenaires = $partenairesRepository->findBy(["isActive"=>true]);
        $news = $newsRepository->findBy(["isActive"=>true]);
        return $this->render('home/index.html.twig', [
            'home' => $home,
            'services' => $services,
            'calcul_home' => $calculHome,
            'partenaires' => $partenaires,
            'news' => $news,
            'categories' => $categorieRepository->findBy(["isActive"=>true]),
        ]);
    }
    
}
