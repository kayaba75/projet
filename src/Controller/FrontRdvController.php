<?php

namespace App\Controller;

use App\Entity\Rdv;
use App\Form\RdvType;
use App\Entity\Services;
use App\Repository\CategorieRepository;
use App\Repository\RdvRepository;
use App\Repository\HomeRepository;
use App\Repository\ServicesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/rdv')]
class FrontRdvController extends AbstractController
{
    #[Route('/', name: 'app_front_rdv_index', methods: ['GET'])]
    public function index(RdvRepository $rdvRepository, HomeRepository $homeRepository, UserRepository $userRepository, CategorieRepository $categorieRepository, ServicesRepository $servicesRepository): Response
    {
        return $this->render('front_rdv/index.html.twig', [
            'rdvs' => $rdvRepository->findAll(),
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'categories' => $categorieRepository->findBy(["isActive"=>true]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
            
        ]);
    }

    #[Route('/new', name: 'app_front_rdv_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, HomeRepository $homeRepository,UserRepository $userRepository, CategorieRepository $categorieRepository, ServicesRepository $servicesRepository): Response
    {
        $rdv = new Rdv();
        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {;
            
            // Récupere le services.titre pour l'envoyer dans getRdvDispo dans la classe setDays
            $services = $rdv->getServices()->getTitre();
            // Récupère l'identifiant de l'utilisateur actuel
            $nom = $this->getUser()->getUserIdentifier();;
            // Set le setStatus à en attente
            $rdv->setStatus("En attente");
            // Définit le client le statut et le jour de la réservation dans RdvDispo
            $rdv->getRdvDispo()->setClient($nom);
            $rdv->getRdvDispo()->setBookAvail("En attente");
            $rdv->getRdvDispo()->setDay($services);      
            $entityManager->persist($rdv);
            $entityManager->flush();
            // Faire un add flash de confirmation
            $this->addFlash(
                'alert alert-success',
                "Votre rendez vous a bien été enregistrée !"
            );

            return $this->redirectToRoute('app_front_rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front_rdv/new.html.twig', [
            'rdv' => $rdv,
            'form' => $form,
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'categories' => $categorieRepository->findBy(["isActive"=>true]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
        ]);
    }

    #[Route('/{id}', name: 'app_front_rdv_show', methods: ['GET'])]
    public function show(Rdv $rdv): Response
    {
        return $this->render('front_rdv/show.html.twig', [
            'rdv' => $rdv,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_front_rdv_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Rdv $rdv, EntityManagerInterface $entityManager, HomeRepository $homeRepository,CategorieRepository $categorieRepository, ServicesRepository $servicesRepository): Response
    {
        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_front_rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front_rdv/edit.html.twig', [
            'rdv' => $rdv,
            'form' => $form,
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            'categories' => $categorieRepository->findBy(["isActive"=>true]),
            'services' => $servicesRepository->findBy(["isActive"=>true]),
        ]);
    }

    #[Route('/{id}', name: 'app_front_rdv_delete', methods: ['POST'])]
    public function delete(Request $request, Rdv $rdv, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rdv->getId(), $request->request->get('_token'))) {
            $entityManager->remove($rdv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_front_rdv_index', [], Response::HTTP_SEE_OTHER);
    }
}
