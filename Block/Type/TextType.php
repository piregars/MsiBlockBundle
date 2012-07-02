<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

class TextType extends Type
{
    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->templating->render('MsiBlockBundle:Block:block_text.html.twig', array('settings' => $settings));
    }

    public function configureForm()
    {
        return array(
            array('content_fr', 'textarea', array()),
            array('content_en', 'textarea', array()),
        );
    }
}
