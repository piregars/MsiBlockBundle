<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

class TextType
{
    public function buildForm($builder)
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array(
                array('name', 'text', array()),
                array('content', 'textarea', array()),
            ),
        ));
    }

    public function getDefaultSettings()
    {
        return array(
            'name' => 'content_top',
            'content' => 'Insert awful content here.',
        );
    }
}
