<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_e1fe1b0c9490203d4156274742386a2c6dcd6c3597cf84d25818a02e323b45e4 extends Twig_Template
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
        echo "<section id=\"about\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
           <br>
           <header class=\"major\">
           <h2>About</h2>
            </header>
            <p><span class=\"image\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span><br>
            Strategic enterprise architect with an exceptional history of leading successful IT projects. Key player in organizational change. Strong background in cloud infrastructure based on principles in the AWS Well-Architected Framework. Experience migrating legacy operations to the latest cloud technologies. Excellent hands-on development skills. Over eighteen years of success in meeting critical software engineering challenges.<br><br> As a certified AWS Solutions Architect Associate I specialize in migrating organizations to the cloud by designing next generation software architecture that is scalable, fault tolerant and highly available.</p>
            <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"about\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
           <br>
           <header class=\"major\">
           <h2>About</h2>
            </header>
            <p><span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span><br>
            Strategic enterprise architect with an exceptional history of leading successful IT projects. Key player in organizational change. Strong background in cloud infrastructure based on principles in the AWS Well-Architected Framework. Experience migrating legacy operations to the latest cloud technologies. Excellent hands-on development skills. Over eighteen years of success in meeting critical software engineering challenges.<br><br> As a certified AWS Solutions Architect Associate I specialize in migrating organizations to the cloud by designing next generation software architecture that is scalable, fault tolerant and highly available.</p>
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        
    </div>
</section>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
