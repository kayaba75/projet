<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\CategorieRepository;
use App\Repository\HomeRepository;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FrontUserController extends AbstractController
{
    #[Route('/user', name: 'app_front_user')]
    public function index(Request $request,HomeRepository $homeRepository, EntityManagerInterface $entityManagerInterface, UserPasswordHasherInterface $userPasswordHasherInterface, CategorieRepository $categorieRepository, ServicesRepository $servicesRepository): Response
    {
        //on récupère l'utilisateur connecté   
        $user = $this->getUser();
        //on crée un formulaire de User avec le data de user connecté et on le passe à la vue
        $form = $this->createForm(UserType::class, $user);

        // On hydrate le formulaire avec les données du formulaire soumis
        $form->handleRequest($request);
        // On verifie que le formulaire est soucis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            if(!is_null($request->request->get('plainPassword'))){
                $user->setPassword($userPasswordHasherInterface->hashPassword($user,
                        $request->request->get('plainPassword')));
                        $entityManagerInterface->persist($user);

        
            }
            // On enregistre l'utilisateur en base de données
            $entityManagerInterface->flush();
            $this->addFlash(
                'success',
                "Votre profil a bien été modifié !"
            ); 
            
           // On redirige l'utilisateur vers la page d'accueil
            return $this->redirectToRoute('app_front_user');
        }
        return $this->render('front_user/index.html.twig', [
            'form' => $form->createView(),
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'categories' => $categorieRepository->findBy(["isActive"=>true]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
        ]);
    }
}
