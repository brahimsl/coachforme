<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Quel nom souhaitez-vous donner à votre adresse ?',
                'attr' => [
                    'placeholder'=> 'Nommez votre adresse'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'=>'Prénom',
                'attr' => [
                    'placeholder'=> 'Entrez votre prénom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'=>'Nom',
                'attr' => [
                    'placeholder'=> 'Entrez votre nom'
                ]
            ])
            ->add('company', TextType::class, [
                'label'=>'Entreprise',
                'required' => false,
                'attr' => [
                    'placeholder'=> '(facultatif) Entrez le nom de votre entreprise'
                ]
            ])
            ->add('address', TextType::class, [
                'label'=>'Adresse',
                'attr' => [
                    'placeholder'=> '7, rue civiale ...'
                ]
            ])
            ->add('postal', TextType::class, [
                'label'=>'Code postal',
                'attr' => [
                    'placeholder'=> 'Entrez votre code postal'
                ]
            ])
            ->add('city', TextType::class, [
                'label'=>'Ville',
                'attr' => [
                    'placeholder'=> 'Entrez votre ville'
                ]
            ])
            ->add('country', CountryType::class, [
                'label'=>'Pays',
                'attr' => [
                    'placeholder'=> 'Entrez votre pays'
                ]
            ])
            ->add('phone', TelType::class, [
                'label'=>'Téléphone',
                'attr' => [
                    'placeholder'=> 'Téléphone'
                ]
            ])
            ->add('submit', SubmitType::class,[
            'label'=> 'Valider',
            'attr'=>[
                'class'=> 'btn-block btn-info'
            ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
