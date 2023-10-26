<?php

namespace App\Controller;

use App\Entity\CalculHome;
use App\Form\CalculHomeType;
use App\Repository\CalculHomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/adminxd4f54sdf/calcul/home')]
class AdminCalculHomeController extends AbstractController
{
    #[Route('/', name: 'app_admin_calcul_home_index', methods: ['GET'])]
    public function index(CalculHomeRepository $calculHomeRepository): Response
    {
        return $this->render('admin_calcul_home/index.html.twig', [
            'calcul_homes' => $calculHomeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_calcul_home_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $calculHome = new CalculHome();
        $form = $this->createForm(CalculHomeType::class, $calculHome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($calculHome);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_calcul_home_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_calcul_home/new.html.twig', [
            'calcul_home' => $calculHome,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_calcul_home_show', methods: ['GET'])]
    public function show(CalculHome $calculHome): Response
    {
        return $this->render('admin_calcul_home/show.html.twig', [
            'calcul_home' => $calculHome,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_calcul_home_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CalculHome $calculHome, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalculHomeType::class, $calculHome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_calcul_home_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_calcul_home/edit.html.twig', [
            'calcul_home' => $calculHome,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_calcul_home_delete', methods: ['POST'])]
    public function delete(Request $request, CalculHome $calculHome, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calculHome->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calculHome);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_calcul_home_index', [], Response::HTTP_SEE_OTHER);
    }
}
