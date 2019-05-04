<?php

/* GSBVisiteurBundle:Form:formulaireLigneFraisHorsForfait.html.twig */
class __TwigTemplate_2d4ae1f8afe2076508c95dc29df6a2ef7467413df5c09076892399961d7446ec extends Twig_Template
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
        $__internal_a4a30038b91c21e0266941bde8940d84d70987063a130fa8f9df966338348343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a30038b91c21e0266941bde8940d84d70987063a130fa8f9df966338348343->enter($__internal_a4a30038b91c21e0266941bde8940d84d70987063a130fa8f9df966338348343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireLigneFraisHorsForfait.html.twig"));

        $__internal_18ff1fc76395870ce89f7e14861a360a655697352070b969f2ce40dbff9c7ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ff1fc76395870ce89f7e14861a360a655697352070b969f2ce40dbff9c7ebc->enter($__internal_18ff1fc76395870ce89f7e14861a360a655697352070b969f2ce40dbff9c7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireLigneFraisHorsForfait.html.twig"));

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
        <title>Formulaire Frais Hors Forfait</title>

    </head>

    <body>
    <h3><center>Formulaire Frais Hors Forfait</center></h3>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
       
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_a4a30038b91c21e0266941bde8940d84d70987063a130fa8f9df966338348343->leave($__internal_a4a30038b91c21e0266941bde8940d84d70987063a130fa8f9df966338348343_prof);

        
        $__internal_18ff1fc76395870ce89f7e14861a360a655697352070b969f2ce40dbff9c7ebc->leave($__internal_18ff1fc76395870ce89f7e14861a360a655697352070b969f2ce40dbff9c7ebc_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireLigneFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  52 => 17,  47 => 15,  37 => 8,  33 => 7,  25 => 1,);
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
        <title>Formulaire Frais Hors Forfait</title>

    </head>

    <body>
    <h3><center>Formulaire Frais Hors Forfait</center></h3>
        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}", "GSBVisiteurBundle:Form:formulaireLigneFraisHorsForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireLigneFraisHorsForfait.html.twig");
    }
}
