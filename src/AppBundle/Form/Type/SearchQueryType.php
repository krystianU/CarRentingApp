<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchQueryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pickupCity', TextType::class)
            ->add('returnCity', TextType::class)
            ->add('pickupDate', DateType::class)
            ->add('returnDate', DateType::class)
            ->add('pickupTime', TimeType::class)
            ->add('returnTime', TimeType::class)
            ->add('save', SubmitType::class, array(
                'label' => 'Szukaj',
                'attr' => array(
                    'class' => 'btn-secondary btn-lg'
                )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SearchQuery',
        ));
    }
}