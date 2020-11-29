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

/* footer.html.twig */
class __TwigTemplate_dfef4251422f629ba1cc343525ef1ad3ea72a3f0cae89c9804b9b4e6b3f5354c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "
\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<footer class=\" pt-4 \" >

    <!-- Footer Links -->
    <div class=\"container text-center text-md-left\">
  
      <!-- Grid row -->
      <div class=\"row\">
  
        <!-- Grid column -->
        <div class=\"col-md-4 mx-auto\">
  
          <!-- Content -->
          <img class=\"mt-3 mb-4\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/logo white.svg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"70%\">
          <p class=\"text-white\">Envolez vous vers votre avenir...</p>
  
        </div>
  
  
        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto\">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Explorer</h5>
  
          <ul class=\"list-unstyled\">
            <li>
              <a href=\"#!\">FAQ
            </li>
            <li>
              <a href=\"#!\">Carrières</a>
            </li>
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class=\"clearfix w-100 d-md-none\">
  
        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto\">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Avec Nous</h5>
  
          <ul class=\"list-unstyled\">
            <li>
              <a href=\"#!\">Recruteurs</a>
            </li>
            <li>
              <a href=\"#!\">Entreprises </a>
            </li>
            <li>
              <a href=\"#!\">Partenariats </a>
            </li>
            <li>
              <a href=\"#!\">Presse</a>
            </li>
          </ul>
  
        </div>

        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto \">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Plan du site</h5>
  
          <ul class=\"list-unstyled \">
            <li>
              <a class=\"\" href=\"#!\">Mentions Légales</a>
            </li>
            <li>
              <a href=\"#!\">CGU</a>
            </li>
            <li>
              <a href=\"#!\">Politique de confidantialité</a>
            </li>
           
          </ul>
  
        </div>
        <!-- Grid column -->
       
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
  
    <!-- Call to action -->
    <ul class=\"list-unstyled list-inline text-center text-white py-2\">
      <li class=\"list-inline-item\">
        <h5 class=\"mb-1\">Inscrivez vous</h5>
      </li>
      <li class=\"list-inline-item\">
\t       \t\t\t<a href=\"\"  class=\"mt-3 mb-3 p-2 rounded text-dark\" style=\"text-decoration:none; background-color: #E8D525\" >Newsletters</a>
    </li>
    </ul>
    <!-- Call to action -->
  
    <hr>
  
    <!-- Social buttons -->
    <ul class=\"list-unstyled list-inline text-center\">
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/facebook.png"), "html", null, true);
        echo "\" alt=\"logo facebook\"></a>
       
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/instagram.png"), "html", null, true);
        echo "\" alt=\"logo instagram\"></a>
        
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/linkedin.png"), "html", null, true);
        echo "\" alt=\"logo linkedin\"></a>
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/twitter.png"), "html", null, true);
        echo "\" alt=\"logo twitter\"></a>

      </li>
      
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class=\" text-center py-3\">
        <p class=\"text-white\">";
        // line 132
        echo (isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 132, $this->source); })());
        echo "</p>
    </div>
    <!-- Copyright -->
    
  </footer>
  \t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 132,  204 => 123,  198 => 120,  191 => 116,  184 => 112,  85 => 16,  70 => 3,  60 => 2,  49 => 140,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

<footer class=\" pt-4 \" >

    <!-- Footer Links -->
    <div class=\"container text-center text-md-left\">
  
      <!-- Grid row -->
      <div class=\"row\">
  
        <!-- Grid column -->
        <div class=\"col-md-4 mx-auto\">
  
          <!-- Content -->
          <img class=\"mt-3 mb-4\" src=\"{{ asset('./image/logo white.svg') }}\" alt=\"logo\" width=\"70%\">
          <p class=\"text-white\">Envolez vous vers votre avenir...</p>
  
        </div>
  
  
        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto\">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Explorer</h5>
  
          <ul class=\"list-unstyled\">
            <li>
              <a href=\"#!\">FAQ
            </li>
            <li>
              <a href=\"#!\">Carrières</a>
            </li>
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class=\"clearfix w-100 d-md-none\">
  
        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto\">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Avec Nous</h5>
  
          <ul class=\"list-unstyled\">
            <li>
              <a href=\"#!\">Recruteurs</a>
            </li>
            <li>
              <a href=\"#!\">Entreprises </a>
            </li>
            <li>
              <a href=\"#!\">Partenariats </a>
            </li>
            <li>
              <a href=\"#!\">Presse</a>
            </li>
          </ul>
  
        </div>

        <!-- Grid column -->
        <div class=\"col-md-2 mx-auto \">
  
          <!-- Links -->
          <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 text-white\">Plan du site</h5>
  
          <ul class=\"list-unstyled \">
            <li>
              <a class=\"\" href=\"#!\">Mentions Légales</a>
            </li>
            <li>
              <a href=\"#!\">CGU</a>
            </li>
            <li>
              <a href=\"#!\">Politique de confidantialité</a>
            </li>
           
          </ul>
  
        </div>
        <!-- Grid column -->
       
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
  
    <!-- Call to action -->
    <ul class=\"list-unstyled list-inline text-center text-white py-2\">
      <li class=\"list-inline-item\">
        <h5 class=\"mb-1\">Inscrivez vous</h5>
      </li>
      <li class=\"list-inline-item\">
\t       \t\t\t<a href=\"\"  class=\"mt-3 mb-3 p-2 rounded text-dark\" style=\"text-decoration:none; background-color: #E8D525\" >Newsletters</a>
    </li>
    </ul>
    <!-- Call to action -->
  
    <hr>
  
    <!-- Social buttons -->
    <ul class=\"list-unstyled list-inline text-center\">
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"\"><img src=\"{{ asset('./image/facebook.png') }}\" alt=\"logo facebook\"></a>
       
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"{{ asset('./image/instagram.png') }}\" alt=\"logo instagram\"></a>
        
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"{{ asset('./image/linkedin.png') }}\" alt=\"logo linkedin\"></a>
      </li>
      <li class=\"list-inline-item\">
        <a class=\"mr-2\" href=\"#\"><img src=\"{{ asset('./image/twitter.png') }}\" alt=\"logo twitter\"></a>

      </li>
      
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class=\" text-center py-3\">
        <p class=\"text-white\">{{ copyright|raw }}</p>
    </div>
    <!-- Copyright -->
    
  </footer>
  \t\t

{% endblock %}

\t", "footer.html.twig", "C:\\wamp64\\www\\elles\\templates\\footer.html.twig");
    }
}
