<?php

namespace App\Controller;

use App\Repository\HomeRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontServicesController extends AbstractController
{
    #[Route('/services', name: 'app_front_services')]
    public function index(ServicesRepository $servicesRepository,HomeRepository $homeRepository): Response
    {
        return $this->render('front_services/index.html.twig', [
            'home' => $homeRepository->findOneBy(["isActive"=>true]),   
            'services' => $servicesRepository->findAll(),     ]);
    }
    // creer une route pour le slug
    #[Route('/services/{slug}', name: 'app_front_services_show')]
    public function show($slug,ServicesRepository $servicesRepository,HomeRepository $homeRepository): Response
    {
        return $this->render('front_services/show.html.twig', [
            'home' => $homeRepository->findOneBy(["isActive"=>true]),   
            'services' => $servicesRepository->findOneBy(["slug"=>$slug]),     ]);
    }
    // creer un route pour le calcul de la retraite
    #[Route('/services/calcul-retraite', name: 'app_front_services_calcul_retraite')]
    public function calculRetraite(ServicesRepository $servicesRepository,HomeRepository $homeRepository): Response
    {
        return $this->render('front_services/calcul_retraite.html.twig', [
            'home' => $homeRepository->findOneBy(["isActive"=>true]),   
            'services' => $servicesRepository->findOneBy(["slug"=>"calcul-retraite"]),     ]);
    }
}
