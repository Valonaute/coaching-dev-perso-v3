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

/* public/home.html.twig */
class __TwigTemplate_14614d24f95fbff75d5ec010db459397 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "public/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Accueil ";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1> Coaching de vie - Développement Personnel</h1>
        <section id=\"description\">
            <h3> Bienvenue sur notre site lié au coaching de vie et au développement personnel</h3>
            <p> Découvrez des outils pour prendre votre vie en main et devenir une meilleure personne afin d'impacter positivement votre monde ! </p>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sunset.jpg"), "html", null, true);
        echo "\" alt=\"sunset\" title=\"Coucher de soleil\">
        </section>
        <section>
            <h3> Vous trouverez plusieurs sections afin d'optimiser votre vie selon vos envies :  </h3>
            <article id=\"list-home\">
                <ul>
                    <li> Une partie <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Formations</a> avec des outils en vente pour booster au maximum vos résultats </li>
                    <li> Une section <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Actualités</a> contenant des articles récents sous forme de blog sur différents domaines du coaching </li>
                    <li> Un espace <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\">Forum</a> pour vous exprimer et échanger sur les thèmes qui vous préoccupent  </li>
                </ul>
            </article>
            <h4> Vous pouvez également créer un espace membre grâce à l'outil <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription</a> </h4>
            <h4> Ensuite <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\">Connexion</a> pour acheter des produits et devenir un membre actif de notre forum. </h4>
            
        </section>
        <section id=\"lastArticles\" class=\"card-section\">
            <h2 class=\"my-5\"> Voici nos derniers articles du blog : </h2>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "                        <div class=\"card col-lg-3 col-md-4 card-center-perso card-perso\" style=\"min-height:40rem;\">
                            <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                            <div class=\"card-body card-center-perso\">
                                <h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "shortdescription", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_onearticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-perso\">Lire l'article</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>
            </div>
            <h3 ><a class=\"btn btn-perso my-5\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> Accéder au blog </a></h3>
        </section>
        <section id=\"bestSellers\" class=\"card-section\">
            <h2 class=\"my-5\"> Voici nos meilleurs produits et formations : </h2>
            <div class=\"container-fluid my-5\">
                <div class=\"row\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestsellers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "                <div class=\"card col-lg-4 col-md-6 card-center-perso\" style=\"max-width: 25rem; min-height:40rem;\">
                  <a class=\"my-4\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "\"></a>
                  <div class=\"card-body card-center-perso \">
                    <h5 class=\"card-title my-4\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                    <h5 class=\"card-title my-4\">";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53), 2, ",", " "), "html", null, true);
            echo " €</h5>
                    <p class=\"card-text my-4\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "shortdescription", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                    <p class=\"guarantee my-3\"> Garantie 100% Satisfait ou remboursé !* </p>
                    <h4><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-perso my-2\">Ajouter au panier</a>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-perso-dark my-2\">Details</a></h4>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>
            </div>
            <h3><a class=\"btn btn-perso\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\"> Accéder à la boutique </a></h3>
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, EasyWebFactory bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.</p><p>Comptant une équipe de plus de 2 personnes, EasyWebFactory comptent pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Ils accompagnent ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fascinés par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, leur obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que leur équipe de chercheurs mène. </p>
        </section>
        <h3 ><a class=\"btn btn-perso my-5\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> Accéder au blog </a></h3>
        <section id=\"temoignages\">
            <h2 class=\"my-5\"> Nos meilleurs avis clients : </h2>
            <div class=\"container-fluid\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestreviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 74
            echo "                    <div class=\"row border-perso radius-30 my-5 w-50 mx-auto\">
                        <h5 class=\"my-5\"> \"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "\" </h5>
                        <p class=\"my-3\"> \"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 76), "html", null, true);
            echo "\"</p>
                        <h4 class=\"my-3\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 77), "html", null, true);
            echo "/10</h4>
                        <p> Avis laissé le ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo " par <span class=\"bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "pseudo", [], "any", false, false, false, 78), "html", null, true);
            echo "</span> </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </div>
        </section>
        <a class=\"btn btn-perso my-5\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous Contacter</a>

";
    }

    public function getTemplateName()
    {
        return "public/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 83,  244 => 81,  233 => 78,  229 => 77,  225 => 76,  221 => 75,  218 => 74,  214 => 73,  207 => 69,  198 => 63,  194 => 61,  184 => 57,  180 => 56,  175 => 54,  171 => 53,  167 => 52,  155 => 50,  152 => 49,  148 => 48,  139 => 42,  135 => 40,  125 => 36,  121 => 35,  117 => 34,  109 => 32,  106 => 31,  102 => 30,  92 => 23,  88 => 22,  82 => 19,  78 => 18,  74 => 17,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/home.html.twig", "C:\\wamp64\\www\\symfony\\3.1 projet-coaching-prod-main\\templates\\public\\home.html.twig");
    }
}
