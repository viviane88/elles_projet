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

/* job/show.html.twig */
class __TwigTemplate_fcacb017b4acd7890317e2c5c050db54c36d8f7839ce12204bdbca74a31bc1a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
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

        echo " Jobs";
        
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
        echo "               
<!-- navBar -->
  
    ";
        // line 9
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "


\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Job</h1>
\t</div>
\t
\t<div class=\"container\">

 \t<div class=\"row mt-5 mx-auto \">
    \t
\t<div class=\"container\";>
        <div id=\"about_card\" class=\"card card  p-4\" style=\"max-width: 1000px\">
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" id=\"arrow_left\"></a>

          <div class=\"row \">

\t\t\t<div class=\"col-md-6 col-sm-10 ml-3 mt-2  \">
                <div class=\"\">  
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/jobs/" . twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 28, $this->source); })()), "uploads", [], "any", false, false, false, 28))), "html", null, true);
        echo "\" alt=\"photo\" width=\"80%\" class=\"ml-4\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-5 mb-3 ml-4 mr-4\">
              <div class=\"card-block\" id=\"\">
\t\t\t  \t\t<h4 class=\"h1 mt-5 col-sm-12  \">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "</h4>
\t\t\t\t\t<h4 class=\" mt-5 col-sm-12  \">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 35, $this->source); })()), "url", [], "any", false, false, false, 35), "html", null, true);
        echo "</h4>
\t\t\t\t\t<h5 class=\" mt-5 col-sm-12  \">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 36, $this->source); })()), "location", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5>

                \t<p class=\"card-text text-justify p-2  mr-3 col-sm-12\" >
\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "
                \t</p>
              </div>
            </div>
            
          </div>
        </div>
  </div>
</div>
</div>

</div>
\t</div> 
</div> 
</div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  132 => 36,  128 => 35,  124 => 34,  115 => 28,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jobs{% endblock %}

{% block body %}
               
<!-- navBar -->
  
    {{ include ('nav.html.twig') }}


\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Job</h1>
\t</div>
\t
\t<div class=\"container\">

 \t<div class=\"row mt-5 mx-auto \">
    \t
\t<div class=\"container\";>
        <div id=\"about_card\" class=\"card card  p-4\" style=\"max-width: 1000px\">
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" id=\"arrow_left\"></a>

          <div class=\"row \">

\t\t\t<div class=\"col-md-6 col-sm-10 ml-3 mt-2  \">
                <div class=\"\">  
\t\t\t\t\t<img src=\"{{ asset('image/jobs/' ~ jobs.uploads) }}\" alt=\"photo\" width=\"80%\" class=\"ml-4\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-5 mb-3 ml-4 mr-4\">
              <div class=\"card-block\" id=\"\">
\t\t\t  \t\t<h4 class=\"h1 mt-5 col-sm-12  \">{{ jobs.title }}</h4>
\t\t\t\t\t<h4 class=\" mt-5 col-sm-12  \">{{ jobs.url}}</h4>
\t\t\t\t\t<h5 class=\" mt-5 col-sm-12  \">{{ jobs.location }}</h5>

                \t<p class=\"card-text text-justify p-2  mr-3 col-sm-12\" >
\t\t\t\t\t\t{{ jobs.description }}
                \t</p>
              </div>
            </div>
            
          </div>
        </div>
  </div>
</div>
</div>

</div>
\t</div> 
</div> 
</div> 
{% endblock %}", "job/show.html.twig", "C:\\wamp64\\www\\elles\\templates\\job\\show.html.twig");
    }
}
