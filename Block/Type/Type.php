<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

abstract class Type
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    public function buildForm($builder)
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array_merge(array(array('name', 'text', array())), $this->configureForm()),
        ));
    }

    abstract public function configureForm();

    public function getDefaultSettings()
    {
        return array();
    }
}
