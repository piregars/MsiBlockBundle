<?php

namespace Msi\Bundle\BlockBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach ($options['fields'] as $field) {
            $builder->add($field[0], $field[1], $field[2]);
        }
    }

    public function getName()
    {
        return 'msi_block_settings';
    }
}
