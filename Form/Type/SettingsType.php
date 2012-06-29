<?php

namespace Msi\Bundle\BlockBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        foreach ($options['fields'] as $field) {
            $builder->add($field[0], $field[1], $field[2]);
        }
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'fields' => array(),
        );
    }

    public function getName()
    {
        return 'settings';
    }
}
