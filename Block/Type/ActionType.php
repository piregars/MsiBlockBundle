<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

class ActionType
{
    public function buildForm($builder)
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array(
                array('content', 'textarea', array()),
            ),
        ));
    }

    public function getDefaultSettings()
    {
        return array(
            'content' => 'Insert awful content here.',
        );
    }
}
