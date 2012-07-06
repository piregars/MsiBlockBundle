<?php

namespace Msi\Bundle\BlockBundle\Block;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

abstract class BaseType
{
    protected $templating;
    protected $nameChoices;

    public function __construct(EngineInterface $templating, $nameChoices)
    {
        $this->templating = $templating;
        $this->nameChoices = $nameChoices;
    }

    public function buildForm($builder, $fields = array())
    {
        $builder->add('settings', 'msi_block_settings', array(
            'fields' => array_merge(array(array('name', 'choice', array('choices' => $this->nameChoices))), $fields),
        ));
    }

    public function getDefaultSettings()
    {
        return array();
    }
}
