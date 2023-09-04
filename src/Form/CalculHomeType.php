<?php

namespace App\Form;

use App\Entity\CalculHome;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CalculHomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre' , TextType::class , ["required"=>true])
            ->add('description', CKEditorType::class, ["required"=>true])
            ->add('isActive' , CheckboxType::class , ["required"=>false, "label"=>"Active", "attr"=>["class"=>"form-check-input"], "row_attr"=>["class"=>"form-switch"]])
            ->add('imageBgName', TextType::class, ["required"=>true, "label"=>"Image de fond"] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CalculHome::class,
        ]);
    }
}
