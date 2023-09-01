<?php

namespace App\Form;

use App\Entity\News;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isActive', CheckboxType::class, ["required"=>true, "label"=>"Active", "attr"=>["class"=>"form-check-input"], "row_attr"=>["class"=>"form-switch"]])
            ->add('titre' , TextType::class, ["required"=>true])
            ->add('description', CKEditorType::class, ["required"=>true, "label"=>"Description de la news"] )
            ->remove('createdAt', DateTime::class, ['widget' => 'single_text'])
            ->remove('updatedAt', DateTime::class, ['widget' => 'single_text'])
            ->remove('imageName')            
            ->add('imageFile', FileType::class, ["required"=>true, "label"=>"Image de la news"] )
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
