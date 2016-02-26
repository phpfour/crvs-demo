<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', [
                'label' => 'Title / Idea / Topic',
                'attr' => ['placeholder' => 'The idea or topic associated with this task, e.g. Biography of Abdullah Ibn Masud (RA).']
            ])
            ->add('description', 'textarea', [
                'label'    => 'Task Details',
                'required' => false,
                'attr'     => [
                    'rows' => 6,
                    'placeholder' => 'Any specific instruction and/or direction that may need to be followed in carrying out this task'
                ]
            ])
            ->add('reference', 'textarea', [
                'label'    => 'Reference / Origin',
                'required' => false,
                'attr'     => [
                    'rows' => 6,
                    'placeholder' => 'Reference to the original source of the content'
                ]
            ])
            ->add('imageUrls', 'textarea', [
                'label' => 'Image URLs',
                'attr'  => [
                    'rows' => 12,
                    'placeholder' => 'Link to images shared through Google Drive and/or direct link'
                ]
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Task'
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_task';
    }
}
