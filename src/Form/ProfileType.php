<?php

namespace App\Form;

use App\Entity\Profile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class,[
            'required'=> true,
            'label' => 'Nom',
            'attr' => [
                'placeholder' =>'Votre Nom'
            ]
        ])             
        ->add('firstname', TextType::class,[
            'required'=> true,
            'label' => 'Prénom',
            'attr' => [
                'placeholder' =>'Votre Prénom'
            ]
        ]) 
        ->add('address', TextType::class, [
            'required'=> false,
            'label' => 'Adresse',
            'attr' => [
                'placeholder' => 'Adresse de l\'entreprise'
            ]

        ])                
        ->add('job', TextType::class, [
            'required'=> false,
            'label' => 'Emploi Actuel',
            'attr' => [
                'placeholder' => 'Votre dernier emploi'
            ]

        ])              
            ->add('description', TextareaType::class, [
                'required'=> true,
                'label' => 'Une petite description',
                'attr' => [
                    'placeholder' => 'Quelques mots sur vous'
                ]
    
            ])        
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }
}
