<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_a280e957c020a0fc7bd8c13d03129d1cb707f3fe226f0b2f62e16f27af628f7d extends Twig_Template
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
        echo "<!-- Header -->
<div align=center>
    <br><br><span class=\"logo\"><a href='/'><div><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></div></a></span>
</div>
<header id=\"header\" class=\"alt\">
    
    
    
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1>
   
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
<div align=center>
    <br><br><span class=\"logo\"><a href='/'><div><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></div></a></span>
</div>
<header id=\"header\" class=\"alt\">
    
    
    
    <h1>{{ this.page.title }}</h1>
   
</header>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
