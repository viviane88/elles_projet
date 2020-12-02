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
        ->add('title', TextType::class, [
            'required'=> false,
            'label'=>'Emploi',
            'attr' => [
                'placeholder' => 'Le job de vos rêves'
            ]

        ])            
        ->add('location', TextType::class, [
            'required'=> false,
            'label'=>'Ville',
            'attr' => [
                'placeholder' => 'Où?'
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
