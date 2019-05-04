<?php

/* GSBVisiteurBundle:Form:renseignerFicheFrais.html.twig */
class __TwigTemplate_2e01fe9d7f23c573896ae9dd3aef479aad6521c9e72701301d1067ef4628af6b extends Twig_Template
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
        $__internal_b1543ccee3271635a1fe735e17c82889fafd4f19374890edfbb5d40a9ac7d71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1543ccee3271635a1fe735e17c82889fafd4f19374890edfbb5d40a9ac7d71a->enter($__internal_b1543ccee3271635a1fe735e17c82889fafd4f19374890edfbb5d40a9ac7d71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:renseignerFicheFrais.html.twig"));

        $__internal_e2355dfa42dde38274f0a2905c7031289e789c537c28f4227265af0090814e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2355dfa42dde38274f0a2905c7031289e789c537c28f4227265af0090814e60->enter($__internal_e2355dfa42dde38274f0a2905c7031289e789c537c28f4227265af0090814e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:renseignerFicheFrais.html.twig"));

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
        <title>Formulaire Fiche Frais</title>

    </head>

    <body>
    <h3><center>Formulaire Fiche Frais</center></h3>
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
        echo "
            
         
";
        
        $__internal_b1543ccee3271635a1fe735e17c82889fafd4f19374890edfbb5d40a9ac7d71a->leave($__internal_b1543ccee3271635a1fe735e17c82889fafd4f19374890edfbb5d40a9ac7d71a_prof);

        
        $__internal_e2355dfa42dde38274f0a2905c7031289e789c537c28f4227265af0090814e60->leave($__internal_e2355dfa42dde38274f0a2905c7031289e789c537c28f4227265af0090814e60_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:renseignerFicheFrais.html.twig";
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
        <title>Formulaire Fiche Frais</title>

    </head>

    <body>
    <h3><center>Formulaire Fiche Frais</center></h3>
        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}
            
         
", "GSBVisiteurBundle:Form:renseignerFicheFrais.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/renseignerFicheFrais.html.twig");
    }
}
