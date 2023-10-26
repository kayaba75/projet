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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isActive', CheckboxType::class, ["required"=>true, "label"=>"Active", "attr"=>["class"=>"form-check-input"], "row_attr"=>["class"=>"form-switch"]])
            ->add('titre' , TextType::class, ["required"=>true])
            // Remplacer par CKEditor
            ->add('description', CKEditorType::class, [
                "required" => true,
            ])
            // recuperer automatique et remplir createdAT avec la date du jour
            ->add('createdAt', DateType::class, ["required"=>false, "label"=>"Date de création", "widget"=>"single_text", "data"=>new \DateTime()]) 
            ->remove('updatedAt')
            ->remove('imageName', TextType::class, ["required"=>true, "label"=>"Nom de l'image"])            
            ->add('imageFile', VichImageType::class, ["required"=>true, "label"=>"Image de la news"] )
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
