<?php

/* GSBVisiteurBundle:Form:valideVisiteur.html.twig */
class __TwigTemplate_407494ddb02cf31bab685802e589b983c096c0932c3243621822f0081a8491b6 extends Twig_Template
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
        $__internal_615846c459b1fab51a6b7ced3e7be73e60b3889154b49c59d7ada76b6309aded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615846c459b1fab51a6b7ced3e7be73e60b3889154b49c59d7ada76b6309aded->enter($__internal_615846c459b1fab51a6b7ced3e7be73e60b3889154b49c59d7ada76b6309aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideVisiteur.html.twig"));

        $__internal_32055f6e1323e9ce1845ac0e83f0a371c11c15385d545036b32e47569158791a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32055f6e1323e9ce1845ac0e83f0a371c11c15385d545036b32e47569158791a->enter($__internal_32055f6e1323e9ce1845ac0e83f0a371c11c15385d545036b32e47569158791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:valideVisiteur.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Formulaire Visiteur</title>

    </head>

    <body>
        Envoi du Visiteur ";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " réussi
    </body>
</html>
         ";
        
        $__internal_615846c459b1fab51a6b7ced3e7be73e60b3889154b49c59d7ada76b6309aded->leave($__internal_615846c459b1fab51a6b7ced3e7be73e60b3889154b49c59d7ada76b6309aded_prof);

        
        $__internal_32055f6e1323e9ce1845ac0e83f0a371c11c15385d545036b32e47569158791a->leave($__internal_32055f6e1323e9ce1845ac0e83f0a371c11c15385d545036b32e47569158791a_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:valideVisiteur.html.twig";
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

        <title>Formulaire Visiteur</title>

    </head>

    <body>
        Envoi du Visiteur {{ id }} réussi
    </body>
</html>
         ", "GSBVisiteurBundle:Form:valideVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/valideVisiteur.html.twig");
    }
}
