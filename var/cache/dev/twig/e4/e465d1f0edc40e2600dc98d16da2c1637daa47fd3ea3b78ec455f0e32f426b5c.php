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

/* about/about.html.twig */
class __TwigTemplate_96472594c34b7e33b5dcfeeabd627d4a6f5c472fa66adc6bb041c44d7a846853 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
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

        echo " Qui?";
        
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
        echo "<!-- navBar -->
  
";
        // line 8
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "

<div>
\t<div class=\"col-12 text-center m-0 p-0  \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Qui nous sommes?</h1>
\t</div>

\t<div class=\"container  mt-5 \";>
        <div id=\"about_card\" class=\"card card bg-light\" style=\"max-width: 1200px;\";>
          <div class=\"row \">
            <div class=\"col-md-5\">
                <div class=\"about_image\">  
\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/about-us.jpg"), "html", null, true);
        echo "\" alt=\"photo\" width=\"105%\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-7 px-3 \">
              <div class=\"card-block px-6\">
\t\t\t  \t\t<h4 class=\"text-right mt-5 \">Qui nous sommes?</h4>
                \t<p class=\"card-text text-justify mt-5 mb-5\">
\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
\t\t\t\t\tstandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
\t\t\t\t\tIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
\t\t\t\t\tpopularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
\t\t\t\t\tsoftware like Aldus PageMaker including versions of Lorem Ipsum.
\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
\t\t\t\t\tstandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
\t\t\t\t\tIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
\t\t\t\t\tpopularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
\t\t\t\t\tsoftware like Aldus PageMaker including versions of Lorem Ipsum.
                \t</p>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Qui?{% endblock %}

{% block body %}
<!-- navBar -->
  
{{ include ('nav.html.twig') }}

<div>
\t<div class=\"col-12 text-center m-0 p-0  \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Qui nous sommes?</h1>
\t</div>

\t<div class=\"container  mt-5 \";>
        <div id=\"about_card\" class=\"card card bg-light\" style=\"max-width: 1200px;\";>
          <div class=\"row \">
            <div class=\"col-md-5\">
                <div class=\"about_image\">  
\t\t\t\t\t<img src=\"{{ asset('./image/about-us.jpg') }}\" alt=\"photo\" width=\"105%\" > 
\t\t\t\t</div>         
            </div> 
\t\t\t\t
            <div class=\"col-md-7 px-3 \">
              <div class=\"card-block px-6\">
\t\t\t  \t\t<h4 class=\"text-right mt-5 \">Qui nous sommes?</h4>
                \t<p class=\"card-text text-justify mt-5 mb-5\">
\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
\t\t\t\t\tstandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
\t\t\t\t\tIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
\t\t\t\t\tpopularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
\t\t\t\t\tsoftware like Aldus PageMaker including versions of Lorem Ipsum.
\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
\t\t\t\t\tstandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
\t\t\t\t\tIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
\t\t\t\t\tpopularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
\t\t\t\t\tsoftware like Aldus PageMaker including versions of Lorem Ipsum.
                \t</p>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



{% endblock %}
", "about/about.html.twig", "C:\\wamp64\\www\\elles\\templates\\about\\about.html.twig");
    }
}
