<?php

namespace App\Controller;
use App\Entity\RdvDispo;
use App\Form\RdvDispoType;
use App\Repository\RdvRepository;
use App\Repository\UserRepository;
use App\Repository\RdvDispoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/rdv/dispo')]
class AdminRdvDispoController extends AbstractController
{
    #[Route('/', name: 'app_admin_rdv_dispo_index', methods: ['GET'])]
    public function index(Request $request,RdvDispoRepository $rdvDispoRepository,): Response
    {


        $rdvDispo = $rdvDispoRepository->findAll();
        return $this->render('admin_rdv_dispo/index.html.twig', [

            'rdv_dispos' => $rdvDispo,
        ]);
    }   
    #[Route('/new', name: 'app_admin_rdv_dispo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, RdvRepository $rdvRepository): Response
    {
        
        $rdvDispo = new RdvDispo();
        $form = $this->createForm(RdvDispoType::class, $rdvDispo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rdvDispo);
            $entityManager->flush();

            $this->addFlash(  
                'alert alert-success',
                "Le rendez vous du {$rdvDispo->getDate()->format('d/m/Y')} a bien été enregistrée !"
            );

            return $this->redirectToRoute('app_admin_rdv_dispo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_rdv_dispo/new.html.twig', [
            'rdv_dispo' => $rdvDispo,
            'form' => $form,
            'user' => $userRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_rdv_dispo_show', methods: ['GET'])]
    public function show(RdvDispo $rdvDispo): Response
    {
        return $this->render('admin_rdv_dispo/show.html.twig', [
            'rdv_dispo' => $rdvDispo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_rdv_dispo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RdvDispo $rdvDispo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RdvDispoType::class, $rdvDispo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_rdv_dispo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_rdv_dispo/edit.html.twig', [
            'rdv_dispo' => $rdvDispo,
            'form' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_admin_rdv_dispo_delete', methods: ['POST'])]
    public function delete(Request $request, RdvDispo $rdvDispo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rdvDispo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($rdvDispo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_rdv_dispo_index', [], Response::HTTP_SEE_OTHER);
    }
}
