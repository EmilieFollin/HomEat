<?php

/* components/_sidebarleft.html.twig */
class __TwigTemplate_30c8b95af5d65a2a6a0557a6d1557f29ac57e7fd2ed2c880feef9f9f894b9961 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/_sidebarleft.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/_sidebarleft.html.twig"));

        // line 1
        echo "<!-- ---------------------------------- SIDEBAR LEFT---------------------------------- -->
<ul id=\"slide-out\" class=\"side-nav fixed\">

    ";
        // line 4
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "session", array()), "get", array(0 => "userId"), "method"))) {
            // line 5
            echo "
         ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\IndexController::user"));
            echo "


        <li><a class=\"waves-effect tooltipped \" data-tooltip=\"Ici vous pouvez mettre en vente vos plats fait maison :)\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("editor");
            echo "\">Partagez vos plats !</a></li>
        <li><a class=\"waves-effect\" href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index");
            echo "\">Vos ventes en cours</a></li>
        <li><a class=\"waves-effect\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("auteur", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "session", array()), "get", array(0 => "userId"), "method"))), "html", null, true);
            echo "\"><i class=\"material-icons\">perm_identity</i>Votre Profil</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">timeline</i>Satistique</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">search</i>Recherche</a></li>


    ";
        } else {
            // line 17
            echo "
        <li>
            <div class=\"background\">
                <a class=\"waves-effect waves-light btn \" id=\"connexion\">Connexion</a>
                <a class=\"waves-effect waves-light btn \" id=\"inscription\">inscription</a>
            </div>
        </li>


        <li><a class=\"waves-effect tooltipped \" data-tooltip=\"Ici vous pouvez mettre en vente vos plats fait maison :)\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("editor");
            echo "\">Partagez vos plats !</a></li>
        <li><a class=\"waves-effect\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index");
            echo "\">Vos ventes en cours</a></li>
        <li><a class=\"waves-effect\" href=\"\"><i class=\"material-icons\">perm_identity</i>Votre Profil</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">timeline</i>Satistique</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">search</i>Recherche</a></li>


    ";
        }
        // line 34
        echo "





</ul>


<a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_sidebarleft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  77 => 27,  73 => 26,  62 => 17,  53 => 11,  49 => 10,  45 => 9,  39 => 6,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- ---------------------------------- SIDEBAR LEFT---------------------------------- -->
<ul id=\"slide-out\" class=\"side-nav fixed\">

    {% if app.session.get('userId') is not null %}

         {{ render(controller('App\\\\Controller\\\\IndexController::user')) }}


        <li><a class=\"waves-effect tooltipped \" data-tooltip=\"Ici vous pouvez mettre en vente vos plats fait maison :)\" href=\"{{ url(\"editor\") }}\">Partagez vos plats !</a></li>
        <li><a class=\"waves-effect\" href=\"{{ url(\"index\") }}\">Vos ventes en cours</a></li>
        <li><a class=\"waves-effect\" href=\"{{ url(\"auteur\", { id :  app.session.get('userId')}) }}\"><i class=\"material-icons\">perm_identity</i>Votre Profil</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">timeline</i>Satistique</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">search</i>Recherche</a></li>


    {% else %}

        <li>
            <div class=\"background\">
                <a class=\"waves-effect waves-light btn \" id=\"connexion\">Connexion</a>
                <a class=\"waves-effect waves-light btn \" id=\"inscription\">inscription</a>
            </div>
        </li>


        <li><a class=\"waves-effect tooltipped \" data-tooltip=\"Ici vous pouvez mettre en vente vos plats fait maison :)\" href=\"{{ url(\"editor\") }}\">Partagez vos plats !</a></li>
        <li><a class=\"waves-effect\" href=\"{{ url(\"index\") }}\">Vos ventes en cours</a></li>
        <li><a class=\"waves-effect\" href=\"\"><i class=\"material-icons\">perm_identity</i>Votre Profil</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">timeline</i>Satistique</a></li>
        <li><a class=\"waves-effect\" href=\"#!\"><i class=\"material-icons\">search</i>Recherche</a></li>


    {% endif %}






</ul>


<a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>


", "components/_sidebarleft.html.twig", "C:\\xampp\\htdocs\\HomEat Git\\HomEat\\templates\\components\\_sidebarleft.html.twig");
    }
}
