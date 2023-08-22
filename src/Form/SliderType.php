<?php

namespace App\Form;

use App\Entity\Slider;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class SliderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->remove('imageName')
            ->remove('updatedAt')
            ->add('titre', TextType::class, ["required" => false])
            ->add('texte' , TextType::class, ["required" => false])
            ->add('rankNumber' , NumberType::class, ["required" => true, "label" => "Rang"])
            ->add('tag' , TextType::class, ["required" => true])
            ->add('isActive' , CheckboxType::class, ["required" => false, "label" => "Active", "attr" =>["class" => "form-check-input"], "row_attr" => ["class" => "form-switch"]])
            ->add('imageFile', VichImageType::class, [
                'required' => true,
                'label' => 'Image'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Slider::class,
        ]);
    }
}
