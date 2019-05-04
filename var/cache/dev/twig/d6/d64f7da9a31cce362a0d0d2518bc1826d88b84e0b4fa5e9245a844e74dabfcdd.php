<?php

/* GSBVisiteurBundle:Form:renseignerLigneFraisForfait.html.twig */
class __TwigTemplate_b759fc552bf9a878cd000ab19ba64538051e80765aee8fe3b6105735087c84e9 extends Twig_Template
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
        $__internal_d8d8d28476443385fb1eebd942f4c715872fb393c6b1211015d1e84497b7919a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d8d28476443385fb1eebd942f4c715872fb393c6b1211015d1e84497b7919a->enter($__internal_d8d8d28476443385fb1eebd942f4c715872fb393c6b1211015d1e84497b7919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:renseignerLigneFraisForfait.html.twig"));

        $__internal_6d9ac3dfd72a91629ed966c9eb727d5f31ee1904feabd4d15b010d8d8199fb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9ac3dfd72a91629ed966c9eb727d5f31ee1904feabd4d15b010d8d8199fb6d->enter($__internal_6d9ac3dfd72a91629ed966c9eb727d5f31ee1904feabd4d15b010d8d8199fb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:renseignerLigneFraisForfait.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/microcms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <title>Formulaire Visiteur</title>

    </head>

    <body>
    <h3><center>Formulaire Ligne Frais Forfait</center></h3>

        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
       
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
     
         ";
        
        $__internal_d8d8d28476443385fb1eebd942f4c715872fb393c6b1211015d1e84497b7919a->leave($__internal_d8d8d28476443385fb1eebd942f4c715872fb393c6b1211015d1e84497b7919a_prof);

        
        $__internal_6d9ac3dfd72a91629ed966c9eb727d5f31ee1904feabd4d15b010d8d8199fb6d->leave($__internal_6d9ac3dfd72a91629ed966c9eb727d5f31ee1904feabd4d15b010d8d8199fb6d_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:renseignerLigneFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  53 => 18,  48 => 16,  37 => 8,  33 => 7,  25 => 1,);
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
        <link href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('/css/microcms.css') }}\" rel=\"stylesheet\">
        <title>Formulaire Visiteur</title>

    </head>

    <body>
    <h3><center>Formulaire Ligne Frais Forfait</center></h3>

        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}
     
         ", "GSBVisiteurBundle:Form:renseignerLigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/renseignerLigneFraisForfait.html.twig");
    }
}
