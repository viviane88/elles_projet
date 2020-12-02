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
\t\t
\t\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"\">
\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row');
        echo "
       </div>

       <div class=\"\">
\t\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 27, $this->source); })()), "job", [], "any", false, false, false, 27), 'row', ["label" => "Votre job actuel"]);
        // line 29
        echo "
\t\t\t</div> 

       <div class=\"\">
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 38, $this->source); })()), 'form_end');
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
        return array (  140 => 38,  132 => 33,  126 => 29,  124 => 27,  117 => 23,  110 => 19,  103 => 15,  97 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t
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
