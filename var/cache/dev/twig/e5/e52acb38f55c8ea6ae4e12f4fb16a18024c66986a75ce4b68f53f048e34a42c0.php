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

/* profile/edit.html.twig */
class __TwigTemplate_10ad51a0f744f6144bdddab4a437d8fa488f72e2998fd524518610381df8b19f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "profile/edit.html.twig", 1);
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

        echo "Utilisateur- Vos infos
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
        $this->displayParentBlock("body", $context, $blocks);
        echo "
     \t
<div class=\"col-6 p-5\">
\t\t<h2>Modifier  vos informations</h2>
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" >
            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
            </svg> 
            </a>

\t\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"\">
\t\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row');
        echo "
       </div>

       <div class=\"\">
\t\t\t    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 32, $this->source); })()), "job", [], "any", false, false, false, 32), 'row', ["label" => "Votre job actuel"]);
        // line 34
        echo "
\t\t\t</div> 

       <div class=\"\">
\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row');
        echo "
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
\t
</div>
\t\t
\t</div>
</div> 

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  137 => 38,  131 => 34,  129 => 32,  122 => 28,  115 => 24,  108 => 20,  102 => 17,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Utilisateur- Vos infos
{% endblock %}

{% block body %}
{{parent()}}
     \t
<div class=\"col-6 p-5\">
\t\t<h2>Modifier  vos informations</h2>
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" >
            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-arrow-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
            </svg> 
            </a>

\t\t\t\t{{ form_start(formulaireInfo) }}

\t\t<div class=\"\">
\t\t\t    {{ form_row(formulaireInfo.name) }}
       </div>

       <div class=\"\">
\t\t\t    {{ form_row(formulaireInfo.firstname) }}
       </div> 

       <div class=\"\">
\t\t\t    {{ form_row(formulaireInfo.address) }}
       </div> 

       <div class=\"\">
\t\t\t{{ form_row(formulaireInfo.job, {
\t\t\t    label: 'Votre job actuel'
\t\t\t}) }}
\t\t\t</div> 

       <div class=\"\">
\t\t\t{{ form_row(formulaireInfo.description) }}
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t{{ form_end(formulaireInfo) }}
\t
</div>
\t\t
\t</div>
</div> 

    
{% endblock %}
", "profile/edit.html.twig", "C:\\wamp64\\www\\elles\\templates\\profile\\edit.html.twig");
    }
}
