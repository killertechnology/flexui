<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm */
class __TwigTemplate_dfd0a6872e68adfe3bbe03b91a469165893a5caed469f39ecd9e02b781257f20 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true), "meta_description", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true), "meta_description", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "description", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "description", []))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "keywords", []), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "website_author", []), "html", null, true);
        echo "\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "website_name", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true), "meta_title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true), "meta_title", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "website_url", []), "html", null, true);
        echo "\" />
    

    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "load_google_fonts", [])) {
            // line 12
            echo "    <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "google_font_family", []), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "load_fontawesome", [])) {
            // line 15
            echo "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    <!--[if lte IE 8]><script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/ie9.css"]);
        echo "\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/ie8.css"]);
        echo "\" /><![endif]-->
    <link rel=\"stylesheet\" href=\"/themes/zwiebl-zwiebl_stellar/assets/css/video-js.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/themes/zwiebl-zwiebl_stellar/assets/css/badge-style.css\" type=\"text/css\">


    <link href=\"/combine/c16f2d033fd4c8684987ec6ea843dfe6-1738014833\" rel=\"stylesheet\">
    ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 27
        echo "    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-WC72XT2B79\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css\" />



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WC72XT2B79');
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  87 => 26,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  46 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    

    {% if this.theme.load_google_fonts %}
    <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}
    {% if this.theme.load_fontawesome %}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% endif %}

    <!--[if lte IE 8]><script src=\"{{ 'assets/js/ie/html5shiv.js'|theme }}\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie9.css']|theme }}\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie8.css']|theme }}\" /><![endif]-->
    <link rel=\"stylesheet\" href=\"/themes/zwiebl-zwiebl_stellar/assets/css/video-js.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/themes/zwiebl-zwiebl_stellar/assets/css/badge-style.css\" type=\"text/css\">


    <link href=\"/combine/c16f2d033fd4c8684987ec6ea843dfe6-1738014833\" rel=\"stylesheet\">
    {% styles %}
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-WC72XT2B79\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css\" />



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WC72XT2B79');
</script>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm", "");
    }
}
