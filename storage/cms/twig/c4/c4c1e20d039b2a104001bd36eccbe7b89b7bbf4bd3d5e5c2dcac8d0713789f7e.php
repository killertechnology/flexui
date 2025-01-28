<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/credentials.htm */
class __TwigTemplate_1147f6bcd372b4abb39071a6ca6feeb0e67fafa459455e3a3a89158c0b41e8bc extends Twig_Template
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
        echo "<div id=\"main\" style='padding-top:45px;'>         
                
                ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/credentials_one"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "           
        </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/credentials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"main\" style='padding-top:45px;'>         
                
                {% partial \"home_page/credentials_one\" %}
           
        </div>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/credentials.htm", "");
    }
}
