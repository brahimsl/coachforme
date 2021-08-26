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
class __TwigTemplate_d11cd97b977b219c77ad3ffb702073715ca70e5b191b2bcc9042bb4fef908af4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 4
        echo "<!-- block de mon carousel qui sera afficher a chaque foi sur la page d'acceuil -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
<!-- division qui vont diviser le body en plusieur partie et les classes sont des classes de bootstrap qui ont permis d'utiliser la page -->
<div class=\"row\">
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel2.jpg"), "html", null, true);
        echo "\" x=\"-60\" y=\"0\" />
        </svg>
        <h2>Mohamed</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel2.jpg"), "html", null, true);
        echo "\" x=\"-330\" y=\"0\" />
        </svg>
        <h2>Sylvie</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/coach1.jpg"), "html", null, true);
        echo "\" x=\"-310\" y=\"-40\" />
        </svg>
        <h2>Mickael</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- deuxieme partie de la page -->

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">Votre coach sportif <span class=\"text-muted\">partout en France.</span></h2>
        <p class=\"lead\">Nous sommes disponible dans toute la France. Vous avez forcément un de nos coachs qui réside à
            côté de chez vous. Alors pourquoi ne pas faire du sport avec le meilleur coach sportif de votre ville ?</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/carte.png"), "html", null, true);
        echo "\" x=\"0\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading\">Atteignez vos objectifs <span class=\"text-muted\">avec votre coach sportif.</span>
        </h2>
        <p class=\"lead\">Depuis plusieurs années nous encadrons nos clients jusqu'à la réalisation de leurs objectifs.
            Nous adaptons nos séances en fonction de ceux-ci mais également en fonction de leurs niveau de forme, leurs
            différents problèmes de santé, leurs âges, leurs complexes, leurs planning... Tout est pris en compte pour
            un résultat rapide et durable.</p>
    </div>
    <div class=\"col-md-5 order-md-1\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/remise-en-forme.jpg"), "html", null, true);
        echo "\" x=\"-30\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">Des prestations sur mesure <span class=\"text-muted\">et ultra
                personnalisées.</span></h2>
        <p class=\"lead\">Coach Forme vous propose + de 30 prestations. Les séances avec votre coach sportif sont ultra
            personnalisées ! Nous prenons en compte votre niveau de santé & votre niveau sportif, votre parcours
            sportif, vos problèmes de santé et surtout vos objectifs. Vous pouvez bien entendu cumuler les prestations
            pour avoir un suivi sur mesure !</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/preparation.jpg"), "html", null, true);
        echo "\" x=\"-30\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<!-- /END THE FEATURETTES -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  215 => 117,  190 => 95,  165 => 73,  134 => 45,  117 => 31,  100 => 17,  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block carousel %}
<!-- block de mon carousel qui sera afficher a chaque foi sur la page d'acceuil -->
{% endblock %}


{% block content %}

<!-- division qui vont diviser le body en plusieur partie et les classes sont des classes de bootstrap qui ont permis d'utiliser la page -->
<div class=\"row\">
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"{{asset('assets/img/caroussel2.jpg')}}\" x=\"-60\" y=\"0\" />
        </svg>
        <h2>Mohamed</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"{{asset('assets/img/caroussel2.jpg')}}\" x=\"-330\" y=\"0\" />
        </svg>
        <h2>Sylvie</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class=\"col-lg-4\">
        <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\"
            preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text>
            <image xlink:href=\"{{asset('assets/img/coach1.jpg')}}\" x=\"-310\" y=\"-40\" />
        </svg>
        <h2>Mickael</h2>
        <p>Coach sportif diplômé d'une licence métiers de la remise en forme, j'exerce depuis maintenant plus de 5 ans
            dans une salle de sport en entreprise, dans des associations et piscines, et avec des clients particuliers
            satisfaits de leurs progrès et ayant atteint leur objectif (perte de poids, prise de masse, renforcement
            musculaire, remise en forme...).</br></p>
        <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Voir &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- deuxieme partie de la page -->

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">Votre coach sportif <span class=\"text-muted\">partout en France.</span></h2>
        <p class=\"lead\">Nous sommes disponible dans toute la France. Vous avez forcément un de nos coachs qui réside à
            côté de chez vous. Alors pourquoi ne pas faire du sport avec le meilleur coach sportif de votre ville ?</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"{{asset('assets/img/carte.png')}}\" x=\"0\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading\">Atteignez vos objectifs <span class=\"text-muted\">avec votre coach sportif.</span>
        </h2>
        <p class=\"lead\">Depuis plusieurs années nous encadrons nos clients jusqu'à la réalisation de leurs objectifs.
            Nous adaptons nos séances en fonction de ceux-ci mais également en fonction de leurs niveau de forme, leurs
            différents problèmes de santé, leurs âges, leurs complexes, leurs planning... Tout est pris en compte pour
            un résultat rapide et durable.</p>
    </div>
    <div class=\"col-md-5 order-md-1\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"{{asset('assets/img/remise-en-forme.jpg')}}\" x=\"-30\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">Des prestations sur mesure <span class=\"text-muted\">et ultra
                personnalisées.</span></h2>
        <p class=\"lead\">Coach Forme vous propose + de 30 prestations. Les séances avec votre coach sportif sont ultra
            personnalisées ! Nous prenons en compte votre niveau de santé & votre niveau sportif, votre parcours
            sportif, vos problèmes de santé et surtout vos objectifs. Vous pouvez bien entendu cumuler les prestations
            pour avoir un suivi sur mesure !</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\"
            height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"
            role=\"img\" aria-label=\"Placeholder: 500x500\">
            <title>Placeholder</title>
            <rect width=\"100%\" height=\"100%\" fill=\"#eee\" /><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text>
            <image xlink:href=\"{{asset('assets/img/preparation.jpg')}}\" x=\"-30\" y=\"0\" />
        </svg>
    </div>
</div>

<hr class=\"featurette-divider\">

<!-- /END THE FEATURETTES -->


{% endblock %}", "home/index.html.twig", "C:\\Users\\slima\\OneDrive\\Bureau\\next\\Coach_Forme\\templates\\home\\index.html.twig");
    }
}
