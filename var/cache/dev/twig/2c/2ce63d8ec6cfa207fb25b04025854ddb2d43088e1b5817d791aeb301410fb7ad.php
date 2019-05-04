<?php

/* GSBVisiteurBundle:Form:valideEtat.html.twig */
class __TwigTemplate_a2f027d051f9ccc50de540ccde4fca964baefc6f80c19d9cf47104ef3fffee4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51bb4b08bb06dcd7e6b6b9d22c9c1f90170d3ca27a80e6d552d6c21bdc6d4836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bb4b08bb06dcd7e6b6b9d22c9c1f90170d3ca27a80e6d552d6c21bdc6d4836->enter($__internal_51bb4b08bb06dcd7e6b6b9d22c9c1f90170d3ca27a80e6d552d6c21bdc6d4836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideEtat.html.twig"));

        $__internal_714a94a7bc518d9b2ded0a4da2d8ef793b6d80e8f794e135120b702a21907395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714a94a7bc518d9b2ded0a4da2d8ef793b6d80e8f794e135120b702a21907395->enter($__internal_714a94a7bc518d9b2ded0a4da2d8ef793b6d80e8f794e135120b702a21907395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideEtat.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Formulaire Etat</title>

    </head>

    <body>
        Envoi de Etat ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_51bb4b08bb06dcd7e6b6b9d22c9c1f90170d3ca27a80e6d552d6c21bdc6d4836->leave($__internal_51bb4b08bb06dcd7e6b6b9d22c9c1f90170d3ca27a80e6d552d6c21bdc6d4836_prof);

        
        $__internal_714a94a7bc518d9b2ded0a4da2d8ef793b6d80e8f794e135120b702a21907395->leave($__internal_714a94a7bc518d9b2ded0a4da2d8ef793b6d80e8f794e135120b702a21907395_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideEtat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Formulaire Etat</title>

    </head>

    <body>
        Envoi de Etat {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideEtat.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideEtat.html.twig");
    }
}
