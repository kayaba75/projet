<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\HomeRepository;
use App\Repository\NewsRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontCategorieController extends AbstractController
{
    #[Route('/categorie/{slug}', name: 'app_front_categorie')]
    public function index($slug, CategorieRepository $categorieRepository, HomeRepository $homeRepository, ServicesRepository $servicesRepository, NewsRepository $newsRepository): Response
    {
        //créer une condition pour indiquer le nombre news activé
        $nbnews = $newsRepository->findBy(["isActive"=>true]);
        //filtrer les news par catégorie du slug
        return $this->render('front_categorie/index.html.twig', [
            'categorie' => $categorieRepository->findOneBy(["slug"=>$slug]),
            'categories' => $categorieRepository->findAll(),
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
            'news' => $newsRepository->findBy(["categorie"=>$categorieRepository->findOneBy(["slug"=>$slug])]),
            'nbnews' => count($nbnews),
        ]);
    }
}
