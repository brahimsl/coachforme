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

/* cart/index.html.twig */
class __TwigTemplate_0b0e117a9deeff283f8d2fb7352aac68739c32227245a93bc40090aa1a23e95c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - Coach Forme!
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
        echo "<h1>Mon panier</h1>
Rrtouvez l'ensemble des produits que vous avez ajouté au panier

";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())), 0))) {
            // line 11
            echo "
<table class=\"table mt-3\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Produit</th>
\t\t\t<th scope=\"col\"></th>
\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t<th scope=\"col\">Prix</th>
\t\t\t<th scope=\"col\">Total</th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 24
            $context["total"] = null;
            // line 25
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t<img src=\"/uploads/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "illustration", [], "any", false, false, false, 28), "html", null, true);
                echo "\" alt=\" ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\"
\t\t\t\t\theight=\"80px\"><br />
\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "<br />
\t\t\t\t<small>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "subtitle", [], "any", false, false, false, 33), "html", null, true);
                echo "</small>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/signe-moins.png"), "html", null, true);
                echo "\" height=\"13px\" alt=\"retirer un produit\">
\t\t\t\t</a>
\t\t\t\tx ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                echo "
\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\" height=\"13px\" alt=\"ajouter un produit\">
\t\t\t\t</a>
\t\t\t</td>
\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44) / 100), 2), "html", null, true);
                echo "€</td>
\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "prix", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45)) / 100), 2), "html", null, true);
                echo "€</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"21px\" alt=\"Supprimer mon produit\">
\t\t\t\t</a>
\t\t\t</td>
\t\t</tr>
\t\t";
                // line 52
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "prix", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52)));
                // line 53
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t</tbody>
</table>
<div class=\"text-right mb-5\">
\t<b>Nombre de produit :
\t</b>
\t";
            // line 59
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 59, $this->source); })())), "html", null, true);
            echo "<br />
\t<b>Total de mon panier :
\t</b>
\t";
            // line 62
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) / 100), 2), "html", null, true);
            echo "€
\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-5\">Valider mon panier</a>
</div>
";
        } else {
            // line 66
            echo "<hr>
<p><b>Votre panier est vide.</b></p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 66,  209 => 63,  205 => 62,  199 => 59,  192 => 54,  186 => 53,  184 => 52,  177 => 48,  173 => 47,  168 => 45,  164 => 44,  158 => 41,  154 => 40,  150 => 39,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  122 => 28,  118 => 26,  113 => 25,  111 => 24,  96 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - Coach Forme!
{% endblock %}

{% block content %}
<h1>Mon panier</h1>
Rrtouvez l'ensemble des produits que vous avez ajouté au panier

{% if cart|length > 0 %}

<table class=\"table mt-3\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Produit</th>
\t\t\t<th scope=\"col\"></th>
\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t<th scope=\"col\">Prix</th>
\t\t\t<th scope=\"col\">Total</th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% set total = null %}
\t\t{% for product in cart %}
\t\t<tr>
\t\t\t<th>
\t\t\t\t<img src=\"/uploads/{{product.product.illustration }}\" alt=\" {{product.product.name}}\"
\t\t\t\t\theight=\"80px\"><br />
\t\t\t</th>
\t\t\t<td>
\t\t\t\t{{product.product.name}}<br />
\t\t\t\t<small>{{product.product.subtitle}}</small>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('decrease_to_cart', { 'id' : product.product.id}) }}\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/signe-moins.png')}}\" height=\"13px\" alt=\"retirer un produit\">
\t\t\t\t</a>
\t\t\t\tx {{product.quantity}}
\t\t\t\t<a href=\"{{ path('add_to_cart', { 'id' : product.product.id}) }}\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/plus.png')}}\" height=\"13px\" alt=\"ajouter un produit\">
\t\t\t\t</a>
\t\t\t</td>
\t\t\t<td>{{(product.product.prix /100)|number_format(2)}}€</td>
\t\t\t<td>{{((product.product.prix * product.quantity)/100)|number_format(2)}}€</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('delete_to_cart', { 'id' : product.product.id}) }}\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/delete.png')}}\" height=\"21px\" alt=\"Supprimer mon produit\">
\t\t\t\t</a>
\t\t\t</td>
\t\t</tr>
\t\t{% set total = total + (product.product.prix * product.quantity) %}
\t\t{% endfor %}
\t</tbody>
</table>
<div class=\"text-right mb-5\">
\t<b>Nombre de produit :
\t</b>
\t{{ cart|length}}<br />
\t<b>Total de mon panier :
\t</b>
\t{{(total /100)|number_format(2)}}€
\t<a href=\"{{path ('order')}}\" class=\"btn btn-success btn-block mt-5\">Valider mon panier</a>
</div>
{% else %}
<hr>
<p><b>Votre panier est vide.</b></p>
{% endif %}
{% endblock %}", "cart/index.html.twig", "C:\\Users\\slima\\OneDrive\\Bureau\\next\\Coach_Forme\\templates\\cart\\index.html.twig");
    }
}
