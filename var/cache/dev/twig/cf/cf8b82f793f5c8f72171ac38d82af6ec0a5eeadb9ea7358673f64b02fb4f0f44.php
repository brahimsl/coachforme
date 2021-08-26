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

/* order/add.html.twig */
class __TwigTemplate_cddd96dedecf5bf885c386cb7f9fd2c3f55a73ac6131c98368f19effeeaa4c90 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
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

        echo "Valider ma commande - Colisée Sport!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h2>Mon récapitulatif</h2>
    <p>Verifier vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            
            <strong>Mon adresse de livraison</strong><br/>
            ";
        // line 14
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 14, $this->source); })());
        echo "

            <hr>
            <strong>Mon transporteur</strong>
            
            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "<br/>
            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "<br/>
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), 2), "html", null, true);
        echo "€
        </div>
        <div class=\"col-md-6\">
        <div class=\"text-center\">
            <b>Récap de ma commande</b><br/>
            <p> Voici le récapitulatif de votre panier </p>
        </div>
            
            <div class=\"order-summary\">
            ";
        // line 30
        $context["total"] = null;
        // line 31
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 32
            echo "            <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                <div class=\"col-2\">
                    <img src=\"/uploads/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "illustration", [], "any", false, false, false, 34), "html", null, true);
            echo "\" alt=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\" height=\"80px\"><br/>
                </div>
                <div class=\"col-8 my-auto\" >
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "<br/>
                    <small>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "subtitle", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    <br/>
                        x ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "</small>
                </div>

                <div class=\"col-2 my-auto\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44)) / 100), 2), "html", null, true);
            echo "€
                </div>
            </div>
            ";
            // line 47
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "prix", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)));
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
            <hr>
            <strong>Sous-Total : </strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) / 100), 2), "html", null, true);
        echo "€ <br/>
            <strong>Livraison :  </strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 52, $this->source); })()), "price", [], "any", false, false, false, 52), 2), "html", null, true);
        echo "€
            <hr>
            <strong>Sous-Total : </strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54)), 2), "html", null, true);
        echo "€ <br/>



            <a href=\"\" class=\"btn btn-success btn-block mt-3\">Payer ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58)), 2), "html", null, true);
        echo "€</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 58,  192 => 54,  187 => 52,  183 => 51,  179 => 49,  173 => 48,  171 => 47,  165 => 44,  158 => 40,  153 => 38,  149 => 37,  141 => 34,  133 => 32,  128 => 31,  126 => 30,  114 => 21,  110 => 20,  106 => 19,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider ma commande - Colisée Sport!{% endblock %}

{% block content %}

    <h2>Mon récapitulatif</h2>
    <p>Verifier vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            
            <strong>Mon adresse de livraison</strong><br/>
            {{ delivery|raw }}

            <hr>
            <strong>Mon transporteur</strong>
            
            {{ carrier.name}}<br/>
            {{ carrier.description}}<br/>
            {{ carrier.price|number_format(2)}}€
        </div>
        <div class=\"col-md-6\">
        <div class=\"text-center\">
            <b>Récap de ma commande</b><br/>
            <p> Voici le récapitulatif de votre panier </p>
        </div>
            
            <div class=\"order-summary\">
            {% set total = null %}
            {% for key,product in cart %}
            <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                <div class=\"col-2\">
                    <img src=\"/uploads/{{product.product.illustration }}\" alt=\" {{product.product.name}}\" height=\"80px\"><br/>
                </div>
                <div class=\"col-8 my-auto\" >
                    {{ product.product.name}}<br/>
                    <small>{{ product.product.subtitle }}
                    <br/>
                        x {{ product.quantity }}</small>
                </div>

                <div class=\"col-2 my-auto\">
                    {{((product.product.prix * product.quantity)/100)|number_format(2)}}€
                </div>
            </div>
            {% set total = total + (product.product.prix * product.quantity) %}
        {% endfor %}
            </div>
            <hr>
            <strong>Sous-Total : </strong> {{(total /100)|number_format(2)}}€ <br/>
            <strong>Livraison :  </strong> {{(carrier.price)|number_format(2)}}€
            <hr>
            <strong>Sous-Total : </strong> {{((total /100) + carrier.price)|number_format(2)}}€ <br/>



            <a href=\"\" class=\"btn btn-success btn-block mt-3\">Payer {{((total /100) + carrier.price)|number_format(2)}}€</a>
        </div>
    </div>
{% endblock %}
", "order/add.html.twig", "C:\\Users\\Aladine\\OneDrive\\Bureau\\Aladine\\projet1\\coliseetest\\templates\\order\\add.html.twig");
    }
}
