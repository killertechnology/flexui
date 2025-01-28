<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_7afec7e91a4fb1216e2debae4b9b88b03ff3fb4e2208db7a3fc31bb2cd6ddd15 extends Twig_Template
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
<script language=\"javascript\">if (location.href.indexOf('https://flexui.com/')>-1){ location.href='https://kevinfessler.info'; }</script>
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</head>
<body>

    <div id=\"wrapper\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        
        ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        echo "        
       ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "    </div>
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 16,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  42 => 10,  38 => 9,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
<script language=\"javascript\">if (location.href.indexOf('https://flexui.com/')>-1){ location.href='https://kevinfessler.info'; }</script>
    {% partial \"html_base/meta_head\" %}
</head>
<body>

    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"home_page/navigation\" %}
        
        {% page %}
        
       {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
