<?php

namespace App\Form;

use App\Entity\RdvDispo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RdvDispoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date :',
            ])
            ->remove ('day')
            ->add('starttime', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de début :',
                'error_bubbling' => true,
                'attr' => array('class' => 'time-picker'),
                'model_timezone' => 'Europe/Paris',
                            ])
            ->add('endtime' , TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de fin :',
                'error_bubbling' => true,
                'attr' => array('class' => 'time-picker'),
                'model_timezone' => 'Europe/Paris',
            ])
            ->add('bookAvail', ChoiceType::class, [
                'choices' => array(
                    'En attente' => "En attente",
                    'Confirmé' => "Confirmé",
                    'Annulé' => "Annulé"
                ),
                'label' => 'Disponible :',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RdvDispo::class, ]);
    }
}
