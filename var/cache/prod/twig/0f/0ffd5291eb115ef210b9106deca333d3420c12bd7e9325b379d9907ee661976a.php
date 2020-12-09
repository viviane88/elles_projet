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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_9cd8372301e6682737b1a99ca7c0e17dad918cf6911bb3147513dea2dc3e072c extends Template
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
        return "basePure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basePure.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Erreur-404
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">

\t<div class=\" mx-auto mt-3\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1>Une erreur s'est produite</h1>
\t\t</div>
\t\t<div class=\"col-12 text-center mt-2\">
\t\t\t<img class=\"\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/erreur404.svg"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t</div>\t
\t</div>

\t<div class=\" mx-auto mt-5\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h2>Erreur 404</h2>
\t\t\t<p>Une erreur est survenue lors du chargement de la page. Si le problème persiste, merci de contacter
                l'administrateur du site</p>
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><b><p class=\"h5\">Retour au site</p></b></a>
\t</div>

</div>
</div>




";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  68 => 14,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "C:\\wamp64\\www\\elles\\templates\\bundles\\TwigBundle\\Exception\\error404.html.twig");
    }
}
