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

/* Administrateur/jobAdmin.html.twig */
class __TwigTemplate_b49f66a87ef553ed7e87bf72b95bec790c7062e8e1b44c737a2bf62fb1a354b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/jobAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Administrateur/jobAdmin.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "Administrateur/jobAdmin.html.twig", 1);
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

        echo "Administrateur-Job";
        
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
\t\t<h2>Création d'un nouvel emploi</h2>

\t\t<div class=\"col-12 mt-5 p-0 m-0 \">
\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_create");
        echo "\" class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\" >Créer votre annonce</a>
\t\t</div>

\t\t<table class=\"table table-bordered table-hover table-sm text-center mt-5\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Titre du poste proposé</th>
\t\t\t\t\t<th scope=\"col\">Nom de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t<th scope=\"col\">Adresse de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Url de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t


\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 34
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "url", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>

                        <td><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/jobs/" . twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 41))), "html", null, true);
            echo "\" alt=\"photo principale ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 41), "html", null, true);
            echo "\"></td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_update", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewbox=\"0 0 16 16\" class=\"bi bi-pencil-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t</table>
        
\t</div>
\t
\t";
        // line 67
        echo "
\t<div class=\"container-fluid mt-5\">
\t\t<div class=\"row justify-content-center mb3 pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/arrowTop.png"), "html", null, true);
        echo "\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Administrateur/jobAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 70,  192 => 67,  186 => 62,  170 => 52,  160 => 45,  151 => 41,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  127 => 34,  123 => 33,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Administrateur-Job{% endblock %}

{% block body %}

\t{{ parent() }}
 
\t<div class=\"col-10 p-5 mt-3\">
\t\t<h2>Création d'un nouvel emploi</h2>

\t\t<div class=\"col-12 mt-5 p-0 m-0 \">
\t\t\t<a href=\"{{ path('job_create') }}\" class=\" p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\" >Créer votre annonce</a>
\t\t</div>

\t\t<table class=\"table table-bordered table-hover table-sm text-center mt-5\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Titre du poste proposé</th>
\t\t\t\t\t<th scope=\"col\">Nom de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t<th scope=\"col\">Adresse de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Url de l'entreprise</th>
\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t


\t\t\t\t{% for job in jobs %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ job.title }}</td>
\t\t\t\t\t\t<td>{{ job.company }}</td>
\t\t\t\t\t\t<td>{{ job.description }}</td>
\t\t\t\t\t\t<td>{{ job.location }}</td>
\t\t\t\t\t\t<td>{{ job.url }}</td>

                        <td><img src=\"{{ asset('image/jobs/' ~ job.uploads) }}\" alt=\"photo principale {{ job.uploads }}\"></td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('job_update', {'id':job.id}) }}\">
\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewbox=\"0 0 16 16\" class=\"bi bi-pencil-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"{{ path('job_delete', {'id':job.id}) }}\">
\t\t\t\t\t\t\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</tbody>
\t\t\t{% endfor %}
\t\t</table>
        
\t</div>
\t
\t{# fleche retour top #}

\t<div class=\"container-fluid mt-5\">
\t\t<div class=\"row justify-content-center mb3 pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"{{ asset('./image/arrowTop.png') }}\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div>

{% endblock %}
", "Administrateur/jobAdmin.html.twig", "C:\\wamp64\\www\\elles\\templates\\Administrateur\\jobAdmin.html.twig");
    }
}
