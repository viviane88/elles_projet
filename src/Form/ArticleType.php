<?php

namespace App\Form;

use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType
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
        ->add('description', TextType::class, [
            'required'=> true,
            'label' => 'Description de l\'annonce',
            'attr' => [
                'placeholder' => 'décrire le poste proposé'
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
            'data_class' => Articles::class,
        ]);
    }
}
