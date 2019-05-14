<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm */
class __TwigTemplate_a1af6e8cbd0de38e3976e552bfd33ae97eb414a8448df529035e90d2930dcfd8 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "load_octobercms_framework", [])) {
            // line 2
            $_minify = System\Classes\CombineAssets::instance()->useMinify;
            if ($_minify) {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
            }
            else {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            }
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
            unset($_minify);
        }
        // line 4
        echo "


<script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.scrollex.min.js", 1 => "assets/js/jquery.scrolly.min.js", 2 => "assets/js/skel.min.js", 3 => "assets/js/util.js", 4 => "assets/js/main.js"]);
        echo "\"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139859730-1');
  
  
  

</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.load_octobercms_framework %}
{% framework extras %}
{% endif %}



<script src=\"{{ ['assets/js/jquery.scrollex.min.js', 'assets/js/jquery.scrolly.min.js', 'assets/js/skel.min.js', 'assets/js/util.js', 'assets/js/main.js']|theme }}\"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139859730-1');
  
  
  

</script>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm", "");
    }
}
