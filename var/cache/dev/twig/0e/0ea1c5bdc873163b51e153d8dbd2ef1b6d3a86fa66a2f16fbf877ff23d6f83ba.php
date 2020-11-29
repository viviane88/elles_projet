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
class __TwigTemplate_66cb3e39e963c4add405080c26bcc74669b66e3f2023261e4df05f43020eaaaa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animation.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "animation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  78 => 8,  74 => 7,  70 => 6,  66 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

 {# animation #}
     
<section>
    <img src=\"{{ asset('./image/bg.jpg') }}\" id=\"bg\">
    <img src=\"{{ asset('./image/notebook.png') }}\" id=\"notebook\">
    <img src=\"{{ asset('./image/bottom.png') }}\" id=\"bottom\">
    <h5 id=\"text\"> Envolez-vous vers votre avenir!</h5>
    <img src=\"{{ asset('./image/logo.png') }}\" id=\"logo\">
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
{% endblock %}
", "animation.html.twig", "C:\\wamp64\\www\\elles\\templates\\animation.html.twig");
    }
}
