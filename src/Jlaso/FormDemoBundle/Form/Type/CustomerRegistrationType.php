<?php

namespace Jlaso\FormDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class CustomerRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.email',
                )
            ))
            ->add('name', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.name',
                )
            ))
            ->add('lastname', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.lastname',
                )
            ))
            ->add('phone', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.phone',
                )
            ))
            ->add('street', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.street',
                )
            ))
            ->add('country', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.country',
                )
            ))
            ->add('zip', null, array(
                'attr' => array(
                    'placeholder' => 'registration.placeholder.zip',
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jlaso\FormDemoBundle\Form\Model\Customer'
        ));
    }

    public function getName()
    {
        return 'customer_registration';
    }
}
