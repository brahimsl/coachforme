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

/* account/address.html.twig */
class __TwigTemplate_bfebc63497164f15c21506935e0e28515c97499c6826e55c06fb08a576d63785 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes adresses - Colisée!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Mes adresses</h1>
\tC'est sur cet espace que vous allez pouvoir gérer toutes vos adresses.<br/>
\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Mon compte</a>
\t<hr>
\t";
        // line 12
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "adresses", [], "any", false, false, false, 12)), 0))) {
            // line 13
            echo "\t\t<p class=\"text-center\">
\t\t\tVous n'avez pas encore ajouter d'adresse dans votre client. Pour en ajouter une, veuillez
\t\t\t<a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
            echo "\">
\t\t\t\tcliquer ici</a>.
\t\t</p>
\t";
        } else {
            // line 19
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "adresses", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 21
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
                            ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "address", [], "any", false, false, false, 26), "html", null, true);
                echo ", <br/>
                            ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postal", [], "any", false, false, false, 27), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "city", [], "any", false, false, false, 27), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "country", [], "any", false, false, false, 27), "html", null, true);
                echo "
                            </p>
\t\t\t\t\t\t\t<a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" >Modifier</a> | <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" >Supprimer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t</div>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 34,  144 => 29,  135 => 27,  131 => 26,  126 => 24,  121 => 21,  117 => 20,  114 => 19,  107 => 15,  103 => 13,  101 => 12,  96 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes adresses - Colisée!
{% endblock %}

{% block content %}
\t<a href=\"{{ path('account_address_add')}}\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Mes adresses</h1>
\tC'est sur cet espace que vous allez pouvoir gérer toutes vos adresses.<br/>
\t<a href=\"{{ path('account')}}\">Mon compte</a>
\t<hr>
\t{% if app.user.adresses|length == 0%}
\t\t<p class=\"text-center\">
\t\t\tVous n'avez pas encore ajouter d'adresse dans votre client. Pour en ajouter une, veuillez
\t\t\t<a href=\"{{ path('account_address_add')}}\">
\t\t\t\tcliquer ici</a>.
\t\t</p>
\t{% else %}
\t\t<div class=\"row\">
\t\t\t{% for adress in app.user.adresses %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{adress.name}}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">
                            {{adress.address}}, <br/>
                            {{adress.postal}} - {{adress.city}} - {{adress.country}}
                            </p>
\t\t\t\t\t\t\t<a href=\"{{ path('account_address_edit', { 'id' : adress.id })}}\" >Modifier</a> | <a href=\"{{ path('account_address_delete', { 'id' : adress.id })}}\" >Supprimer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% endif %}
{% endblock %}
", "account/address.html.twig", "C:\\Users\\Aladine\\OneDrive\\Bureau\\Aladine\\projet1\\coliseetest\\templates\\account\\address.html.twig");
    }
}
