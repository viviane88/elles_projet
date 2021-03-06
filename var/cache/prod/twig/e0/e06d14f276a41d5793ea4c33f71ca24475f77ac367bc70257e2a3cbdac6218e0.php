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

/* baseAdmin.html.twig */
class __TwigTemplate_1eca4f1e54e7581fe320a9571cef2a17bf9b625bea80a6517e2a30e4642a9a1c extends Template
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
\t\t\telles -
\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"> 
\t\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "\t</head>
    <body>

\t";
        // line 20
        echo "\t<style>
\thtml {
  \tscroll-behavior: smooth;
\t}
\t</style>

   ";
        // line 27
        echo "\t<header id=\"animation_admin\">

\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => [0 => "success", 1 => "danger"]], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 30
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "\t\t\t\t<div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " p-3 fixed-top bg-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " text-white text-center\">
\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t<div class=\"row m-3\">
\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"style=\"text-decoration: none\"><img id=\"main_logo\" class=\"m-3\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"90%\" >
\t\t<p class=\"h3\"  >Envolez vous vers votre avenir...</p>
\t\t</a>
\t</div>

\t</header>


   ";
        // line 47
        echo "   
\t<div class=\"row m-0 p-0 mt-2\">
\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "\t\t</div>

\t<footer>
\t<div class=\"  p-2 mt-5 \" style=\" background-color: #39485E\">
        <p class=\"text-white text-center\" >";
        // line 142
        echo ($context["copyright"] ?? null);
        echo "</p>
    </div>
\t</footer>

      
<script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
       
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil - administrateur";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "
\t<div class=\"col-12  text-center\">
\t\t<h2>Bienvenue sur votre espace Administrateur</h2>
\t\t <h3>Bonjour <b>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "</b></h3> 

\t</div>
\t\t<div class=\"col-2 mt-5 py-3 aside\">

\t<ul>

\t\t<li>
\t\t<a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#top\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-house-door-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path d=\"M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z\"/>
  \t\t\t<path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>- Retour au site</a>
\t\t</li>

\t\t";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "
\t\t<div class=\"dropdown-divider\"></div>

\t\t<a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_admin");
            echo "\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-keyboard-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path fill-rule=\"evenodd\" d=\"M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75v-.5zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z\"/>
\t\t</svg>- Jobs</a>
\t\t</li>
\t\t<div class=\"dropdown-divider\"></div>
\t\t";
        }
        // line 79
        echo "

\t\t";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "
\t\t<li>
\t<a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_admin");
            echo "\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-receipt\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path fill-rule=\"evenodd\" d=\"M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z\"/>
  \t\t\t<path fill-rule=\"evenodd\" d=\"M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z\"/>
\t\t</svg>- Articles</a>
\t\t</li>


\t\t<div class=\"dropdown-divider\"></div>


\t\t<li>
\t<a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list_user");
            echo "\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-file-person-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path fill-rule=\"evenodd\" d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z\"/>
\t\t</svg>- Vos Utilisateurs</a>
\t\t</li>
\t\t";
        }
        // line 102
        echo "
\t\t<div class=\"dropdown-divider\"></div>

\t\t";
        // line 105
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 106
            echo "
\t\t<li>
\t <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\"> 
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-info-circle\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  \t\t\t<path d=\"M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z\"/>
  \t\t\t<circle cx=\"8\" cy=\"4.5\" r=\"1\"/>
\t\t</svg>- Mes Informations Personnelles</a>
\t\t</li>
\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t<li>
\t<a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-heart-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
 \t\t\t <path fill-rule=\"evenodd\" d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z\"/>
\t\t</svg>- Mes favoris</a>
\t\t</li>
\t\t
\t\t";
        }
        // line 125
        echo "\t\t
\t\t<div class=\"dropdown-divider\"></div>

\t\t<li>
\t<a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" id=\"#top\">
\t\t<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-person-x-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path fill-rule=\"evenodd\" d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z\"/>
\t\t</svg>Déconnexion</a>
\t\t</li>
\t</ul>
\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 129,  285 => 125,  275 => 118,  262 => 108,  258 => 106,  256 => 105,  251 => 102,  242 => 96,  227 => 84,  223 => 82,  221 => 81,  217 => 79,  207 => 72,  202 => 69,  200 => 68,  190 => 61,  179 => 53,  174 => 50,  170 => 49,  164 => 15,  157 => 11,  141 => 142,  135 => 138,  133 => 49,  129 => 47,  116 => 38,  112 => 36,  106 => 35,  97 => 32,  90 => 31,  85 => 30,  81 => 29,  77 => 27,  69 => 20,  64 => 16,  62 => 15,  58 => 14,  54 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseAdmin.html.twig", "C:\\wamp64\\www\\elles\\templates\\baseAdmin.html.twig");
    }
}
