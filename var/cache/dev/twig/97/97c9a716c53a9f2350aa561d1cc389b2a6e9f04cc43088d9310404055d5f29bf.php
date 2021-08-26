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
class __TwigTemplate_e205d81826005fbf1bcb23bee86d79bb38d77ec98501c3b1d7eb56c79607c599 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Votre coach partout en France\">
    <meta name=\"author\" content=\"Aladine Behbis and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/colisee.css"), "html", null, true);
        echo "\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Colisée!</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Qui sommes-nous ? <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Nos Coachs <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
            
            <div class=\"navbar-item-custom\">
            ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "prenom", [], "any", false, false, false, 56), "html", null, true);
            echo ")</small></a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion </a>
            ";
        } else {
            // line 58
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription </a>
            ";
        }
        // line 60
        echo "            </div>
        </div>
    </nav>
</header>

<main role=\"main\">

    ";
        // line 67
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 68
            echo "    
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>Trouvez votre Coach sportif partout en France</h1>
                        <p>Le Colisée Sport propose le meilleur de l’entraînement personnel afin d’obtenir des résultats rapides et visibles à long terme.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Inscrivez vous </a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Réservez vos séances en ligne</h1>
                        <p>Un plan d'action sur mesure adapté à vos objectifs. Les sciences de l'entraînement rien que pour vous ! Satisfaction, Progrès, la voie de la Transformation !</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">En savoir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-right\">
                        <h1>Gardez la forme avec votre coach sportif</h1>
                        <p>Depuis 2015 nous accompagnons des milliers de clients à domicile, en plein air ou encore en entreprise dans le but de réaliser leurs nombreux objectifs. Notre force ? Une entreprise à taille humaine et des coachs sportifs recrutés avec une grande rigueur qui proposent un suivi client très personnalisé.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    ";
        }
        // line 117
        echo "

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing ";
        // line 123
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">
            ";
        // line 124
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"footer-text\">
            &copy; 2020-2021 Colisée!<br/>
            <small>Votre coach sportif partout en France<br/>
            <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></small>
        </p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Colisée Sport! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 125
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  270 => 125,  260 => 124,  241 => 9,  228 => 138,  214 => 126,  212 => 124,  206 => 123,  198 => 117,  147 => 68,  145 => 67,  136 => 60,  128 => 58,  118 => 56,  116 => 55,  95 => 37,  87 => 32,  65 => 13,  61 => 12,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Votre coach partout en France\">
    <meta name=\"author\" content=\"Aladine Behbis and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>{% block title %}Colisée Sport! {% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/colisee.css')}}\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"{{asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{path('home')}}\">Colisée!</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Qui sommes-nous ? <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Nos Coachs <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
            
            <div class=\"navbar-item-custom\">
            {%if app.user %}
            <a href=\"{{ path('account') }}\">Mon compte <small>({{ app.user.prenom }})</small></a> | <a href=\"{{ path('app_logout') }}\">Déconnexion </a>
            {% else %}
            <a href=\"{{ path('app_login') }}\">Connexion</a> | <a href=\"{{ path('register') }}\">Inscription </a>
            {% endif %}
            </div>
        </div>
    </nav>
</header>

<main role=\"main\">

    {% if block('carousel') is defined %}
    
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>Trouvez votre Coach sportif partout en France</h1>
                        <p>Le Colisée Sport propose le meilleur de l’entraînement personnel afin d’obtenir des résultats rapides et visibles à long terme.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Inscrivez vous </a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Réservez vos séances en ligne</h1>
                        <p>Un plan d'action sur mesure adapté à vos objectifs. Les sciences de l'entraînement rien que pour vous ! Satisfaction, Progrès, la voie de la Transformation !</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">En savoir plus</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-right\">
                        <h1>Gardez la forme avec votre coach sportif</h1>
                        <p>Depuis 2015 nous accompagnons des milliers de clients à domicile, en plein air ou encore en entreprise dans le but de réaliser leurs nombreux objectifs. Notre force ? Une entreprise à taille humaine et des coachs sportifs recrutés avec une grande rigueur qui proposent un suivi client très personnalisé.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    {% endif %}


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\">
            {% block content %}
            {% endblock %}
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"footer-text\">
            &copy; 2020-2021 Colisée!<br/>
            <small>Votre coach sportif partout en France<br/>
            <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></small>
        </p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{asset('assets/js/bootstrap.bundle.js') }}\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\Aladine\\OneDrive\\Bureau\\udemy\\projet1\\coliseetest\\templates\\base.html.twig");
    }
}
