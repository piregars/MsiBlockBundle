<?php

namespace Msi\Bundle\BlockBundle\Block;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

abstract class BaseType
{
    protected $templating;
    protected $names;

    public function __construct($names)
    {
        $this->names = $names;
    }

    public function buildForm($builder, $fields = array())
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array_merge(array(array('name', 'choice', array('label' => 'Position', 'choices' => $this->names))), $fields),
        ));
    }

    public function setTemplating(EngineInterface $templating)
    {
        $this->templating = $templating;

        return $this;
    }

    public function getDefaultSettings()
    {
    }
}
