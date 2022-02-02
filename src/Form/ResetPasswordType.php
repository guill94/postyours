<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Le mot de passe et la confirmation doivent être identique',
            'label' => 'Mot de passe',
            'required' => true,
            'first_options' => [
                'label' => 'Nouveau mot de passe',
                'attr' => [
                    'placeholder' => 'Entrez votre mot de passe',
                ]
            ],
            'second_options' => [
                'label' => "Confirmez votre mot de passe",
                'attr' => [
                    'placeholder' => 'Confirmation du mot de passe'
                ]
                ]
        ])
        ->add ('submit', SubmitType::class, [
            'label' => 'Modifier',
            'attr' => [
                'class' => 'btn btn-primary btn-block'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
