<?php

/* onglets/menu.html.twig */
class __TwigTemplate_1ad36f2531e0279ea2be12a9f856a174a78ff888ca91db9d0a651037d8a3cb3b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "onglets/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "onglets/menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "        <div class=\"optn-backpage\">
            <div class=\"optn-container col-xs-12\">
                <a class=\"optn\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("searchRecette");
        echo "\">Chercher une nouvelle Recette</a>
                <a class=\"optn\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index");
        echo "\">Mes Recettes</a>
                <a class=\"optn\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("editor");
        echo "\">Editeur de Recettes</a>
                <a class=\"optn\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("personnalisation");
        echo "\">Personalisation </a>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "onglets/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block menu %}
        <div class=\"optn-backpage\">
            <div class=\"optn-container col-xs-12\">
                <a class=\"optn\" href=\"{{ url('searchRecette') }}\">Chercher une nouvelle Recette</a>
                <a class=\"optn\" href=\"{{ url('index') }}\">Mes Recettes</a>
                <a class=\"optn\" href=\"{{ url('editor') }}\">Editeur de Recettes</a>
                <a class=\"optn\" href=\"{{ url('personnalisation') }}\">Personalisation </a>
            </div>
        </div>
{% endblock %}", "onglets/menu.html.twig", "C:\\xampp\\htdocs\\HomEat Git\\HomEat\\templates\\onglets\\menu.html.twig");
    }
}
