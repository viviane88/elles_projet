<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('lastname', TextType::class,[
            'required'=> true,
            'label' => 'nom',
            'attr' => [
                'placeholder' =>'Votre Nom'
            ]
        ])
        ->add('name', TextType::class,[
            'required'=> true,
            'label' => 'prenom',
            'attr' => [
                'placeholder' =>'Votre Prénom'
            ]
        ])  
        ->add('email', EmailType::class,[
            'constraints' =>[
                new NotBlank([
                    'message' => 'Merci de saisir une adresse mail'
                ])
            ],
            'required' =>true,
            'attr' =>[
                'placeholder' => 'Votre Email'
            ]     
        ])
        ->add('Roles', ChoiceType::class, [
            'multiple' => false,
            'expanded' => false,
            'label' => false,
            'choices'  => [
                'Utilisateur' => 'ROLE_USER',
                'Annonceur' => 'ROLE_ADMIN',
                'Administrateur' => 'ROLE_SUPER_ADMIN',

            ],
        ])
     
        ->add('agreeTerms', CheckboxType::class, [
            'mapped' => false,
            'constraints' => [
                new IsTrue([
                    'message' => 'Vous devez accepter nos conditions générales d\'utilisation',
                ]),
            ],
            'label' => 'Merci d\'accepter les conditions générales d\'utilisation'
        ])
        ->add('plainPassword', PasswordType::class, [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'mapped' => false,
            'constraints' => [
                new NotBlank([
                    'message' => 'Votre mot de passe',
                ]),
                new PasswordStrength([
                    // longueur mini
                    'minLength' => 8,
                    'tooShortMessage' => 'Le mot de passe doit contenir au moins 8 caractères, 
                    lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial',
                    
                    // force mini
                    'minStrength' => 4,
                    'message' => 'Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial'
                ])
            ],
            'attr'=> [
                'placeholder' => 'Votre mot de passe'
            ],
            'label' => 'Mot de passe'
        ])
        
    ;
    // Data transformer
    $builder->get('Roles')
    ->addModelTransformer(new CallbackTransformer(
        function ($rolesArray) {
                // transform the array to a string
                return count($rolesArray)? $rolesArray[0]: null;
        },
        function ($rolesString) {
                // transform the string back to an array
                return [$rolesString];
        }
    ));

        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
