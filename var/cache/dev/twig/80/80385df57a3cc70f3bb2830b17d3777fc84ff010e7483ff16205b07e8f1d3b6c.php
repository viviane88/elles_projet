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

/* contact/contact.html.twig */
class __TwigTemplate_1e295c76724aafca73cb98c8153da4ae7095fb56f2ce53e5aadd300213b314a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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

        echo "Formulaire de contact";
        
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

<div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-12 text-center m-0 p-0 \">

\t\t\t\t<img class=\"contact_img\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/contact.jpg"), "html", null, true);
        echo "\" alt=\"photo background\" width=\"100%\" >
\t\t\t\t\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t\t\t\t\t<h1 class=\"text-white\" >Contactez nous</h1>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row mt-5\">
\t\t<div class=\"col-4 offset-4\">
\t\t\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 26, $this->source); })()), 'form_start');
        echo "

\t\t\t<div class=\"\">
\t\t\t    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'row');
        echo "
       </div>

       <div class=\"\">
\t\t\t    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 41, $this->source); })()), "objet", [], "any", false, false, false, 41), 'row', ["label" => "Mot de passe"]);
        // line 43
        echo "
\t\t\t</div> 

       <div class=\"\">
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 47, $this->source); })()), "message", [], "any", false, false, false, 47), 'row');
        echo "
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireContact"]) || array_key_exists("formulaireContact", $context) ? $context["formulaireContact"] : (function () { throw new RuntimeError('Variable "formulaireContact" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  151 => 47,  145 => 43,  143 => 41,  136 => 37,  129 => 33,  122 => 29,  116 => 26,  104 => 17,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulaire de contact{% endblock %}

{% block body %}

               
<!-- navBar -->
  
    {{ include ('nav.html.twig') }}

<div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-12 text-center m-0 p-0 \">

\t\t\t\t<img class=\"contact_img\" src=\"{{ asset('./image/contact.jpg') }}\" alt=\"photo background\" width=\"100%\" >
\t\t\t\t\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t\t\t\t\t<h1 class=\"text-white\" >Contactez nous</h1>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row mt-5\">
\t\t<div class=\"col-4 offset-4\">
\t\t\t\t{{ form_start(formulaireContact) }}

\t\t\t<div class=\"\">
\t\t\t    {{ form_row(formulaireContact.nom) }}
       </div>

       <div class=\"\">
\t\t\t    {{ form_row(formulaireContact.prenom) }}
       </div> 

       <div class=\"\">
\t\t\t    {{ form_row(formulaireContact.email) }}
       </div> 

       <div class=\"\">
\t\t\t{{ form_row(formulaireContact.objet, {
\t\t\t    label: 'Mot de passe'
\t\t\t}) }}
\t\t\t</div> 

       <div class=\"\">
\t\t\t{{ form_row(formulaireContact.message) }}
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t{{ form_end(formulaireContact) }}
\t\t</div>
\t</div>


</div>

{% endblock %}
", "contact/contact.html.twig", "C:\\wamp64\\www\\elles\\templates\\contact\\contact.html.twig");
    }
}
