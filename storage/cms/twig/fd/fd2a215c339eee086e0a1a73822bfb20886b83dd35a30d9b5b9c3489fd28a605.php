<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/fallback.htm */
class __TwigTemplate_a0dd7c5b9bdaf375323e670b1975a489eeb05928d0acce5ac5ffc4dfb7b17cc0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/fallback.htm", "");
    }
}
