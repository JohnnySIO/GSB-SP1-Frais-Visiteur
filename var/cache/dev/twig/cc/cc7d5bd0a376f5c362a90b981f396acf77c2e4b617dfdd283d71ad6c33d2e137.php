<?php

/* GSBVisiteurBundle:Form:valideFraisForfait.html.twig */
class __TwigTemplate_8d6d2fb94590de0802bcadd710bc9f4ee3fd5341deafe0ccd6b08b695cae0f35 extends Twig_Template
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
        $__internal_fbbda19fab0bcafed624172f238b3918b7ef2c0040d47c718ad1780742d22f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbda19fab0bcafed624172f238b3918b7ef2c0040d47c718ad1780742d22f56->enter($__internal_fbbda19fab0bcafed624172f238b3918b7ef2c0040d47c718ad1780742d22f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideFraisForfait.html.twig"));

        $__internal_f389c0a2d275db901786164d511af1a3081bde7783baaf1a9bfec1183794dff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f389c0a2d275db901786164d511af1a3081bde7783baaf1a9bfec1183794dff5->enter($__internal_f389c0a2d275db901786164d511af1a3081bde7783baaf1a9bfec1183794dff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideFraisForfait.html.twig"));

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
        Envoi de Frais Forfait ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_fbbda19fab0bcafed624172f238b3918b7ef2c0040d47c718ad1780742d22f56->leave($__internal_fbbda19fab0bcafed624172f238b3918b7ef2c0040d47c718ad1780742d22f56_prof);

        
        $__internal_f389c0a2d275db901786164d511af1a3081bde7783baaf1a9bfec1183794dff5->leave($__internal_f389c0a2d275db901786164d511af1a3081bde7783baaf1a9bfec1183794dff5_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideFraisForfait.html.twig";
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
        Envoi de Frais Forfait {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideFraisForfait.html.twig");
    }
}
