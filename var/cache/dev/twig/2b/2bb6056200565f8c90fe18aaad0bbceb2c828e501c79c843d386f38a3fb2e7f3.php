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

/* Administrateur/articleAdminForm.html.twig */
class __TwigTemplate_a37035b0bb5c34ef3c64f2c9e9362955520dce3eed83d660463d2b129b325f4c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/articleAdminForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/articleAdminForm.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "Administrateur/articleAdminForm.html.twig", 1);
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

        echo "Administrateur- Création Formulaire Articles
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
\t\t<h2>Création d'un nouvel article</h2>
        <p>Merci de remplir le formulaire</p>\t

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

        <div class=\"\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 17, $this->source); })()), "Title", [], "any", false, false, false, 17), 'row');
        echo "
       </div>

       <div class=\"\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'row');
        echo "
       </div> 

       <div class=\"\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), 'row');
        echo "
       </div> 

       <div class=\"\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 29, $this->source); })()), "updated_at", [], "any", false, false, false, 29), 'row', ["label" => "Mot de passe"]);
        // line 31
        echo "
        </div> 

       <div class=\"\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 35, $this->source); })()), "uploads", [], "any", false, false, false, 35), 'row');
        echo "
        </div>

       
        <button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
        
\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireArticles"]) || array_key_exists("formulaireArticles", $context) ? $context["formulaireArticles"] : (function () { throw new RuntimeError('Variable "formulaireArticles" does not exist.', 41, $this->source); })()), 'form_end');
        echo "

\t
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Administrateur/articleAdminForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 41,  136 => 35,  130 => 31,  128 => 29,  121 => 25,  114 => 21,  107 => 17,  101 => 14,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Administrateur- Création Formulaire Articles
{% endblock %}

{% block body %}

    \t{{ parent() }}

\t<div class=\"col-6 p-5\">
\t\t<h2>Création d'un nouvel article</h2>
        <p>Merci de remplir le formulaire</p>\t

        {{ form_start(formulaireArticles)}}

        <div class=\"\">
            {{ form_row(formulaireArticles.Title) }}
       </div>

       <div class=\"\">
            {{ form_row(formulaireArticles.description) }}
       </div> 

       <div class=\"\">
            {{ form_row(formulaireArticles.createdAt) }}
       </div> 

       <div class=\"\">
        {{ form_row(formulaireArticles.updated_at, {
            label: 'Mot de passe'
        }) }}
        </div> 

       <div class=\"\">
        {{ form_row(formulaireArticles.uploads) }}
        </div>

       
        <button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
        
\t\t{{ form_end(formulaireArticles)}}

\t
    </div>
</div>

{% endblock %}
", "Administrateur/articleAdminForm.html.twig", "C:\\wamp64\\www\\elles\\templates\\Administrateur\\articleAdminForm.html.twig");
    }
}
