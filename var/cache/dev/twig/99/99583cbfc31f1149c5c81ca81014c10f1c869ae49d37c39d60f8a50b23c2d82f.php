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

/* job/job.html.twig */
class __TwigTemplate_7e423a48faffa92834c966fd7e9189f85f61574eea0e37ae6592590ac4a713ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/job.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/job.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/job.html.twig", 1);
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


    <div class=\"col-12 text-center m-0 p-0 mb-4 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Nos Emplois</h1>
\t</div>
<!-- SearchBar -->


\t<div class=\"container mt-5 p-3 bg-light\" >
\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"form-row align-items-end \">
\t\t\t<div class=\"col\">
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "location", [], "any", false, false, false, 25), 'row');
        echo "
\t\t\t</div>

\t\t\t<div class=\"col-12 mt-4\">
\t\t\t\t<div class=\"form-group  mt-3 text-center\">
\t       \t\t<button  id=\"search_button\" type=\"submit\" class=\"\">Ok</button>
\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

\t</div>


 ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 41
            echo "<!-- Card Start -->

\t\t<div class=\"container py-3 p-5\">
        \t<div class=\"card \">
          \t\t<div class=\"row \">
            \t\t<div class=\"col-md-3 p-5 bg-success\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<img class=\"d-block\" width=\"100%\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/jobs/" . twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" alt=\"photo principale ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 48), "html", null, true);
            echo " \">
                  \t\t</div> 
            \t\t</div>
      
            \t<div class=\"col-md-9 px-3 bg-danger  \">
              \t\t<div class=\"card-block px-6 mt-5 ml-3\">
                \t\t<h4 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 54), "html", null, true);
            echo "</h4>
                \t\t<h5 class=\"card-title\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</h5>

                \t<div class=\"row align-items-center mt-3\"> 
                  \t\t<div class=\"col-md-4\">
                    \t\t";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "url", [], "any", false, false, false, 59), "html", null, true);
            echo "
                  \t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2\">
                    \t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", [], "any", false, false, false, 62), "html", null, true);
            echo "
                  \t\t</div>
                  \t<div class=\" float-right  \">
                     \t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"
                        class=\" p-3 rounded mt-5\" style=\"text-decoration:none; background-color: #E8D525\">Découvrir</a>
\t\t\t\t\t</div>
                </div> 
\t\t\t\t
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
        // line 83
        echo "
\t <div class=\"mt-5 text-center\">
\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_job");
        echo "\"
\t\tclass=\"mt-3 mb-3 p-3 h4\" id=\"button_outset\" >Toutes nos offres</a>
    </div> 

\t
";
        // line 91
        echo "\t<div class=\"container-fluid mt-5 text-center\">
\t\t<div class=\"row justify-content-center pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/arrowTop.png"), "html", null, true);
        echo "\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div> 

</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 93,  222 => 91,  214 => 85,  210 => 83,  186 => 65,  180 => 62,  174 => 59,  167 => 55,  163 => 54,  152 => 48,  143 => 41,  139 => 40,  131 => 35,  118 => 25,  112 => 22,  106 => 19,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Jobs{% endblock %}

{% block body %}
               
<!-- navBar -->
  
    {{ include ('nav.html.twig') }}


    <div class=\"col-12 text-center m-0 p-0 mb-4 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Nos Emplois</h1>
\t</div>
<!-- SearchBar -->


\t<div class=\"container mt-5 p-3 bg-light\" >
\t\t{{ form_start(form) }}
\t\t<div class=\"form-row align-items-end \">
\t\t\t<div class=\"col\">
\t\t\t\t{{ form_row(form.title) }}
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t{{ form_row(form.location) }}
\t\t\t</div>

\t\t\t<div class=\"col-12 mt-4\">
\t\t\t\t<div class=\"form-group  mt-3 text-center\">
\t       \t\t<button  id=\"search_button\" type=\"submit\" class=\"\">Ok</button>
\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t\t\t{{ form_end(form) }}

\t</div>


 {% for job in jobs %}
<!-- Card Start -->

\t\t<div class=\"container py-3 p-5\">
        \t<div class=\"card \">
          \t\t<div class=\"row \">
            \t\t<div class=\"col-md-3 p-5 bg-success\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<img class=\"d-block\" width=\"100%\" src=\"{{ asset('image/jobs/' ~ job.uploads) }}\" alt=\"photo principale {{ job.uploads }} \">
                  \t\t</div> 
            \t\t</div>
      
            \t<div class=\"col-md-9 px-3 bg-danger  \">
              \t\t<div class=\"card-block px-6 mt-5 ml-3\">
                \t\t<h4 class=\"card-title\">{{ job.company }}</h4>
                \t\t<h5 class=\"card-title\">{{ job.title }}</h5>

                \t<div class=\"row align-items-center mt-3\"> 
                  \t\t<div class=\"col-md-4\">
                    \t\t{{ job.url }}
                  \t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2\">
                    \t\t{{ job.location }}
                  \t\t</div>
                  \t<div class=\" float-right  \">
                     \t<a href=\"{{ path('job_show', {id: job.id}) }}\"
                        class=\" p-3 rounded mt-5\" style=\"text-decoration:none; background-color: #E8D525\">Découvrir</a>
\t\t\t\t\t</div>
                </div> 
\t\t\t\t
\t\t\t\t\t
\t\t\t</div>
\t\t\t
        </div>
\t\t 
            
</div>

</div>

</div>

{% endfor %}

\t <div class=\"mt-5 text-center\">
\t\t<a href=\"{{path('all_job')}}\"
\t\tclass=\"mt-3 mb-3 p-3 h4\" id=\"button_outset\" >Toutes nos offres</a>
    </div> 

\t
{# fleche retour top #}
\t<div class=\"container-fluid mt-5 text-center\">
\t\t<div class=\"row justify-content-center pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"{{ asset('./image/arrowTop.png') }}\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div> 

</div>
</div>



{% endblock %}", "job/job.html.twig", "C:\\wamp64\\www\\elles\\templates\\job\\job.html.twig");
    }
}
