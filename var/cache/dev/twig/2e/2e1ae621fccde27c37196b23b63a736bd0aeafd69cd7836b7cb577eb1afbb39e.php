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
        echo "\t<nav class=\"fill\"  >
\t<div class=\"container col-md-12\">

\t\t<ul>
\t\t  <li class=\"col-12 col-md-1\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">Nos Articles</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job");
        echo "\">Nos Jobs</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a></li>
\t\t  <li class=\"col-12 col-md-1\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Nous</a></li>
\t\t  

";
        // line 24
        echo "
      ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <li class=\"col-12 col-md-2\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("space");
            echo "\"><b>Mon espace</b></a></li>
      ";
        } else {
            // line 28
            echo "      <li class=\"col-12 col-md-2\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
      ";
        }
        // line 29
        echo " 
\t\t</ul>
  \t</nav>
</div>
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
        return array (  125 => 29,  119 => 28,  113 => 26,  111 => 25,  108 => 24,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  80 => 12,  71 => 7,  66 => 4,  63 => 2,  44 => 1,);
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
\t<div class=\"container col-md-12\">

\t\t<ul>
\t\t  <li class=\"col-12 col-md-1\"><a href=\"{{ path('home') }}\">Accueil</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"{{ path('article') }}\">Nos Articles</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"{{ path('job') }}\">Nos Jobs</a></li>
\t\t  <li class=\"col-12 col-md-2\"><a href=\"{{ path('contact') }}\">Nous contacter</a></li>
\t\t  <li class=\"col-12 col-md-1\"><a href=\"{{ path('about') }}\">Nous</a></li>
\t\t  

{# inscription ou espace de l'utilisateur #}

      {% if app.user %}
        <li class=\"col-12 col-md-2\"><a href=\"{{ path('space') }}\"><b>Mon espace</b></a></li>
      {% else %}
      <li class=\"col-12 col-md-2\"><a href=\"{{ path('app_login') }}\">Connexion</a></li>
      {% endif %} 
\t\t</ul>
  \t</nav>
</div>
{% endblock %}
", "nav.html.twig", "C:\\wamp64\\www\\elles\\templates\\nav.html.twig");
    }
}
