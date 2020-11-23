<?php

namespace App\Form;

use App\Entity\Profile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civility', ChoiceType::class,[
                'choices' => [
                    'Madame' => 1,
                    'Mademoiselle' => 2,
                ],
            ])

            ->add('name', TextType::class,[
                'required'=> true,
                'label' => 'nom',
                'attr' => [
                    'placeholder' =>'Votre Nom'
                ]
            ])
            ->add('lastname', TextType::class,[
                'required'=> true,
                'label' => 'prenom',
                'attr' => [
                    'placeholder' =>'Votre Prénom'
                ]
            ])
            ->add('address', TextType::class,[
                'required'=> true,
                'label' => 'adresse',
                'attr' => [
                    'placeholder' =>'Votre Adresse'
                ]
            ])
            ->add('city', TextType::class,[
                'required'=> true,
                'label' => 'ville',
                'attr' => [
                    'placeholder' =>'Ville'
                ]
            ])
            ->add('description', TextareaType::class,[
                'label' => 'description',
                'attr' => [
                    'placeholder' =>'Présentez vous en quelques lignes'
                ]
            ])
            ->add('user')

            ;
           
        
                
            }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }
}
