<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_b73d5feb2e52166616b78dd14746cd93f54814e0be8f29732f7280b02309072b extends Twig_Template
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
        <li><a href=\"#about\" id='#about' class=\"navul\" rel=\"modal:close\" >About</a></li>
        <li><a href=\"#projects\" id='#projects' class=\"navul\" rel=\"modal:close\" >Recent Projects</a></li>
        <li><a href=\"#CMS\" id='#CMS' class=\"navul\" rel=\"modal:close\" >DevOps</a></li>
        <li><a href=\"#tools\" id='#tools' class=\"navul\" rel=\"modal:close\" >Tools</a></li>
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
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"nav\" >
    <ul>
        <li><a href=\"#about\" id='#about' class=\"navul\" rel=\"modal:close\" >About</a></li>
        <li><a href=\"#projects\" id='#projects' class=\"navul\" rel=\"modal:close\" >Recent Projects</a></li>
        <li><a href=\"#CMS\" id='#CMS' class=\"navul\" rel=\"modal:close\" >DevOps</a></li>
        <li><a href=\"#tools\" id='#tools' class=\"navul\" rel=\"modal:close\" >Tools</a></li>
    </ul>
</nav>

<script language='Javascript'>

\$(\".navul\").click(function() {
    //console.log(this.id);
    \$('html, body').animate({
        scrollTop: \$(this.id).offset().top
    }, 2000);
});
</script>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
