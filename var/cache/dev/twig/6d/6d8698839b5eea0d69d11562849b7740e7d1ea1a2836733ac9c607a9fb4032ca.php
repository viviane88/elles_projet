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

/* job/allJob.html.twig */
class __TwigTemplate_08965f5824879ff2e48b27e5fd5e3988a85e1292c7f3f22376f4469fa2b58ebf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/allJob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/allJob.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/allJob.html.twig", 1);
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


    <div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Tous nos Emplois</h1>
        
\t</div>

\t<div class=\"mt-5 text-center p-3 col-8 mx-auto\">
\t\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job");
        echo "\"
\t\t\t\tclass=\"mt-3 mb-3 p-3 h4\" id=\"button_outset\" >Retour aux recherches</a>
            </div> 

\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allJob"]) || array_key_exists("allJob", $context) ? $context["allJob"] : (function () { throw new RuntimeError('Variable "allJob" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 23
            echo "<!-- Card Start -->

\t\t<div class=\"container py-3 p-5\">
        \t<div class=\"card \">
          \t\t<div class=\"row \">
            \t\t<div class=\"col-md-4 p-5\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<img class=\"d-block\" width=\"95%\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/jobs/" . twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" alt=\"photo principale ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 30), "html", null, true);
            echo " \">
                  \t\t</div> 
            \t\t</div>
      
            \t<div class=\"col-md-7 px-3\">
              \t\t<div class=\"card-block px-6 mt-5\">
                \t\t<h4 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 36), "html", null, true);
            echo "</h4>
                \t\t<h5 class=\"card-title\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</h5>

                \t<div class=\"row align-items-center mt-3\"> 
                  \t\t<div class=\"col-6\">
                    \t\t";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "url", [], "any", false, false, false, 41), "html", null, true);
            echo "
                  \t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
                    \t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", [], "any", false, false, false, 44), "html", null, true);
            echo "
                  \t\t</div>
                  \t
                \t</div> 
                <br>
\t\t\t\t<div class=\" float-right mt-2 \">
                     \t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"
                        class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\">Découvrir</a>
                </div> 
\t\t\t\t\t
\t\t\t</div>
\t\t\t
        </div>
\t\t 
            
</div>

</div>

</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t
<!-- pagination -->

<div class=\"text-center\">
    ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["allJob"]) || array_key_exists("allJob", $context) ? $context["allJob"] : (function () { throw new RuntimeError('Variable "allJob" does not exist.', 70, $this->source); })()));
        echo "
</div>

";
        // line 74
        echo "\t<div class=\"container-fluid mt-5\">
\t\t<div class=\"row justify-content-center mb3 pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/arrowTop.png"), "html", null, true);
        echo "\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div>
\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/allJob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 76,  196 => 74,  190 => 70,  184 => 66,  162 => 50,  153 => 44,  147 => 41,  140 => 37,  136 => 36,  125 => 30,  116 => 23,  112 => 22,  105 => 18,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jobs{% endblock %}

{% block body %}
               
<!-- navBar -->
  
    {{ include ('nav.html.twig') }}


    <div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Tous nos Emplois</h1>
        
\t</div>

\t<div class=\"mt-5 text-center p-3 col-8 mx-auto\">
\t\t\t\t<a href=\"{{path('job')}}\"
\t\t\t\tclass=\"mt-3 mb-3 p-3 h4\" id=\"button_outset\" >Retour aux recherches</a>
            </div> 

\t{% for job in allJob %}
<!-- Card Start -->

\t\t<div class=\"container py-3 p-5\">
        \t<div class=\"card \">
          \t\t<div class=\"row \">
            \t\t<div class=\"col-md-4 p-5\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<img class=\"d-block\" width=\"95%\" src=\"{{ asset('image/jobs/' ~ job.uploads) }}\" alt=\"photo principale {{ job.uploads }} \">
                  \t\t</div> 
            \t\t</div>
      
            \t<div class=\"col-md-7 px-3\">
              \t\t<div class=\"card-block px-6 mt-5\">
                \t\t<h4 class=\"card-title\">{{ job.company }}</h4>
                \t\t<h5 class=\"card-title\">{{ job.title }}</h5>

                \t<div class=\"row align-items-center mt-3\"> 
                  \t\t<div class=\"col-6\">
                    \t\t{{ job.url }}
                  \t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
                    \t\t{{ job.location }}
                  \t\t</div>
                  \t
                \t</div> 
                <br>
\t\t\t\t<div class=\" float-right mt-2 \">
                     \t<a href=\"{{ path('job_show', {id: job.id}) }}\"
                        class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\">Découvrir</a>
                </div> 
\t\t\t\t\t
\t\t\t</div>
\t\t\t
        </div>
\t\t 
            
</div>

</div>

</div>

{% endfor %}
\t
<!-- pagination -->

<div class=\"text-center\">
    {{ knp_pagination_render(allJob) }}
</div>

{# fleche retour top #}
\t<div class=\"container-fluid mt-5\">
\t\t<div class=\"row justify-content-center mb3 pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"{{ asset('./image/arrowTop.png') }}\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div>
\t

{% endblock %}", "job/allJob.html.twig", "C:\\wamp64\\www\\elles\\templates\\job\\allJob.html.twig");
    }
}
