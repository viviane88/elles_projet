<?php

namespace App\Form;

use App\Entity\SearchJob;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchJobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('company', TextType::class, [
            'required'=> false,
            'attr' => [
                'placeholder' => 'Le nom de l\'entreprise'
            ]

        ])            
        ->add('location', TextType::class, [
            'required'=> false,
            'attr' => [
                'placeholder' => 'adresse de l\'entreprise'
            ]
        ])
   
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchJob::class,
            'method' => 'get',
            'crsf_protection' => false

        ]);
    }

    // recuperer l'url sans tous les parametres
    public function getBlockPrefix()
    {
        return '';
    }

}
