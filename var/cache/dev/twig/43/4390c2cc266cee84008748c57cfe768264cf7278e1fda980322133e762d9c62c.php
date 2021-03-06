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

/* profile/profileForm.html.twig */
class __TwigTemplate_a2ef2c772f8cab5a9fa926425be082629eb64ed453a8b457fdcac8fd020947f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profileForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profileForm.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "profile/profileForm.html.twig", 1);
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
\t\t<h2>Création de vos informations</h2>
        <p>Merci de remplir le formulaire</p>
\t\t
\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

\t\t\t<div class=\"\">
\t\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        echo "
       </div>

       <div class=\"\">
\t\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 20, $this->source); })()), "firstname", [], "any", false, false, false, 20), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 24, $this->source); })()), "address", [], "any", false, false, false, 24), 'row');
        echo "
       </div> 

       <div class=\"\">
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 28, $this->source); })()), "job", [], "any", false, false, false, 28), 'row', ["label" => "Votre job actuel"]);
        // line 30
        echo "
\t\t\t</div> 

       <div class=\"\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row');
        echo "
\t\t\t</div>

\t\t<button  id=\"search_button\" type=\"submit\" class=\"mt-2\">Ok</button>
\t\t\t\t
\t\t\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireInfo"]) || array_key_exists("formulaireInfo", $context) ? $context["formulaireInfo"] : (function () { throw new RuntimeError('Variable "formulaireInfo" does not exist.', 39, $this->source); })()), 'form_end');
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
        return "profile/profileForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  133 => 34,  127 => 30,  125 => 28,  118 => 24,  111 => 20,  104 => 16,  98 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t<h2>Création de vos informations</h2>
        <p>Merci de remplir le formulaire</p>
\t\t
\t\t\t\t{{ form_start(formulaireInfo) }}

\t\t\t<div class=\"\">
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

", "profile/profileForm.html.twig", "C:\\wamp64\\www\\elles\\templates\\profile\\profileForm.html.twig");
    }
}
