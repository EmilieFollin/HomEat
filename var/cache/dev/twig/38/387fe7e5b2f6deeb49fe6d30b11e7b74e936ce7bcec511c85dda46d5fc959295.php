<?php

/* components/_onglet.html.twig */
class __TwigTemplate_04cc7633f4899838bed39b98527d636e49b989e399632cd6769a74e6b0402fb9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/_onglet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/_onglet.html.twig"));

        // line 2
        echo "
<div class=\"onglet-retour-container\">
    <a class=\"onglet onglet-retour\"></a>
</div>

<div class=\"onglet-menu-container\">
    <a class=\"onglet onglet-menu\"></a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_onglet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#             ONGLET & MENU             #}

<div class=\"onglet-retour-container\">
    <a class=\"onglet onglet-retour\"></a>
</div>

<div class=\"onglet-menu-container\">
    <a class=\"onglet onglet-menu\"></a>
</div>
", "components/_onglet.html.twig", "C:\\xampp\\htdocs\\HomEat Git\\HomEat\\templates\\components\\_onglet.html.twig");
    }
}
