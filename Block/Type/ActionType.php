<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class ActionType extends AbstractType
{
    protected $kernel;

    public function __construct(EngineInterface $templating, HttpKernelInterface $kernel)
    {
        parent::__construct($templating);

        $this->kernel = $kernel;
    }

    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->kernel->render($settings['action']);
    }

    public function configureForm()
    {
        return array(
            array('action', 'text', array()),
        );
    }
}
