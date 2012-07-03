<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Msi\Bundle\BlockBundle\Block\BaseType;

class TemplateType extends BaseType
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
