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

/* animation.html.twig */
class __TwigTemplate_79352af4dcb3677b2d5cac1e4ed12ce625b57c70ebe2ef5d5cf62c57ec0519f6 extends Template
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
<section>
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/bg.jpg"), "html", null, true);
        echo "\" id=\"bg\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/notebook.png"), "html", null, true);
        echo "\" id=\"notebook\">
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/bottom.png"), "html", null, true);
        echo "\" id=\"bottom\">
    <h5 id=\"text\"> Envolez-vous vers votre avenir!</h5>
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/logo.png"), "html", null, true);
        echo "\" id=\"logo\">
    </section>

    <script>
    let bg = document.getElementById(\"bg\");
    let notebook = document.getElementById(\"notebook\");
    let bottom = document.getElementById(\"bottom\");
    let text = document.getElementById(\"text\");
    let logo = document.getElementById(\"logo\");

    window.addEventListener(\"scroll\", function(){

    var value = window.scrollY;

    bg.style.top = value * .5 + \"px\";
    notebook.style.left = -value * 0.5 + \"px\";
    bottom.style.top = -value * 0.5 + \"px\";
    text.style.top = value * 0.15 + \"px\";
    logo.style.top = value * 1 + \"px\";

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "animation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  60 => 8,  56 => 7,  52 => 6,  48 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "animation.html.twig", "C:\\wamp64\\www\\elles\\templates\\animation.html.twig");
    }
}
