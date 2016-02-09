<?php
/**
 * Created by PhpStorm.
 * User: Arkadiusz
 * Date: 09.02.2016
 * Time: 21:30
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('email', EmailType::class, array(
                'required'=> true,))
            ->add('telephone', TextType::class)

            ->add('save', SubmitType::class, array(
                'label' => 'Book Now',
                'attr' => array(
                    'class' => 'btn-secondary btn-lg')))

            ->add('public', CheckboxType::class, array(
                'label'    => 'Show this entry publicly?',
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client',
        ));
    }
}