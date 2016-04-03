<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BirthType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fatherNameEnglish', 'text', ['label' => "Father's Name", 'read_only' => true])
            ->add('motherNameEnglish', 'text', ['label' => "Mother's Name", 'read_only' => true])
            ->add('fatherNID', 'hidden')
            ->add('motherNID', 'hidden')
            ->add('birthDate', 'date', [
                'widget' => 'single_text',
                'data'   => new \DateTime(),
            ])
            ->add('weight', 'integer', [
                'attr' => ['style' => 'margin-top: 5px']
            ])
            ->add('bloodGroup', 'choice', [
                'choices' => [
                    'O-'  => 'O-',
                    'O+'  => 'O+',
                    'A-'  => 'A-',
                    'A+'  => 'A+',
                    'B-'  => 'B-',
                    'B+'  => 'B+',
                    'AB-' => 'AB-',
                    'AB+' => 'AB+'
                ]
            ])
            ->add('gender', 'choice', [
                'choices' => [
                    'M' => 'Male',
                    'F' => 'Female'
                ]
            ])
            ->add('hasAsthma');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Birth'
        ]);
    }
}
