<?php

/* GSBVisiteurBundle:Form:formulaireFraisForfait.html.twig */
class __TwigTemplate_de157887e9d85c3e523ad27149c40fef3c04506276531a95e89ad9874d50ac2b extends Twig_Template
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
        $__internal_976e8bada19f5410eeba35abd833564a2a8be973515283125abe9519537c2c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976e8bada19f5410eeba35abd833564a2a8be973515283125abe9519537c2c79->enter($__internal_976e8bada19f5410eeba35abd833564a2a8be973515283125abe9519537c2c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireFraisForfait.html.twig"));

        $__internal_c8c71b491fe45680a841620bc2ccba1a4b0c3bca97e83ba22570330bc885fde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c71b491fe45680a841620bc2ccba1a4b0c3bca97e83ba22570330bc885fde7->enter($__internal_c8c71b491fe45680a841620bc2ccba1a4b0c3bca97e83ba22570330bc885fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireFraisForfait.html.twig"));

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
        <title>Formulaire Frais Forfait</title>

    </head>

    <body>
    <h3><center>Formulaire Frais Forfait</center></h3>

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
        
        $__internal_976e8bada19f5410eeba35abd833564a2a8be973515283125abe9519537c2c79->leave($__internal_976e8bada19f5410eeba35abd833564a2a8be973515283125abe9519537c2c79_prof);

        
        $__internal_c8c71b491fe45680a841620bc2ccba1a4b0c3bca97e83ba22570330bc885fde7->leave($__internal_c8c71b491fe45680a841620bc2ccba1a4b0c3bca97e83ba22570330bc885fde7_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireFraisForfait.html.twig";
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
        <title>Formulaire Frais Forfait</title>

    </head>

    <body>
    <h3><center>Formulaire Frais Forfait</center></h3>

        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}", "GSBVisiteurBundle:Form:formulaireFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireFraisForfait.html.twig");
    }
}
