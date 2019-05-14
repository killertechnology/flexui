<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/404.htm */
class __TwigTemplate_da116187dae8a1b2955c4834bba97376cc8c35278ce46bb54ddb9009a44f801b extends Twig_Template
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
        echo "<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Back to Home</a></p>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"major\">
    <h2>Sorry, the requested page was not found.</h2>
    <p><a class=\"button\" href=\"{{'home'|page}}\">Back to Home</a></p>
</header>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/404.htm", "");
    }
}
