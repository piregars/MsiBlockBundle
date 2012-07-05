<?php

namespace Msi\Bundle\BlockBundle\Block\Type;

use Msi\Bundle\BlockBundle\Block\BaseType;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class TemplateType extends BaseType
{
    protected $templateChoices;

    public function __construct(EngineInterface $templating, $templateChoices)
    {
        parent::__construct($templating);

        $this->templateChoices = $templateChoices;
    }

    public function render($block)
    {
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->templating->render($settings['template'], array('settings' => $settings));
    }

    public function buildForm($builder, $fields = array())
    {
        $fields = array(
            array('template', 'choice', array('choices' => $this->templateChoices)),
        );

        parent::buildForm($builder, $fields);
    }
}
