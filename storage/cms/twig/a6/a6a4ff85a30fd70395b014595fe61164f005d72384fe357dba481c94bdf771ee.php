<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/home.htm */
class __TwigTemplate_c30ffe7c6ed9d7d70ed330a93b894f51f86a6593fa236ccdd202d67ab792df16 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_one"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "           
                ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_two"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "           
                ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_three"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "           
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_four"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "                
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_five"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
           
        </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  52 => 10,  48 => 9,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"main\" style='padding-top:45px;'>         
                
                {% partial \"home_page/section_one\" %}
           
                {% partial \"home_page/section_two\" %}
           
                {% partial \"home_page/section_three\" %}
           
                {% partial \"home_page/section_four\" %}
                
                {% partial \"home_page/section_five\" %} 
           
        </div>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/pages/home.htm", "");
    }
}
