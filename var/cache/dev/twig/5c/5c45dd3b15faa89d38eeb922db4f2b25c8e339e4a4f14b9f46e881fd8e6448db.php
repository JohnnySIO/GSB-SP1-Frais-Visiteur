<?php

/* GSBVisiteurBundle:Form:valideFicheFrais.html.twig */
class __TwigTemplate_ba39984c480e186108e5163458b3e1cc5ba62c0f328bacd437634775030441df extends Twig_Template
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
        $__internal_79ac1750f02b04475b18d379b65fd771358136c721414b1ea40d90c7cf887b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ac1750f02b04475b18d379b65fd771358136c721414b1ea40d90c7cf887b7a->enter($__internal_79ac1750f02b04475b18d379b65fd771358136c721414b1ea40d90c7cf887b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideFicheFrais.html.twig"));

        $__internal_9c6599153ac0f5fd6dbde06b2eefcf0ed565d8f7a1993aad5db2552473df28e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6599153ac0f5fd6dbde06b2eefcf0ed565d8f7a1993aad5db2552473df28e8->enter($__internal_9c6599153ac0f5fd6dbde06b2eefcf0ed565d8f7a1993aad5db2552473df28e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideFicheFrais.html.twig"));

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
        Envoi du Fiche Frais ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_79ac1750f02b04475b18d379b65fd771358136c721414b1ea40d90c7cf887b7a->leave($__internal_79ac1750f02b04475b18d379b65fd771358136c721414b1ea40d90c7cf887b7a_prof);

        
        $__internal_9c6599153ac0f5fd6dbde06b2eefcf0ed565d8f7a1993aad5db2552473df28e8->leave($__internal_9c6599153ac0f5fd6dbde06b2eefcf0ed565d8f7a1993aad5db2552473df28e8_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideFicheFrais.html.twig";
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
        Envoi du Fiche Frais {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideFicheFrais.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideFicheFrais.html.twig");
    }
}
