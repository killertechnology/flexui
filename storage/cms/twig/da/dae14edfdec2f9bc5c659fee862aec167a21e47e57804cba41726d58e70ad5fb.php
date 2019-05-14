<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_88d37da8b11bd2b7d4595c7d1ca2be8847558b1b5625fc832016fd805c5a4d5b extends Twig_Template
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
        echo "<html>
<head>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body>
    <div id=\"wrapper\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "
           
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_one"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "           
                ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_two"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "           
                ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_three"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "           
                ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_four"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "                
                
           
        </div>
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "    </div>
    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 26,  89 => 25,  85 => 24,  79 => 20,  75 => 19,  72 => 18,  68 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  45 => 9,  40 => 8,  36 => 7,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% partial \"html_base/meta_head\" %}
</head>
<body>
    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"home_page/navigation\" %}
        <div id=\"main\">
            {% page %}

           
                {% partial \"home_page/section_one\" %}
           
                {% partial \"home_page/section_two\" %}
           
                {% partial \"home_page/section_three\" %}
           
                {% partial \"home_page/section_four\" %}
                
                
           
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
