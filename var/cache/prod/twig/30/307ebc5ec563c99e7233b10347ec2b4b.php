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

/* base.html.twig */
class __TwigTemplate_dec7e6af10fda74661f5225c02347f2c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon.png"), "html", null, true);
        echo "\">
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-ezfmEM0AQA4VvACr2X9O8t4XHzlFnmdvi5EWf5Fv0H8eVhUom8sGNclbxFfmL9Rn\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\" defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\">
        </script>
        <script src=\"https://kit.fontawesome.com/100a24dea8.js\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    </head>
    <body>
        <header>
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-line.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" class=\"logo-nav\"></a>
            <nav class=\"nav-desktop\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"> Forum </a>
                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        ";
            // line 38
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 38), "get", [0 => "cart"], "method", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 38), "get", [0 => "cart"], "method", false, false, false, 38)), "html", null, true))) : (print ("0")));
            echo "
                    </span>
                </a>
                ";
        } else {
            // line 42
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                ";
        }
        // line 44
        echo "                
                ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "                <a class=\"btn btn-perso\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a>
                ";
        }
        // line 48
        echo "            </nav> 
            <div id=\"mySidenav\" class=\"sidenav\">
                <a id=\"closeBtn\" href=\"#\" class=\"close\">x</a>
                <ul>
                    <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" height=\"60px\"></a></li>
                    <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a></li>
                    <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a></li>
                    <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\">Forum</a></li>
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                    <li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a></li>
                    <li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        ";
            // line 62
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 62), "get", [0 => "cart"], "method", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 62), "get", [0 => "cart"], "method", false, false, false, 62)), "html", null, true))) : (print ("0")));
            echo "
                    </span></a></li>
                ";
        } else {
            // line 65
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                ";
        }
        // line 67
        echo "                
                ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "                <li><a class=\"\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a></li>
                ";
        }
        // line 71
        echo "                </ul>
            </div>

            <a href=\"#\" id=\"openBtn\">
                <span class=\"burger-icon\">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
            </a>

            <div id=\"progress-bar\" class=\"progress-bar\"></div>
        </header>
        
        <main>
                    
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 88
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 90
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "        
        ";
        // line 103
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "        
        </main>

        <footer>
            <section id=\"nav-column\" >
                <section class=\"nav-column\"> 
                    <h2><a href=\"https://coachingdevperso.fr\">Coaching</a> </h2>
                    <h2><a href=\"https://coachingdevperso.fr\">Dev-Perso.fr</a> </h2>
                    <a href=\"https://coachingdevperso.fr\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </section>
                <section class=\"nav-column footer-desktop\"> 
                    <nav>
                        <h3>Navigation</h3>
                        <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapsite");
        echo "\">Plan du site</a>
                        <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                        <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valonauteinc");
        echo "\" target =\"_blank\">EasyWebFactory Inc.</a>
                        <button href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("careers");
        echo "\" >On Recrute </button>
                    </nav>
                </section>
                <section class=\"nav-column footer-desktop\">
                    <nav>
                        <h3>Suivez-nous</h3>
                        <a href=\"https://instagram.com/coaching.devperso\" target =\"_blank\">Instagram</a>
                        <a href=\"https://Facebook.com/valonaute\" target =\"_blank\">Facebook</a>
                        <a href=\"https://www.youtube.com/channel/UC5KXcAr204aLa6F2-4hapGw\" target =\"_blank\">Youtube</a>
                        <a href=\"https://github.com/valonaute\" target =\"_blank\"> Github </a>
                        <a href=\"https://linkedin.com/in/valonaute\" target =\"_blank\"> Linkedin </a>
                    </nav>
                </section>
            </section>
            <div id=\"mySidenavFooter\" class=\"sidenavFooter\">
                <a id=\"closeBtnFooter\" href=\"#footer\" class=\"close\">x</a>
                <ul>
                    <li><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapsite");
        echo "\">Plan du site</a></li>
                    <li><a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                    <li><a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valonauteinc");
        echo "\" target =\"_blank\">EasyWebFactory Inc.</a></li>
                    <li><a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("careers");
        echo "\">On Recrute </a></li>
                    <li>Suivez-nous : </li>
                    <li> <a href=\"https://instagram.com/coaching.devperso\" target =\"_blank\">Instagram</a> </li>
                    <li> <a href=\"https://Facebook.com/valonaute\" target =\"_blank\">Facebook</a> </li>
                    <li> <a href=\"https://www.youtube.com/channel/UC5KXcAr204aLa6F2-4hapGw\" target =\"_blank\">Youtube</a> </li>
                    <li> <a href=\"https://github.com/valonaute\" target =\"_blank\"> Github </a> </li>
                    <li> <a href=\"https://linkedin.com/in/valonaute\" target =\"_blank\"> Linkedin </a> </li>
                </ul>
            </div>

            <a href=\"#footer\" id=\"openBtnFooter\">
                <span class=\"burger-icon\">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
            </a>

            <section id=\"footer\">
                <h4> &copy; 2023 EASYWEBFACTORY INC. </h4>
                <p> Made with 🤍</p>
                <nav>
                    <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU / CGV </a>
                    <p> | </p>
                    <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Mentions Légales</a>
                    <p> | </p>
                    <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Politique de confidentialité</a>
                </nav>
            </section>
        </footer>
    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue !";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        ";
    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "        
        ";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "
        ";
    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 104,  440 => 103,  435 => 100,  431 => 99,  426 => 96,  422 => 95,  418 => 17,  414 => 16,  409 => 14,  405 => 13,  398 => 5,  386 => 170,  381 => 168,  376 => 166,  351 => 144,  347 => 143,  343 => 142,  339 => 141,  335 => 140,  315 => 123,  311 => 122,  307 => 121,  303 => 120,  299 => 119,  291 => 114,  281 => 106,  279 => 103,  276 => 102,  274 => 99,  271 => 98,  269 => 95,  266 => 94,  260 => 93,  251 => 90,  246 => 89,  241 => 88,  237 => 87,  219 => 71,  213 => 69,  211 => 68,  208 => 67,  202 => 65,  196 => 62,  191 => 60,  187 => 59,  181 => 58,  176 => 57,  174 => 56,  170 => 55,  166 => 54,  162 => 53,  156 => 52,  150 => 48,  144 => 46,  142 => 45,  139 => 44,  133 => 42,  126 => 38,  121 => 36,  117 => 35,  111 => 34,  106 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  85 => 27,  74 => 19,  71 => 18,  68 => 16,  66 => 13,  62 => 12,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\symfony\\3.1 projet-coaching-prod-main\\templates\\base.html.twig");
    }
}
