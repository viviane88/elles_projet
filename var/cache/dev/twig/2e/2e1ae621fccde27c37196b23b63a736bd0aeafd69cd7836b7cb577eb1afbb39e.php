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

/* nav.html.twig */
class __TwigTemplate_d2e83c886ced4eff08891e11d16cc727173d7816b102a8964d389bcb781ccfdc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
";
        // line 4
        echo "
   <div class=\"container-fluid\" id=\"top\" >
\t\t<div class=\"row\">
\t\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img id=\"main_logo\" class=\"m-3\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"75%\"></a>
\t\t</div>
\t</div>

";
        // line 12
        echo "
\t<nav class=\"fill\"  >
\t\t<ul>
\t\t  <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
\t\t  <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">Nos Articles</a></li>
\t\t  <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job");
        echo "\">Nos Jobs</a></li>
\t\t  <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a></li>
\t\t  <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Qui sommes-nous?</a></li>
\t\t  

";
        // line 23
        echo "
      ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("space");
            echo "\"><b>Mon espace</b></a></li>
      ";
        } else {
            // line 27
            echo "      <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter/S'inscrire</a></li>
      ";
        }
        // line 28
        echo " 
\t\t</ul>
  \t</nav>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  118 => 27,  112 => 25,  110 => 24,  107 => 23,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  80 => 12,  71 => 7,  66 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

{# logo #}

   <div class=\"container-fluid\" id=\"top\" >
\t\t<div class=\"row\">
\t\t\t<a href=\"{{ path('home') }}\"><img id=\"main_logo\" class=\"m-3\" src=\"{{ asset('./image/logo.svg') }}\" alt=\"logo\" width=\"75%\"></a>
\t\t</div>
\t</div>

{# navigation #}

\t<nav class=\"fill\"  >
\t\t<ul>
\t\t  <li><a href=\"{{ path('home') }}\">Accueil</a></li>
\t\t  <li><a href=\"{{ path('article') }}\">Nos Articles</a></li>
\t\t  <li><a href=\"{{ path('job') }}\">Nos Jobs</a></li>
\t\t  <li><a href=\"{{ path('contact') }}\">Nous contacter</a></li>
\t\t  <li><a href=\"{{ path('about') }}\">Qui sommes-nous?</a></li>
\t\t  

{# inscription ou espace de l'utilisateur #}

      {% if app.user %}
        <li><a href=\"{{ path('space') }}\"><b>Mon espace</b></a></li>
      {% else %}
      <li><a href=\"{{ path('app_login') }}\">Se connecter/S'inscrire</a></li>
      {% endif %} 
\t\t</ul>
  \t</nav>

{% endblock %}
", "nav.html.twig", "C:\\wamp64\\www\\elles\\templates\\nav.html.twig");
    }
}
