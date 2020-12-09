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

/* baseHome.html.twig */
class __TwigTemplate_dca242652c1cbd865c73195f0603581de3ffec58f0e254e5ab25e85d92a99f7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"description\" content=\"site elles\">
  \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no\">\t\t
  \t\t<meta name=\"author\" content=\"Viviane Janer\">

\t\t<title>
\t\t\telles -";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>

\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"> 
    \t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\"> 
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animation.css"), "html", null, true);
        echo "\"> 
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\"


\t\t
\t\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "\t</head>

<body>
";
        // line 28
        echo "<style>
html {
  scroll-behavior: smooth;
}
</style>
<header></header>


        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
 ";
        // line 42
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

\t\t
<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
</body>
       
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue sur Elles";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "\t\t
\t\t
\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "baseHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  133 => 36,  127 => 23,  120 => 10,  112 => 47,  104 => 42,  101 => 41,  99 => 36,  89 => 28,  84 => 24,  82 => 23,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  53 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseHome.html.twig", "C:\\wamp64\\www\\elles\\templates\\baseHome.html.twig");
    }
}
