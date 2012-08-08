<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

use Msi\Bundle\BlockBundle\Block\BaseType;

class ActionType extends BaseType
{
    protected $kernel;
    protected $actions;

    public function __construct($nameChoices, $actions, HttpKernelInterface $kernel)
    {
        parent::__construct($nameChoices);

        $this->actions = $actions;
        $this->kernel = $kernel;
    }

    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->kernel->render($settings['action']);
    }

    public function buildForm($builder, $fields = array())
    {
        $fields = array(
            array('action', 'choice', array('choices' => $this->actions)),
        );

        parent::buildForm($builder, $fields);
    }
}
