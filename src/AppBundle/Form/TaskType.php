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
        $textAreaAttr = ['cols' => 80, 'rows' => 5];

        $builder
            ->add('title', 'text', [
                'label' => 'Task Title'
            ])
            ->add('description', 'textarea', [
                'label'    => 'Task Details',
                'required' => false,
                'attr'     => $textAreaAttr
            ])
            ->add('reference', 'textarea', [
                'label'    => 'Reference / Origin',
                'required' => false,
                'attr'     => $textAreaAttr
            ])
            ->add('imageUrls', 'textarea', [
                'label' => 'Image URLs',
                'attr'  => $textAreaAttr
            ])
            ->add('contents', 'textarea', [
                'label'    => 'Contents',
                'required' => false,
                'attr'     => ['cols' => 80, 'rows' => 20, 'class' => 'input-lg']
            ]);
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
