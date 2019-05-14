<?php

/* /var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm */
class __TwigTemplate_a4928d0f638d98d769d4ae4e807f775207a3d2eeb1edd87df88723021741c226 extends Twig_Template
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
        if (($context["post"] ?? null)) {
            // line 2
            echo "<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", []), "html", null, true);
            echo "</h2>

";
            // line 4
            $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", []);
            // line 5
            echo "
<div class=\"content\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", []);
            echo "</div>

";
            // line 8
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", []), "count", [])) {
                // line 9
                echo "    <div class=\"featured-images text-center\">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", []));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 11
                    echo "            <p>
                <img
                    data-src=\"";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", []), "html", null, true);
                    echo "\"
                    src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                    echo "\"
                    alt=\"";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", []), "html", null, true);
                    echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    </div>
";
            }
            // line 21
            echo "
<p class=\"info\">
    Posted
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", []), "count", [])) {
                echo " in
        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 26
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
                    echo "</a>";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                        echo ", ";
                    }
                    // line 27
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "    ";
            }
            // line 29
            echo "    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", []), "M d, Y"), "html", null, true);
            echo "
</p>

";
        } else {
            // line 33
            echo "<h2>Post not found</h2>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  128 => 29,  125 => 28,  111 => 27,  102 => 26,  85 => 25,  81 => 24,  76 => 21,  72 => 19,  62 => 15,  58 => 14,  54 => 13,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if post %}
<h2>{{ post.title }}</h2>

{% set post = blogPost.post %}

<div class=\"content\">{{ post.content_html|raw }}</div>

{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

<p class=\"info\">
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p>

{% else %}
<h2>Post not found</h2>
{% endif %}", "/var/www/html/october/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm", "");
    }
}
