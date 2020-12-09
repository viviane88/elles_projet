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
class __TwigTemplate_c11089e90be3c07fd0a9a507a5cd689c7bcf2a0c5a36b4a4094adf1d13b26888 extends Template
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
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "
\t";
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<footer class=\" pt-4 \" >

    <!-- Footer Links -->
    <div class=\"container text-center text-md-left\">
  
      <!-- Grid row -->
      <div class=\"row\">
  
        <!-- Grid column -->
        <div class=\"col-md-4 \">
  
          <!-- Content -->
          <img class=\"mt-3\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/logo white.svg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"70%\">
          <p class=\"text-white text-center\">Envolez vous vers votre avenir...</p>
  
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
        <p class=\"text-white text-center\">";
        // line 132
        echo ($context["copyright"] ?? null);
        echo "</p>
    </div>
    <!-- Copyright -->
    
  </footer>
  \t\t

";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 132,  186 => 123,  180 => 120,  173 => 116,  166 => 112,  67 => 16,  52 => 3,  48 => 2,  43 => 140,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "C:\\wamp64\\www\\elles\\templates\\footer.html.twig");
    }
}
