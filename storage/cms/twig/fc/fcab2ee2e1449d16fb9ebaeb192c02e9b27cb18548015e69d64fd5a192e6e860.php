<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm */
class __TwigTemplate_fa681584519cd387d64c11f5cd7d17fa820bb17e7d60113a5e0209637a1c5208 extends Twig_Template
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
        echo "<section id=\"CMS\" class=\"main\">

    <header class=\"major\">
        
        <h2>
            Content Management
            <div style='font-weight:normal;font-size:10pt;letter-spacing: -0.015em;'>
                Proficient in installing and maintaining CMS architecture frameworks for web applications on both linux or Windows web servers. A typical CMS will require a dev, staging and production environment for safely promoting code and/or content changes to a public (production) website.
            </div>
        </h2>
        
    </header>
    <ul class=\"features\" style='text-align:left;'>
        <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/sitecore-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>Sitecore CMS
                    <div style='font-weight:normal;font-size:11pt;'>Certified Sitecore CMS architect with several years experience architecting web applications using SQL Server, MongoDb, ASP.NET, C#, HTML and Javascript.
                    </div>
                </div>
            </div>
        </li>
        
        <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/october-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>October CMS
                    <div style='font-weight:normal;font-size:11pt;'>October is a free CMS platform that offers a flexible architecture that is highly scalable and easy to manage across multiple environments.
                    </div>
                </div>
            </div>
        </li>
        
         <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/drupal-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>Drupal
                    <div style='font-weight:normal;font-size:11pt;'>Drupal is a free CMS platform that offers a flexible architecture that is highly scalable and easy to manage across multiple environments.
                    </div>
                </div>
            </div>
        </li>
        
        
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cms");
        echo "\" class=\"button\">Learn CMS More</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 48,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"CMS\" class=\"main\">

    <header class=\"major\">
        
        <h2>
            Content Management
            <div style='font-weight:normal;font-size:10pt;letter-spacing: -0.015em;'>
                Proficient in installing and maintaining CMS architecture frameworks for web applications on both linux or Windows web servers. A typical CMS will require a dev, staging and production environment for safely promoting code and/or content changes to a public (production) website.
            </div>
        </h2>
        
    </header>
    <ul class=\"features\" style='text-align:left;'>
        <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/sitecore-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>Sitecore CMS
                    <div style='font-weight:normal;font-size:11pt;'>Certified Sitecore CMS architect with several years experience architecting web applications using SQL Server, MongoDb, ASP.NET, C#, HTML and Javascript.
                    </div>
                </div>
            </div>
        </li>
        
        <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/october-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>October CMS
                    <div style='font-weight:normal;font-size:11pt;'>October is a free CMS platform that offers a flexible architecture that is highly scalable and easy to manage across multiple environments.
                    </div>
                </div>
            </div>
        </li>
        
         <li>
            <div style='text-align:left;'>
                <span class=\"cmsimage\"><img src='/storage/app/media/projects/drupal-logo.png'></span>
                <div style='font-weight:bold;font-size:14pt;'>Drupal
                    <div style='font-weight:normal;font-size:11pt;'>Drupal is a free CMS platform that offers a flexible architecture that is highly scalable and easy to manage across multiple environments.
                    </div>
                </div>
            </div>
        </li>
        
        
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'cms'|page}}\" class=\"button\">Learn CMS More</a></li>
        </ul>
    </footer>
</section>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm", "");
    }
}
