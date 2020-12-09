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

/* article/show.html.twig */
class __TwigTemplate_b66a99dc6bcd0aa5b6db85a4b02b899a859f53a0884c021d74a82bec848d6af8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Articles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
               
<!-- navBar -->
  
    ";
        // line 10
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "

\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1 class=\"text-white\">Article</h1>
\t</div>
\t
\t<div class=\"container\";>
        <div id=\"about_card\" class=\"card card  p-4\" style=\"max-width: 1000px\">
\t\t\t<a href=\"javascript:history.go(-1)\" class=\"h2 m-1\" id=\"arrow_left\"></a>

      <div class=\"container\">

        <article class=\"row single-post  no-gutters\">   
            <div class=\"col-md-12\">
              <div class=\"image-wrapper float-left pr-3\">         \t\t\t\t\t
                  <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/articles/" . twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "uploads", [], "any", false, false, false, 25))), "html", null, true);
        echo "\" alt=\"photo\"  > 
              </div>
              <div class=\"single-post-content-wrapper  \">
\t\t\t  \t\t    <h1 >";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
                <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
              </div>
            </div>
        </article>
  </div>



</div> 
</div> 



";
    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  88 => 28,  82 => 25,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/show.html.twig", "C:\\wamp64\\www\\elles\\templates\\article\\show.html.twig");
    }
}
