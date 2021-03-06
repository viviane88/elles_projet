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

/* Administrateur/jobAdminForm.html.twig */
class __TwigTemplate_3985d39ff13a6a50c9f13fdc70772342682aab0129db02560c1a06146382824f extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/jobAdminForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/jobAdminForm.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "Administrateur/jobAdminForm.html.twig", 1);
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

        echo "Administrateur- Création Formulaire Jobs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    \t";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"col-6 p-5\">
\t\t<h2>Création d'un nouvel emploi</h2>
        <p>Merci de remplir le formulaire</p>\t

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t <div class=\"\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 16, $this->source); })()), "Title", [], "any", false, false, false, 16), 'row');
        echo "
       </div>

       <div class=\"\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 20, $this->source); })()), "Company", [], "any", false, false, false, 20), 'row');
        echo "
       </div> 

       <div class=\"\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 24, $this->source); })()), "location", [], "any", false, false, false, 24), 'row');
        echo "
       </div>

\t   <div class=\"\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'row');
        echo "
       </div> 

       <div class=\"\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), 'row');
        echo "
        </div>

\t\t<div class=\"\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), 'row');
        echo "
        </div>
\t\t
\t\t<div class=\"\">
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 40, $this->source); })()), "updated_at", [], "any", false, false, false, 40), 'row');
        echo "
        </div>
\t\t
\t\t<div class=\"\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 44, $this->source); })()), "uploads", [], "any", false, false, false, 44), 'row');
        echo "
        </div>

       
        <button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireJobs"]) || array_key_exists("formulaireJobs", $context) ? $context["formulaireJobs"] : (function () { throw new RuntimeError('Variable "formulaireJobs" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Administrateur/jobAdminForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  155 => 44,  148 => 40,  141 => 36,  134 => 32,  127 => 28,  120 => 24,  113 => 20,  106 => 16,  101 => 14,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Administrateur- Création Formulaire Jobs
{% endblock %}

{% block body %}

    \t{{ parent() }}

\t<div class=\"col-6 p-5\">
\t\t<h2>Création d'un nouvel emploi</h2>
        <p>Merci de remplir le formulaire</p>\t

        {{ form_start(formulaireJobs)}}
\t\t <div class=\"\">
            {{ form_row(formulaireJobs.Title) }}
       </div>

       <div class=\"\">
            {{ form_row(formulaireJobs.Company) }}
       </div> 

       <div class=\"\">
            {{ form_row(formulaireJobs.location) }}
       </div>

\t   <div class=\"\">
            {{ form_row(formulaireJobs.description) }}
       </div> 

       <div class=\"\">
        {{ form_row(formulaireJobs.url) }}
        </div>

\t\t<div class=\"\">
        {{ form_row(formulaireJobs.createdAt) }}
        </div>
\t\t
\t\t<div class=\"\">
        {{ form_row(formulaireJobs.updated_at) }}
        </div>
\t\t
\t\t<div class=\"\">
        {{ form_row(formulaireJobs.uploads) }}
        </div>

       
        <button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t{{ form_end(formulaireJobs)}}

    </div>

{% endblock %}
", "Administrateur/jobAdminForm.html.twig", "C:\\wamp64\\www\\elles\\templates\\Administrateur\\jobAdminForm.html.twig");
    }
}
