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
class __TwigTemplate_4417cdef987689fffc71d9fb5f5d7f28f86fa413368e2908b75eafb3ea7c2d81 extends Template
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
    <meta name=\"author\" content=\"Brahim Slimane and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/coach.css"), "html", null, true);
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
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <header>
        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Coach Forme</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Boutique<span
                                class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Coachs<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>

                <div class=\"navbar-item-custom\">
                    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            echo ")</small></a> | <a
                        href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion </a>
                    ";
        } else {
            // line 63
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription </a>|
                    <a href=\"#\">Devenir Coach</a>
                    ";
        }
        // line 66
        echo "                </div>
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"mon panier\">
                </a>
            </div>
        </nav>
    </header>

    <main role=\"main\">

        ";
        // line 76
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 77
            echo "
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel1.jpg"), "html", null, true);
            echo "\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-left\">
                            <h1>Trouvez votre Coach sportif partout en France</h1>
                            <p>Coach Forme vous propose le meilleur de l’entraînement personnel afin d’obtenir des
                                résultats rapides et visibles à long terme.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" role=\"button\">Inscrivez
                                    vous </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel2.jpg"), "html", null, true);
            echo "\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1>Réservez vos séances en ligne</h1>
                            <p>Un plan d'action sur mesure adapté à vos objectifs. Les sciences de l'entraînement rien
                                que pour vous ! Satisfaction, Progrès, la voie de la Transformation !</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\" role=\"button\">Boutique</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel3.jpg"), "html", null, true);
            echo "\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-right\">
                            <h1>Gardez la forme avec votre coach sportif</h1>
                            <p>Depuis 2015 nous accompagnons des milliers de clients à domicile, en plein air ou encore
                                en entreprise dans le but de réaliser leurs nombreux objectifs. Notre force ? Une
                                entreprise à taille humaine et des coachs sportifs recrutés avec une grande rigueur qui
                                proposent un suivi client très personnalisé.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Nos coachs</a></p>
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
        // line 145
        echo "

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class=\"container marketing ";
        // line 151
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">
            ";
        // line 152
        $this->displayBlock('content', $context, $blocks);
        // line 154
        echo "        </div><!-- /.container -->

        <!-- FOOTER -->
        <footer class=\"footer-custom\">
            <p class=\"footer-text\">
                &copy; 2020-2021 Coach Forme<br />
                <small>Votre coach sportif partout en France<br />
                    <a href=\"#\">Mentions légales</a> &middot; <a href=\"#\">Réseaux sociaux</a></small>
            </p>
        </footer>
    </main>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coach Forme";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 153
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
        return array (  324 => 153,  314 => 152,  295 => 10,  281 => 166,  267 => 154,  265 => 152,  259 => 151,  251 => 145,  221 => 118,  212 => 112,  199 => 102,  190 => 96,  177 => 86,  166 => 77,  164 => 76,  153 => 68,  149 => 67,  146 => 66,  137 => 63,  132 => 61,  125 => 60,  123 => 59,  108 => 47,  97 => 39,  88 => 33,  66 => 14,  62 => 13,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Votre coach partout en France\">
    <meta name=\"author\" content=\"Brahim Slimane and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>{% block title %}Coach Forme{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/coach.css')}}\">

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
            <a class=\"navbar-brand\" href=\"{{path('home')}}\">Coach Forme</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{path('products')}}\">Boutique<span
                                class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Coachs<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Contact <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>

                <div class=\"navbar-item-custom\">
                    {%if app.user %}
                    <a href=\"{{ path('account') }}\">Mon compte <small>({{ app.user.prenom }})</small></a> | <a
                        href=\"{{ path('app_logout') }}\">Déconnexion </a>
                    {% else %}
                    <a href=\"{{ path('app_login') }}\">Connexion</a> | <a href=\"{{ path('register') }}\">Inscription </a>|
                    <a href=\"#\">Devenir Coach</a>
                    {% endif %}
                </div>
                <a href=\"{{path('cart')}}\">
                    <img src=\"{{asset('assets/img/shopping-cart.png')}}\" class=\"cart-icon\" alt=\"mon panier\">
                </a>
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
                    <img src=\"{{asset('assets/img/caroussel1.jpg')}}\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-left\">
                            <h1>Trouvez votre Coach sportif partout en France</h1>
                            <p>Coach Forme vous propose le meilleur de l’entraînement personnel afin d’obtenir des
                                résultats rapides et visibles à long terme.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path('register')}}\" role=\"button\">Inscrivez
                                    vous </a></p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{asset('assets/img/caroussel2.jpg')}}\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption\">
                            <h1>Réservez vos séances en ligne</h1>
                            <p>Un plan d'action sur mesure adapté à vos objectifs. Les sciences de l'entraînement rien
                                que pour vous ! Satisfaction, Progrès, la voie de la Transformation !</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{ path('products')}}\" role=\"button\">Boutique</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{asset('assets/img/caroussel3.jpg')}}\">
                    <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"
                        preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
                        <rect width=\"100%\" height=\"100%\" fill=\"#777\" />
                    </svg>
                    <div class=\"container\">
                        <div class=\"carousel-caption text-right\">
                            <h1>Gardez la forme avec votre coach sportif</h1>
                            <p>Depuis 2015 nous accompagnons des milliers de clients à domicile, en plein air ou encore
                                en entreprise dans le but de réaliser leurs nombreux objectifs. Notre force ? Une
                                entreprise à taille humaine et des coachs sportifs recrutés avec une grande rigueur qui
                                proposent un suivi client très personnalisé.</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Nos coachs</a></p>
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
                &copy; 2020-2021 Coach Forme<br />
                <small>Votre coach sportif partout en France<br />
                    <a href=\"#\">Mentions légales</a> &middot; <a href=\"#\">Réseaux sociaux</a></small>
            </p>
        </footer>
    </main>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"{{asset('assets/js/bootstrap.bundle.js') }}\"></script>
</body>

</html>", "base.html.twig", "C:\\Users\\slima\\OneDrive\\Bureau\\next\\Coach_Forme\\templates\\base.html.twig");
    }
}
