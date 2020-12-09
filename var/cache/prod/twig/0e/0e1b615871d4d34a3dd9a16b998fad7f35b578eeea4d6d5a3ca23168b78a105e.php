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

/* basePure.html.twig */
class __TwigTemplate_3964dd383b83ce1dfc64c920f1335ee8203a19d27b7e2ede45736fedf350d065 extends Template
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
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"author\" content=\"Viviane Janer\">

\t\t<title>
\t\t\telles -";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>


\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"> ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "\t\t</head>

    <body>
        \t
     ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
\t<footer>
\t\t<div class=\"container col-12\">
\t\t\t<div class=\"row mt-5 text-center mx-auto\">
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p>";
        // line 26
        echo ($context["copyright"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div> 
\t\t</div>
\t</footer>    
    
      
<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "basePure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  101 => 15,  95 => 10,  78 => 26,  71 => 21,  69 => 20,  63 => 16,  59 => 15,  53 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basePure.html.twig", "C:\\wamp64\\www\\elles\\templates\\basePure.html.twig");
    }
}
