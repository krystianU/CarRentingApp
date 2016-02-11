<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'error_bubbling' => true,
                ))
            ->add('surname', TextType::class, array(
                'error_bubbling' => true,
                ))
            ->add('email', EmailType::class, array(
                'required'=> true,
                'error_bubbling' => true,
                ))
            ->add('phone_number', TextType::class, array(
                'error_bubbling' => true,
            ))
            ->add('terms_checkbox', CheckboxType::class, array(
                'label'    => 'Do you agree with our Terms?',
                'required' => false,
                'error_bubbling' => true,
            ))
            ->add('marketing_checkbox', CheckboxType::class, array(
                'label'    => 'Do you want to receive newsletter and information about promotions?',
                'required' => false,
                'error_bubbling' => true,
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Book Now',
                'attr' => array(
                    'class' => 'btn-secondary btn-lg')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client',
        ));
    }
}