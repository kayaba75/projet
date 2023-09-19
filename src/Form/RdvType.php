<?php

namespace App\Form;

use App\Entity\Rdv;
use App\Entity\RdvDispo;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\ChoiceList\Factory\Cache\ChoiceLabel;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RdvType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->remove('status')

            ->add('services', null, [
                'label' => 'Service :',
                'placeholder' => 'Choisir un service',
                'required' => true,
            ])
      
    

                     // si rdv_dispo.bookAvail = en attente alors on affiche le rdv_dispo.bookAvail
            ->add('rdvDispo' , null, [
                'label' => 'Rendez vous :',
                'placeholder' => 'Choisir un rendez vous',
                'required' => true,
                'choice_label' => function ($rdvDispo) {
                    // Vérifiez si le rendez-vous est en attente avant de l'afficher
                    if ($rdvDispo->getBookAvail() === 'En attente') {
                        return $rdvDispo;
                    } else {
                        // faire un return de $rdvDispo avec des balises <s>
                        return null;
                        
                        
                        
                    }
                },
            ])  
        

            ->add('commentaire' , TextType::class, [
                'attr' => [
                    'placeholder' => 'Ecrivez votre commentaire ici',
                ],
                'label' => 'Commentaire :',
                'required' => false,
            
            ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rdv::class,
                ]);
    }

}
