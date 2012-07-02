<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

class TemplateType extends Type
{
    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->templating->render($settings['template'], array('settings' => $settings));
    }

    public function configureForm()
    {
        return array(
            array('template', 'text', array()),
        );
    }
}
