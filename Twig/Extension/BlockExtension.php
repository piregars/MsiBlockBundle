<?php

namespace Msi\Bundle\BlockBundle\Twig\Extension;

class BlockExtension extends \Twig_Extension
{
    private $environment;

    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            'msi_block_render_block' => new \Twig_Function_Method($this, 'renderBlock', array('is_safe' => array('html'))),
        );
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    public function getName()
    {
        return 'msi_block';
    }

    public function renderBlock($name, $parent)
    {
        foreach ($parent->getBlocks() as $block) {
            if ($block->getSetting('name') === $name && $block->getEnabled()) {
                $type = $this->container->get($block->getType());

                return $type->render($block);
            }
        }
    }
}
