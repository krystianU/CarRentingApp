<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchQueryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pickupCity', TextType::class)
            ->add('returnCity', TextType::class)
            ->add('pickupDateTime', DateTimeType::class, array(
                'years' => range(2016,2017),
                'error_bubbling' => true,
            ))
            ->add('returnDateTime', DateTimeType::class, array(
                'years' => range(2016,2017),
                'error_bubbling' => true,
            ))

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