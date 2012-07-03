<?php

namespace Msi\Bundle\BlockBundle\Block;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

abstract class BaseType
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    public function buildForm($builder, $fields = array())
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array_merge(array(array('name', 'text', array())), $fields),
        ));
    }

    public function getDefaultSettings()
    {
        return array();
    }
}
