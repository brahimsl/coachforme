<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom',
                'constraints' => new Length([
                    'min'=> 2,
                    'max' => 30
                ]),
                
                'attr' => ['placeholder'=>'Saisissez votre nom']
            ])
            ->add('Prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => new Length([
                    'min'=> 2,
                    'max' => 30
                ]),
                
                'attr' => ['placeholder'=>'Saisissez votre prénom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'constraints' => new Length([
                    'min'=> 2,
                    'max' => 30
                ]),
                
                'attr' => ['placeholder'=>'Saisissez votre mail']
            ])
            ->add('password', RepeatedType::class, [
                'type'=> PasswordType::class,
                'invalid_message' => 'Le mot de passe et la confirmation doivent être identiques',
                'required'=>true,
                'first_options'=> ['label'=> 'Mot de passe'],
                'second_options'=>['label'=>'Merci de confirmer votre mot de passe'],
                'attr' => ['placeholder'=>'Saisissez votre mot de passe']
            ])
        

            ->add('submit', SubmitType::class, [
                'label' => "s'insrire"
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
