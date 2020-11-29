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

/* article/show.html.twig */
class __TwigTemplate_31e10800461f4e39fcc345abfb745fce3ed0e4974462f73ffe06325912c27a0b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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

        echo " Articles";
        
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
        // line 10
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "

\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Article</h1>
\t</div>
\t
\t<div class=\"container\";>
        <div id=\"about_card\" class=\"card card  p-4\" style=\"max-width: 1000px\">
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" id=\"arrow_left\"></a>

          <div class=\"row \">

\t\t\t<div class=\"col-md-6 col-sm-10 ml-3 mt-2  \">
                <div class=\"\">  
\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/articles/" . twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()), "uploads", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" alt=\"photo\" width=\"100%\" class=\"ml-4\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-5 mb-3 ml-4 mr-4\">
              <div class=\"card-block\" id=\"text_article\">
\t\t\t  \t\t<h4 class=\"h1 mt-5 col-sm-12  \">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "</h4>
                \t<p class=\"card-text text-justify p-2  mr-3 col-sm-12\" >
\t\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "
                \t</p>
              </div>
            </div>
            
          </div>
        </div>
  </div>



</div> 
</div> 



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 30,  111 => 24,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Articles{% endblock %}

{% block body %}

               
<!-- navBar -->
  
    {{ include ('nav.html.twig') }}

\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Article</h1>
\t</div>
\t
\t<div class=\"container\";>
        <div id=\"about_card\" class=\"card card  p-4\" style=\"max-width: 1000px\">
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" id=\"arrow_left\"></a>

          <div class=\"row \">

\t\t\t<div class=\"col-md-6 col-sm-10 ml-3 mt-2  \">
                <div class=\"\">  
\t\t\t\t\t<img src=\"{{ asset('image/articles/' ~ articles.uploads) }}\" alt=\"photo\" width=\"100%\" class=\"ml-4\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-5 mb-3 ml-4 mr-4\">
              <div class=\"card-block\" id=\"text_article\">
\t\t\t  \t\t<h4 class=\"h1 mt-5 col-sm-12  \">{{ articles.title }}</h4>
                \t<p class=\"card-text text-justify p-2  mr-3 col-sm-12\" >
\t\t\t\t\t\t{{ articles.description }}
                \t</p>
              </div>
            </div>
            
          </div>
        </div>
  </div>



</div> 
</div> 



{% endblock %}
", "article/show.html.twig", "C:\\wamp64\\www\\elles\\templates\\article\\show.html.twig");
    }
}
