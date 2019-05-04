<?php

/* GSBVisiteurBundle:Form:formulaireMois.html.twig */
class __TwigTemplate_58b9e9598fc74cce05601d41603f0bc873704852842e3d4c6d352c440ee7d72a extends Twig_Template
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
        $__internal_c93a4ca44e7108a0fe321d7f20d3bb1c42a2dbe8f22b0f3cd47934af39c42b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93a4ca44e7108a0fe321d7f20d3bb1c42a2dbe8f22b0f3cd47934af39c42b61->enter($__internal_c93a4ca44e7108a0fe321d7f20d3bb1c42a2dbe8f22b0f3cd47934af39c42b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireMois.html.twig"));

        $__internal_52c352408b79a791e2864c06b85f2d9304dc9c62691f9e39d94e7728f4c5e50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c352408b79a791e2864c06b85f2d9304dc9c62691f9e39d94e7728f4c5e50b->enter($__internal_52c352408b79a791e2864c06b85f2d9304dc9c62691f9e39d94e7728f4c5e50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireMois.html.twig"));

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
        <title>Formulaire Mois</title>

    </head>

    <body>
    <h3><center>Formulaire Mois</center></h3>
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
        
        $__internal_c93a4ca44e7108a0fe321d7f20d3bb1c42a2dbe8f22b0f3cd47934af39c42b61->leave($__internal_c93a4ca44e7108a0fe321d7f20d3bb1c42a2dbe8f22b0f3cd47934af39c42b61_prof);

        
        $__internal_52c352408b79a791e2864c06b85f2d9304dc9c62691f9e39d94e7728f4c5e50b->leave($__internal_52c352408b79a791e2864c06b85f2d9304dc9c62691f9e39d94e7728f4c5e50b_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireMois.html.twig";
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
        <title>Formulaire Mois</title>

    </head>

    <body>
    <h3><center>Formulaire Mois</center></h3>
        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}
         ", "GSBVisiteurBundle:Form:formulaireMois.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireMois.html.twig");
    }
}
