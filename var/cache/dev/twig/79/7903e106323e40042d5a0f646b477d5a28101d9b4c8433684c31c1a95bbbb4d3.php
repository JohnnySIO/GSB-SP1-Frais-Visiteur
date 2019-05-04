<?php

/* GSBVisiteurBundle:Form:valideLigneFraisForfait.html.twig */
class __TwigTemplate_fc3cc06bc8fe2a086889075d7641cf19391b9a1ab097d631e253db2ed9b33e82 extends Twig_Template
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
        $__internal_4eea8536c24e33d7238eb0cd6d0d5cf10aba0dfe624da5a54cda051432860816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eea8536c24e33d7238eb0cd6d0d5cf10aba0dfe624da5a54cda051432860816->enter($__internal_4eea8536c24e33d7238eb0cd6d0d5cf10aba0dfe624da5a54cda051432860816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideLigneFraisForfait.html.twig"));

        $__internal_d67ba1dd5a9b14bac3433e0a0974f75bbaff5dde69f30aa0bfe1ffebdc2a5d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67ba1dd5a9b14bac3433e0a0974f75bbaff5dde69f30aa0bfe1ffebdc2a5d52->enter($__internal_d67ba1dd5a9b14bac3433e0a0974f75bbaff5dde69f30aa0bfe1ffebdc2a5d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideLigneFraisForfait.html.twig"));

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
        Envoi du Ligne Frais Forfait ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_4eea8536c24e33d7238eb0cd6d0d5cf10aba0dfe624da5a54cda051432860816->leave($__internal_4eea8536c24e33d7238eb0cd6d0d5cf10aba0dfe624da5a54cda051432860816_prof);

        
        $__internal_d67ba1dd5a9b14bac3433e0a0974f75bbaff5dde69f30aa0bfe1ffebdc2a5d52->leave($__internal_d67ba1dd5a9b14bac3433e0a0974f75bbaff5dde69f30aa0bfe1ffebdc2a5d52_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideLigneFraisForfait.html.twig";
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
        Envoi du Ligne Frais Forfait {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideLigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideLigneFraisForfait.html.twig");
    }
}
