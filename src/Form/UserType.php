<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->remove('roles')
            ->remove('password')
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'label' => 'Mot de passe',
                'mapped' => false,
                'required' => false,
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe'],
                'help' => 'Le mot de passe doit contenir au moins 6 caractères.',
                ],
            )
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('pays', CountryType::class,['label' => 'Pays', 'preferred_choices' => ['FR']]) 
            ->add('tel', TelType::class, ['label' => 'Téléphone'])
            // faire une liste de janvier à decembre pour les mois
            ->add('dateDeNaissance', BirthdayType::class, ['label' => 'Date de naissance', 'format' => 'dd-MM-yyyy', 'years' => range(date('Y')-100, date('Y')-18), ])
            ->remove('isVerified')
            ->add('modifier', SubmitType::class, ['attr' => ['class' => 'btn btn-primary btn-sucess']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
