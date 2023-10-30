<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email' , EmailType::class, ['label' => 'Email'])
            ->remove('roles')
            ->remove('password')
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'label' => 'Mot de passe',
                'mapped' => false,
                'required' => true,
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe'],
                'help' => 'Le mot de passe doit contenir au moins 6 caractères.',
                'attr' => ['autocomplete' => 'new-password', "class"=>"form-control rf-input-field rf-password-field rf-password-field--show-password"],
                "row_attr"=>["class"=>"rf-input-container"]
            ])
            ->add('nom', TextType::class, ['label' => 'Nom'])
            ->add('prenom', TextType::class, ['label' => 'Prénom'])
            ->add('adresse', TextType::class, ['label' => 'Adresse'])
            ->add('codePostal', NumberType::class, ['label' => 'Code postal'])
            ->add('ville', TextType::class, ['label' => 'Ville'])
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
