<?php

namespace App\Form;

use App\Entity\Jobs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Title', TextType::class,[
            'required'=> true,
            'label' => 'Titre de l\'annonce',
            'attr' => [
                'placeholder' =>'Poste proposé'
            ]
        ])            
        ->add('Company', TextType::class, [
            'required'=> true,
            'label' => 'Entreprise',
            'attr' => [
                'placeholder' => 'Le nom de l\'entreprise'
            ]

        ])            
        ->add('location', TextType::class, [
            'required'=> true,
            'label' => 'Adresse',
            'attr' => [
                'placeholder' => 'adresse de l\'entreprise'
            ]

        ])            
        ->add('description', TextareaType::class, [
            'required'=> true,
            'label' => 'Description de l\'annonce',
            'attr' => [
                'placeholder' => 'décrire le poste proposé'
            ]

        ])
        ->add('url', UrlType::class, [
                'required'=> true,
                'attr' => [
                    'placeholder' => 'URL, de l\'entreprise'
                ]

            ])             
        ->add('createdAt', DateType::class, [
                'label' => 'Création de l\'annonce',
                'required'=> true,
                'attr' => [
                    'placeholder' => 'date de publication'
                ]

            ])
        ->add('updated_at', DateType::class, [
                'label' => 'Ecpiration de l\'annonce',
                'attr' => [
                    'placeholder' => 'date d\'expiration'
                ]

            ])
        /* ->add('uploads', FileType::class, [
                'mapped'=> false,
                'label' => 'logo 1',
                'attr' => [
                    'placeholder' => 'ex: logo.jpg'
                ]
            ])  */           
        ->add('Sauvegarder', SubmitType::class, [
                'label' => 'Valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Jobs::class,
        ]);
    }
}
