<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PropertyAnalyticsFormType extends AbstractType
{
    /**
     * Build default form type for PropertyAnalytics
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     *
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options);
        $builder
            ->add('property_id')
            ->add('value')
        ;
    }

}