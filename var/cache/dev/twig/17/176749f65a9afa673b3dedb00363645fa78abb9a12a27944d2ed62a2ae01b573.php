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

/* profile/profile.html.twig */
class __TwigTemplate_3de675cfa5ffaa7492e8990c3d7da30f108b57eb51c8b7ffe3d7bac849c8dc2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "profile/profile.html.twig", 1);
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

        echo "Mes infos";
        
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
\t";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 
\t<div class=\"col-10 p-5 mt-3\">
\t\t<h2>Vos infos</h2>

\t\t
\t
\t\t<div class=\"col-12 mt-5 p-0 m-0 \">
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_create");
        echo "\" class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\" >Créer votre cv</a>
\t\t</div>


\t<div class=\" mt-5 p-0 m-0 \">

\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["profile"]);
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 22
            echo "\t\t\t\t\t<p><b>Nom:</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><b>Prénom:</b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><b>Adresse:</b> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "address", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><b>Votre dernier job:</b> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "job", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><b>Votre description :</b>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>

\t\t\t

<div class=\"row justify-content-between custom-line mt-5 p-0 m-0 col-8\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">
\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"col-4\">Modifier ses infos</a>
\t\t\t\t</button>
\t\t\t\t
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">
\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"class=\"col-4\">Supprimer ses infos</a>
\t\t\t\t</button>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        \t</div>
        \t</div>

\t</div>

\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 40,  148 => 36,  141 => 32,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  115 => 22,  111 => 21,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Mes infos{% endblock %}

{% block body %}

\t{{ parent() }}
 
\t<div class=\"col-10 p-5 mt-3\">
\t\t<h2>Vos infos</h2>

\t\t
\t
\t\t<div class=\"col-12 mt-5 p-0 m-0 \">
\t\t\t<a href=\"{{ path('profile_create') }}\" class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\" >Créer votre cv</a>
\t\t</div>


\t<div class=\" mt-5 p-0 m-0 \">

\t\t\t{% for profile in profile %}
\t\t\t\t\t<p><b>Nom:</b> {{ profile.name }}</p>
\t\t\t\t\t<p><b>Prénom:</b>{{ profile.firstname }}</p>
\t\t\t\t\t<p><b>Adresse:</b> {{ profile.address }}</p>
\t\t\t\t\t<p><b>Votre dernier job:</b> {{ profile.job }}</p>
\t\t\t\t\t<p><b>Votre description :</b>{{ profile.description }}</p>

\t\t\t

<div class=\"row justify-content-between custom-line mt-5 p-0 m-0 col-8\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">
\t\t\t\t\t<a href=\"{{ path('profile_edit', {'id':profile.id}) }}\" class=\"col-4\">Modifier ses infos</a>
\t\t\t\t</button>
\t\t\t\t
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\">
\t\t\t\t\t<a href=\"{{ path('profile_delete', {'id': profile.id}) }}\"class=\"col-4\">Supprimer ses infos</a>
\t\t\t\t</button>

\t\t\t{% endfor %}
        \t</div>
        \t</div>

\t</div>

\t

{% endblock %}
", "profile/profile.html.twig", "C:\\wamp64\\www\\elles\\templates\\profile\\profile.html.twig");
    }
}
