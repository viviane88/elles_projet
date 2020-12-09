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

/* home/index.html.twig */
class __TwigTemplate_17cd917120fb53507826b986a475a1f5ef4c5b5bf8e95cf2f012a3a74e509e44 extends Template
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
        return "baseHome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseHome.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<!-- animation -->
\t\t\t\t
    ";
        // line 10
        echo twig_include($this->env, $context, "animation.html.twig");
        echo "
    
                
<!-- navBar -->
  
    ";
        // line 15
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
 

<!-- Latest Jobs Card Start -->

\t<div class=\"col-12 text-center m-0 p-0 \" style=\" background-color: #39485E\">
\t\t<h1  class=\"text-white\" >Nos dernières offres d'emploi</h1>
\t</div>

    <div class=\"row justify-content-center mx-auto p-5\" >
 
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 27
            echo "
\t\t\t<div class=\"col-md-8 col-lg-3 p-5 \" >
\t\t\t\t<div class=\"card\" >
\t\t\t\t\t<img class=\"card-img-top\" <img id=\"hoveRotate\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/jobs/" . twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 30))), "html", null, true);
            echo "\"  alt=\"photo card top ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "uploads", [], "any", false, false, false, 30), "html", null, true);
            echo " \">
\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t<h4 class=\"card-title\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h4>
                        <h5 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
                        <p class=\"\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "url", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"
                id=\"button_detail\" class=\" h4 float-right mr-2 text-center \" style=\"text-decoration:none; background-color: #E8D525\">+</a>
                    </div>
                    
\t\t\t\t</div>
\t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 

    </div>

<!-- Latest Articles Carroussel Start -->

\t<div class=\"container py-5\">
\t\t<hr style=\"height: 1px;  background-color: #707070; width: 100%; border: none;\">
\t\t\t<div class=\"col-12 text-center py-3\">
\t\t\t\t<h1>Pour vous</h1>
\t\t\t\t<h3 >Nos derniers articles</h3>\t\t
\t\t\t</div>
\t</div>
 

\t<div class=\"row justify-content-center mx-auto\" id=\"carroussel\">
\t\t
\t\t\t<div class=\"p-5\" >

        <div class=\"container\" >
            <div class=\"row animate-in-down\"id=\"carroussel_box\" style=\"background-color:#39485E;\">

                <div class=\"p-4 col-md-6 align-self-center\">
                    <h1 class=\" text-white\">Nos articles</h1>
                    <p class=\"my-4 text-white\">Restez informé sur le marché du travail en découvrant une sélection d'articles qui vous infome et qui vous inspire</p> 
\t       \t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("last_article");
        echo "\"  class=\"mt-3 mb-3 p-3 rounded\" style=\"text-decoration:none; background-color: #E8D525\" >Découvrir</a>
                </div>

                <div class=\"p-0 col-md-6 \">
                    <div class=\"carousel slide \" data-ride=\"carousel\" id=\"carousel1\">
                        <ol class=\"carousel-indicators \">
                            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active \"></li>
                            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                        </ol>

                        <div class=\"carousel-inner\" role=\"listbox\">

                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 82
            echo "
                            <div class=\"carousel-item ";
            // line 83
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 83)) ? ("active") : (""));
            echo "\"> 
                                <img class=\"d-block img-fluid w-100 \" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/articles/" . twig_get_attribute($this->env, $this->source, $context["article"], "uploads", [], "any", false, false, false, 84))), "html", null, true);
            echo "\" 
                                alt=\"first slide ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "uploads", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
                                <div class=\"carousel-caption \">
                                    <h2 class=\"text-secondary\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</h2>
                                </div>
                            </div>
                             ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  

                        </div> 
                            <a class=\"carousel-control-prev\" href=\"#carousel1\" role=\"button\" data-slide=\"prev\"> 
                                <span class=\"carousel-control-prev-icon \" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a> 
                                    <a class=\"carousel-control-next\" href=\"#carousel1\" role=\"button\" data-slide=\"next\"> 
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                        </div>

                </div>
            </div>
        </div>

    </div>

</div>


<!-- Section Services  -->

<div class=\"container mt-5\">
        <hr style=\"height: 1px;  background-color: #707070; width: 100%; border: none;\">
                <div class=\"col-12 text-center py-3\">
                    <h1 class=\"mb-4\">Nos services</h1>
                </div>\t
        <div class=\"card-group mt-4\">
    
              <div class=\"card\" id=\"card_service\">
                <div class=\"card-body mx-auto text-center\">
                        <div class=\"msg\"></div>
                        <h4 class=\"\" >Newsletter</h4>
                        <p class=\"\">Ne ratez plus rien, inscrivez vous à notre newsletters</p>
                            <div class=\"mt-5 mx-auto\" id=\"button_outset\">
                                <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"class=\"\" >Inscrivez-vous</a>
                            </div>
                </div>
            </div>
            <div class=\"card\" id=\"card_service\">
                  <div class=\"card-body mx-auto text-center\">
                    <div class=\"compt\"></div>
                    <h4 class=\"\">Mon Compte</h4>
                    <p>Créer votre compte et garder vos favoris, postuler directement etc...</p>
                        <div class=\"mt-4 mx-auto\" id=\"button_outset\">
                            <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"class=\"\" >Connectez-vous</a>
                        </div>
                    </div>
              </div>
              <div class=\"card\" id=\"card_service\">
                <div class=\"card-body text-center\">
                    <div class=\"phone\"></div>
                    <h4 class=\"\">Nous contacter</h4>
                        <p>Vous avez une question, une suggestion, n'hésitez pas!</p>
                            <div class=\"mt-5 mx-auto\" id=\"button_outset\">
                                <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"class=\"\" > Contact</a>
                            </div>
                    </div>
                </div>
             <div class=\"card\" id=\"card_service\">
                <div class=\"card-body text-center\">
                    <div class=\"concept\"></div>
                    <h4 class=\"\">Nous</h4>
                        <p>Découvrir notre concept et ce que nous souhaitons vous apporter.</p>
                            <div class=\"mt-4 mx-auto\" id=\"button_outset\">
                                <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\"class=\"\" > Notre concept</a>
                            </div>
                    </div>
                 </div>
             <div class=\"card\" id=\"card_service\">
                <div class=\"card-body text-center\">
                    <div class=\"job\"></div>
                    <h4 class=\"\">Rechercher</h4>
                        <p class=\"\">Trouver votre job de rêve par ville, secteurs ou entreprises</p>
                        <div class=\"mt-5 mx-auto\" id=\"button_outset\">
                            <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_job");
        echo "\"class=\"\" > Notre jobs</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>


\t";
        // line 172
        echo "\t<div class=\"container-fluid mt-5\">
\t\t<div class=\"row justify-content-center mb3 pt-2 pr-3 \">
\t\t\t<a href=\"#top\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./image/arrowTop.png"), "html", null, true);
        echo "\" alt=\"icone arrow Top\" width=\"85%\" id=\"arrowTop\"></a>
\t\t</div>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 174,  320 => 172,  309 => 163,  296 => 153,  283 => 143,  270 => 133,  257 => 123,  222 => 90,  204 => 87,  199 => 85,  195 => 84,  191 => 83,  188 => 82,  171 => 81,  155 => 68,  128 => 43,  115 => 37,  109 => 34,  105 => 33,  101 => 32,  94 => 30,  89 => 27,  85 => 26,  71 => 15,  63 => 10,  58 => 7,  54 => 6,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\elles\\templates\\home\\index.html.twig");
    }
}
