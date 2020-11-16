<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
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
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
