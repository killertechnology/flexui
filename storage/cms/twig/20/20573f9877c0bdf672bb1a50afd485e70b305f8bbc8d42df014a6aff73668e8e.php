<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm */
class __TwigTemplate_7af7050163c2d0ab166799b9869c606753fc6b43d23bc62d63b219a3588d77db extends Twig_Template
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
<script>
    window.embeddedChatbotConfig = {
        chatbotId: \"ajJuvTQrsk958PF1zWn9n\",
        domain: \"www.chatbase.co\"
    }
</script>
<script
    src=\"https://www.chatbase.co/embed.min.js\"
    chatbotId=\"ajJuvTQrsk958PF1zWn9n\"
    domain=\"www.chatbase.co\"
    defer>
</script>

<script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.appear.js", 1 => "assets/js/jquery.scrollex.min.js", 2 => "assets/js/jquery.scrolly.min.js", 3 => "assets/js/skel.min.js", 4 => "assets/js/util.js", 5 => "assets/js/main.js"]);
        echo "\"></script>
<script language=\"javascript\">



var section1Scrolled = false;
var section2Scrolled = false;
var section3Scrolled = false;
var section4Scrolled = false;
var section5Scrolled = false;

function isScrolledIntoView(el,section) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    
    if ((section===1) && (isVisible) && (!(section1Scrolled))){        
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
       
        
        section1Scrolled = true;  
    }
    
    if ((section===2) && (isVisible) && (!(section2Scrolled))){
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        
        
        section2Scrolled = true;  
    }
    
    if ((section===3) && (isVisible) && (!(section3Scrolled))){
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section3Scrolled = true;  
         
        
        \$(document.body).css('background-image',\"#f3f3f3  url('/storage/app/media/icon-ntd-twitter.gif') no-repeat right top\");
    }
    
    if ((section===4) && (isVisible) && (!(section4Scrolled))){  
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section4Scrolled = true;  
        
    }
    if ((section===5) && (isVisible) && (!(section5Scrolled))){  
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section5Scrolled = true;  
    }
    return isVisible;
}

\$('#about').appear();
\$('#projects').appear();
\$('#CMS').appear();
\$('#tools').appear();
\$('#portfolio').appear();
\$(document.body).on('appear', '#about', function(e) {     isScrolledIntoView(this,1); });
\$(document.body).on('appear', '#projects', function(e) {    isScrolledIntoView(this,2); });
\$(document.body).on('appear', '#CMS', function(e) { isScrolledIntoView(this,3); });
\$(document.body).on('appear', '#tools', function(e) {    isScrolledIntoView(this,4);  });
\$(document.body).on('appear', '#portfolio', function(e) {    isScrolledIntoView(this,5);  });



      
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  41 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.load_octobercms_framework %}
{% framework extras %}
{% endif %}

<script>
    window.embeddedChatbotConfig = {
        chatbotId: \"ajJuvTQrsk958PF1zWn9n\",
        domain: \"www.chatbase.co\"
    }
</script>
<script
    src=\"https://www.chatbase.co/embed.min.js\"
    chatbotId=\"ajJuvTQrsk958PF1zWn9n\"
    domain=\"www.chatbase.co\"
    defer>
</script>

<script src=\"{{ ['assets/js/jquery.appear.js','assets/js/jquery.scrollex.min.js', 'assets/js/jquery.scrolly.min.js', 'assets/js/skel.min.js', 'assets/js/util.js', 'assets/js/main.js']|theme }}\"></script>
<script language=\"javascript\">



var section1Scrolled = false;
var section2Scrolled = false;
var section3Scrolled = false;
var section4Scrolled = false;
var section5Scrolled = false;

function isScrolledIntoView(el,section) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    
    if ((section===1) && (isVisible) && (!(section1Scrolled))){        
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
       
        
        section1Scrolled = true;  
    }
    
    if ((section===2) && (isVisible) && (!(section2Scrolled))){
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        
        
        section2Scrolled = true;  
    }
    
    if ((section===3) && (isVisible) && (!(section3Scrolled))){
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section3Scrolled = true;  
         
        
        \$(document.body).css('background-image',\"#f3f3f3  url('/storage/app/media/icon-ntd-twitter.gif') no-repeat right top\");
    }
    
    if ((section===4) && (isVisible) && (!(section4Scrolled))){  
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section4Scrolled = true;  
        
    }
    if ((section===5) && (isVisible) && (!(section5Scrolled))){  
        gtag('event', 'Section ' + section + ' viewed', {
          'event_category' : 'scrollView',
          'event_label' : 'sectionView'
        });
        section5Scrolled = true;  
    }
    return isVisible;
}

\$('#about').appear();
\$('#projects').appear();
\$('#CMS').appear();
\$('#tools').appear();
\$('#portfolio').appear();
\$(document.body).on('appear', '#about', function(e) {     isScrolledIntoView(this,1); });
\$(document.body).on('appear', '#projects', function(e) {    isScrolledIntoView(this,2); });
\$(document.body).on('appear', '#CMS', function(e) { isScrolledIntoView(this,3); });
\$(document.body).on('appear', '#tools', function(e) {    isScrolledIntoView(this,4);  });
\$(document.body).on('appear', '#portfolio', function(e) {    isScrolledIntoView(this,5);  });



      
</script>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm", "");
    }
}
