<?php

/* GSBVisiteurBundle:Form:formulaireVisiteur.html.twig */
class __TwigTemplate_a2aae0bfba37c6067ca297731bd7689e74603461c9475dc23f0f96f5374e3e4d extends Twig_Template
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
        $__internal_8cfce88951daf04ce2a2313a6af245632dc01bf51714886769551c6efac19b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfce88951daf04ce2a2313a6af245632dc01bf51714886769551c6efac19b2b->enter($__internal_8cfce88951daf04ce2a2313a6af245632dc01bf51714886769551c6efac19b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireVisiteur.html.twig"));

        $__internal_b2c0d550cdfb0459f60561227f831c2fce2782f4eff5b893a89c83ba5c9bea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c0d550cdfb0459f60561227f831c2fce2782f4eff5b893a89c83ba5c9bea72->enter($__internal_b2c0d550cdfb0459f60561227f831c2fce2782f4eff5b893a89c83ba5c9bea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireVisiteur.html.twig"));

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
    <h3><center>Formulaire Visiteur</center></h3>

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
        
        $__internal_8cfce88951daf04ce2a2313a6af245632dc01bf51714886769551c6efac19b2b->leave($__internal_8cfce88951daf04ce2a2313a6af245632dc01bf51714886769551c6efac19b2b_prof);

        
        $__internal_b2c0d550cdfb0459f60561227f831c2fce2782f4eff5b893a89c83ba5c9bea72->leave($__internal_b2c0d550cdfb0459f60561227f831c2fce2782f4eff5b893a89c83ba5c9bea72_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireVisiteur.html.twig";
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
    <h3><center>Formulaire Visiteur</center></h3>

        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}

     
         ", "GSBVisiteurBundle:Form:formulaireVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireVisiteur.html.twig");
    }
}
