<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\HomeRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, HomeRepository $homeRepository, CategorieRepository $categorieRepository, ServicesRepository $servicesRepository): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $home = $homeRepository->findOneBy(["isActive"=>true]);
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'home' => $home, 'categories' => $categorieRepository->findBy(["isActive"=>true]) , 'services' => $servicesRepository->findBy(["isActive"=>true])]);

    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
