<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* history/index.html.twig */
class __TwigTemplate_2bd35acaef3bf364f75ceaaed917f02f4ed423a9ce5ef9cc3fda17f2ff848524 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "history/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HistoryController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class=\"mt-5 text-center\">Welcome,</h1>
<h1 class=\"text-center\">See the past Performances</h1>
<hr>
<wrapper class=\" justify-content-center row mt-5\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new RuntimeError('Variable "performances" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["performance"]) {
            // line 11
            echo "    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["performance"], "date", [], "any", false, false, false, 11), twig_date_converter($this->env))) {
                // line 12
                echo "        <div class=\"card\" style=\"width: 18rem; margin-bottom:20px; margin-left:20px;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Name of Artist: ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["performance"], "artist", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</h5>
                <p class=\"card-text\">Genre: ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["performance"], "artist", [], "any", false, false, false, 15), "genre", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
                <p class=\"card-text\">Date: ";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["performance"], "date", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
                echo "</p>
                <p class=\"card-title\">commencement: ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["performance"], "commencement", [], "any", false, false, false, 17), "h:i A"), "html", null, true);
                echo "</p>
                <p class=\"card-text\">hall: ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["performance"], "hall", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                <p class=\"card-text\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["performance"], "maxseats", [], "any", false, false, false, 19), "html", null, true);
                echo " Seats</p>
                <p class=\"card-text\">Price is: &euro; ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["performance"], "artist", [], "any", false, false, false, 20), "price", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
            </div>
        </div>
    ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['performance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</wrapper>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "history/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 25,  136 => 24,  129 => 20,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  101 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HistoryController!{% endblock %}

{% block body %}
<h1 class=\"mt-5 text-center\">Welcome,</h1>
<h1 class=\"text-center\">See the past Performances</h1>
<hr>
<wrapper class=\" justify-content-center row mt-5\">
{% for performance in performances %}
    {% if performance.date < date() %}
        <div class=\"card\" style=\"width: 18rem; margin-bottom:20px; margin-left:20px;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Name of Artist: {{ performance.artist.name }}</h5>
                <p class=\"card-text\">Genre: {{ performance.artist.genre }}</p>
                <p class=\"card-text\">Date: {{ performance.date|date('Y-m-d') }}</p>
                <p class=\"card-title\">commencement: {{ performance.commencement|date('h:i A') }}</p>
                <p class=\"card-text\">hall: {{ performance.hall }}</p>
                <p class=\"card-text\">{{ performance.maxseats }} Seats</p>
                <p class=\"card-text\">Price is: &euro; {{ performance.artist.price }}</p>
            </div>
        </div>
    {% endif %}
    {% endfor %}
</wrapper>
{% endblock %}
", "history/index.html.twig", "C:\\xampp\\htdocs\\symfony_form\\templates\\history\\index.html.twig");
    }
}
