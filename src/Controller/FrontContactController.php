<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use App\Repository\HomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontContactController extends AbstractController
{
    #[Route('/contact', name: 'app_front_contact')]
    public function index(Request $request,HomeRepository $homeRepository, EntityManagerInterface $entityManagerInterface, MailerInterface $mailerInterface): Response
    {
            // On met en place le formulaire de contact
            $contact = new Contact();
            // On récupère le formulaire de contact
            $form = $this->createForm(ContactType::class, $contact);

        // on hydrate l'objet avec les données du formulaire
        $form->handleRequest($request);
        // On verifie que le formulaire est soumis et valide
        if($form->isSubmitted() && $form->isValid() ) {

            // On enregistre l'objet en BDD
            $entityManagerInterface->persist($contact);
            $entityManagerInterface->flush();
            //on envoie un mail
            $email = (new Email())
                ->from('contact@sauv.fitas.me')
                ->to('fitas.samy@gmail.com')
                ->subject((!is_null($contact->getSujet())) ? $contact->getSujet() : '')

                // on recupere toutes les données du formulaire
                ->text('Expéditeur : ' . $contact->getEmail() . ' Message : ' . $contact->getMessage());
            

            $mailerInterface->send($email);

            // On envoie un message flash
            $this->addFlash('success', 'Votre message a bien été envoyé');

            // On redirige vers la page d'accueil
            return $this->redirectToRoute('app_home');


        }

        return $this->render('front_contact/index.html.twig', [
            'controller_name' => 'FrontContactController',
            'home' => $homeRepository->findOneBy(["isActive"=>true]),
            // On envoie le formulaire de contact à la vue
            'form' => $form->createView()
        ]);
    }
}
