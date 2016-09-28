<?php

/* /Users/pooh/Github/foodcapitals/themes/foodcapitals/layouts/fallback.htm */
class __TwigTemplate_65ca5fc2bf74dcc0bbf7887eff569ee9aa8268b6012258c36a0b4ad9b331849f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/pooh/Github/foodcapitals/themes/foodcapitals/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/
