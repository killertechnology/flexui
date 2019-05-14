<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/cms.htm */
class __TwigTemplate_91168ec6880c8d8ed35d411eb7447b53c48dad89868ff95e91ce81b1d9870f5c extends Twig_Template
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
        echo "<span class=\"image main\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic04.jpg");
        echo "\" alt=\"\"></span>
<h2>CMS Platform Development</h2>
<p>A typical CMS installation will require an entire hosting environment to be configured. If high availability is required you may need to set up multiple servers in different regions.</p>
<p>An enterprise application architecture will almost always require this type of redundancy (seen below).<br><span class=\"image main\"><img src=\"/storage/app/media/projects/VPC-Diagram.gif\" alt=\"\"></span>

<h2>VPC Security</h2>
<p>Security is big part of your architecture that may require additional components like bastion hosts, a NAT gateway, or a WAF (firewall) to protect your server environment from malicious activity. If storing or transmitting sensitive PII data is required, further consideration is required to either offload the liability or provide a secured environment within your private cloud.</p>
<h2>Auto Scaling</h2>
<p>Cep risus aliquam gravida cep ut lacus amet. Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae ante vestibulum ante. Blandit. Ante accumsan nisi eu placerat gravida placerat adipiscing in risus fusce vitae ac mi accumsan nunc in accumsan tempor blandit aliquet aliquet lobortis. Ultricies blandit lobortis praesent turpis. Adipiscing accumsan adipiscing adipiscing ac lacinia cep. Orci blandit a iaculis adipiscing ac. Vivamus ornare laoreet odio vis praesent nunc lorem mi. Erat. Tempus sem faucibus ac id. Vis in blandit. Nascetur ultricies blandit ac. Arcu aliquam. Accumsan mi eget adipiscing nulla. Non vestibulum ac interdum condimentum semper commodo massa arcu.</p>
<ul class=\"actions\">
    <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/cms.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"image main\"><img src=\"{{'assets/images/pic04.jpg'|theme}}\" alt=\"\"></span>
<h2>CMS Platform Development</h2>
<p>A typical CMS installation will require an entire hosting environment to be configured. If high availability is required you may need to set up multiple servers in different regions.</p>
<p>An enterprise application architecture will almost always require this type of redundancy (seen below).<br><span class=\"image main\"><img src=\"/storage/app/media/projects/VPC-Diagram.gif\" alt=\"\"></span>

<h2>VPC Security</h2>
<p>Security is big part of your architecture that may require additional components like bastion hosts, a NAT gateway, or a WAF (firewall) to protect your server environment from malicious activity. If storing or transmitting sensitive PII data is required, further consideration is required to either offload the liability or provide a secured environment within your private cloud.</p>
<h2>Auto Scaling</h2>
<p>Cep risus aliquam gravida cep ut lacus amet. Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae ante vestibulum ante. Blandit. Ante accumsan nisi eu placerat gravida placerat adipiscing in risus fusce vitae ac mi accumsan nunc in accumsan tempor blandit aliquet aliquet lobortis. Ultricies blandit lobortis praesent turpis. Adipiscing accumsan adipiscing adipiscing ac lacinia cep. Orci blandit a iaculis adipiscing ac. Vivamus ornare laoreet odio vis praesent nunc lorem mi. Erat. Tempus sem faucibus ac id. Vis in blandit. Nascetur ultricies blandit ac. Arcu aliquam. Accumsan mi eget adipiscing nulla. Non vestibulum ac interdum condimentum semper commodo massa arcu.</p>
<ul class=\"actions\">
    <li><a href=\"{{ 'elements'|page }}\" class=\"button\">View Elements Page</a></li>
</ul>", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/cms.htm", "");
    }
}
