<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Msi\Bundle\BlockBundle\Block\BaseType;

class TextType extends BaseType
{
    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->templating->render('MsiBlockBundle:Block:block_text.html.twig', array('settings' => $settings));
    }

    public function configureForm()
    {
        return array(
            array('content_fr', 'textarea', array('attr' => array('class' => 'tinymce'))),
            array('content_en', 'textarea', array('attr' => array('class' => 'tinymce'))),
        );
    }
}
