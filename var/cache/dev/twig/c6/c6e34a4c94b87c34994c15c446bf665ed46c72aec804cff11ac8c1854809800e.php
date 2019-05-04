<?php

/* GSBVisiteurBundle:Form:valideLigneFraisHorsForfait.html.twig */
class __TwigTemplate_278d5cf392fee8bf21f39c908084cdf53fe2f4d1ee9bcf3923cfe15fc3fc9d08 extends Twig_Template
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
        $__internal_054c0d68473705aec89cd61509cedb803b8ddf2b8933e53c69d6e92643088673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054c0d68473705aec89cd61509cedb803b8ddf2b8933e53c69d6e92643088673->enter($__internal_054c0d68473705aec89cd61509cedb803b8ddf2b8933e53c69d6e92643088673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideLigneFraisHorsForfait.html.twig"));

        $__internal_84532fbc6f49faab32004f5ee61607b4b04ddf6a770ce09619b82b83102ce526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84532fbc6f49faab32004f5ee61607b4b04ddf6a770ce09619b82b83102ce526->enter($__internal_84532fbc6f49faab32004f5ee61607b4b04ddf6a770ce09619b82b83102ce526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideLigneFraisHorsForfait.html.twig"));

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
        Envoi du Ligne Frais Hors Forfait ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_054c0d68473705aec89cd61509cedb803b8ddf2b8933e53c69d6e92643088673->leave($__internal_054c0d68473705aec89cd61509cedb803b8ddf2b8933e53c69d6e92643088673_prof);

        
        $__internal_84532fbc6f49faab32004f5ee61607b4b04ddf6a770ce09619b82b83102ce526->leave($__internal_84532fbc6f49faab32004f5ee61607b4b04ddf6a770ce09619b82b83102ce526_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideLigneFraisHorsForfait.html.twig";
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
        Envoi du Ligne Frais Hors Forfait {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideLigneFraisHorsForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideLigneFraisHorsForfait.html.twig");
    }
}
