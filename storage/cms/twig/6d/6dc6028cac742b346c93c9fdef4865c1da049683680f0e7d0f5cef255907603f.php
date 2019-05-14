<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm */
class __TwigTemplate_548d2799988337ec7d115f9ad3bb736ebff78cc5e654e31e6afe1bd893023867 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home Onepager</a></li>
        <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "blog")) {
            echo "active";
        }
        echo "\">Blog</a></li>
        <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "generic")) {
            echo "active";
        }
        echo "\">Generic</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "elements")) {
            echo "active";
        }
        echo "\">Elements</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("404");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "404")) {
            echo "active";
        }
        echo "\">Not Found</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  48 => 7,  40 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"{{ 'home'|page }}\">Home Onepager</a></li>
        <li><a href=\"{{ 'blog'|page }}\" class=\"{% if this.page.id == 'blog' %}active{% endif %}\">Blog</a></li>
        <li><a href=\"{{ 'generic'|page }}\" class=\"{% if this.page.id == 'generic' %}active{% endif %}\">Generic</a></li>
        <li><a href=\"{{ 'elements'|page }}\" class=\"{% if this.page.id == 'elements' %}active{% endif %}\">Elements</a></li>
        <li><a href=\"{{ '404'|page }}\" class=\"{% if this.page.id == '404' %}active{% endif %}\">Not Found</a></li>
    </ul>
</nav>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm", "");
    }
}
