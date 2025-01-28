<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_0af6f8bba4ca66168aaa5174a1d4cc7a26ed51814f213f7bc67cdafc690e0e08 extends Twig_Template
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
        echo "<!-- Header
<video autoplay muted loop id=\"myVideo\">
<source src=\"/storage/app/media/sea-flow.mp4\" type=\"video/mp4\">
  <!-- <source src=\"https://fpdl.vimeocdn.com/vimeo-prod-skyfire-std-us/01/559/10/252799058/920543741.mp4?token=1559271064-0xb0687c58ae160783bb5fe5635f111818241c1616\" type=\"video/mp4\"> 
</video> -->
<div align=center>
    <br><br>
    <span class=\"logo\"><a href='/'><div><img src=\"/themes/zwiebl-zwiebl_stellar/assets/images/logo.svg\" alt=\"Logo\" /></div></a></span>
</div>
<header id=\"header\" class=\"alt\">
    <!-- <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1> -->
   
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header
<video autoplay muted loop id=\"myVideo\">
<source src=\"/storage/app/media/sea-flow.mp4\" type=\"video/mp4\">
  <!-- <source src=\"https://fpdl.vimeocdn.com/vimeo-prod-skyfire-std-us/01/559/10/252799058/920543741.mp4?token=1559271064-0xb0687c58ae160783bb5fe5635f111818241c1616\" type=\"video/mp4\"> 
</video> -->
<div align=center>
    <br><br>
    <span class=\"logo\"><a href='/'><div><img src=\"/themes/zwiebl-zwiebl_stellar/assets/images/logo.svg\" alt=\"Logo\" /></div></a></span>
</div>
<header id=\"header\" class=\"alt\">
    <!-- <h1>{{ this.page.title }}</h1> -->
   
</header>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
