<?php

/* /var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_616786a05525ade548fb87d0ca0c3f9c2a0588a75f6e47124f3981a55479cc94 extends Twig_Template
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
        echo "<nav id=\"nav\" >
    <ul>
        <li><a href=\"/#about\" id='#about' class=\"navul\" rel=\"modal:close\" >About</a></li>
        <li><a href=\"/#projects\" id='#projects' class=\"navul\" rel=\"modal:close\" >Projects</a></li>
        <!-- <li><a href=\"/#CMS\" id='#CMS' class=\"navul\" rel=\"modal:close\" >DevOps</a></li> -->
        <li><a href=\"/#tools\" id='#tools' class=\"navul\" rel=\"modal:close\" >Tools</a></li> 
        <li><a href=\"/#portfolio\" id='#portfolio' class=\"navul\" rel=\"modal:close\" >Portfolio</a></li>
        <li><a href=\"/credentials\" id='#credentials' class=\"navul\" rel=\"modal:close\" >Credentials</a></li>
        
    </ul>
</nav>

<script language='Javascript'>

\$(\".navul\").click(function() {
    //console.log(this.id);
    \$('html, body').animate({
        scrollTop: \$(this.id).offset().top
    }, 2000);
});






</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"nav\" >
    <ul>
        <li><a href=\"/#about\" id='#about' class=\"navul\" rel=\"modal:close\" >About</a></li>
        <li><a href=\"/#projects\" id='#projects' class=\"navul\" rel=\"modal:close\" >Projects</a></li>
        <!-- <li><a href=\"/#CMS\" id='#CMS' class=\"navul\" rel=\"modal:close\" >DevOps</a></li> -->
        <li><a href=\"/#tools\" id='#tools' class=\"navul\" rel=\"modal:close\" >Tools</a></li> 
        <li><a href=\"/#portfolio\" id='#portfolio' class=\"navul\" rel=\"modal:close\" >Portfolio</a></li>
        <li><a href=\"/credentials\" id='#credentials' class=\"navul\" rel=\"modal:close\" >Credentials</a></li>
        
    </ul>
</nav>

<script language='Javascript'>

\$(\".navul\").click(function() {
    //console.log(this.id);
    \$('html, body').animate({
        scrollTop: \$(this.id).offset().top
    }, 2000);
});






</script>", "/var/www/html/october/flexui/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
