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
class __TwigTemplate_9058bb08f251ebce5609d88520aa7c919a37f805f0890938943e2fc6f7ababc8 extends Template
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
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) {
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
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  101 => 28,  95 => 26,  93 => 25,  90 => 24,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  62 => 12,  53 => 7,  48 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html.twig", "C:\\wamp64\\www\\elles\\templates\\nav.html.twig");
    }
}
