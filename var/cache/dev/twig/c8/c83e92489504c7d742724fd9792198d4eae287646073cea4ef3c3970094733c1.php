<?php

/* GSBVisiteurBundle:Form:formulaireEtat.html.twig */
class __TwigTemplate_777375f85398f6413cffac5a3dc6aa370f89f8494137d6f6c410f6cb7db2f38b extends Twig_Template
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
        $__internal_c451963c34ca04a4ce35819183083367f0035975ff8c7f54ab127847ba3ce9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c451963c34ca04a4ce35819183083367f0035975ff8c7f54ab127847ba3ce9f4->enter($__internal_c451963c34ca04a4ce35819183083367f0035975ff8c7f54ab127847ba3ce9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireEtat.html.twig"));

        $__internal_5bfe0a12f57b4ab0d6db032d0db48b70dad9aee60f620285eae14ad76ca4c198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfe0a12f57b4ab0d6db032d0db48b70dad9aee60f620285eae14ad76ca4c198->enter($__internal_5bfe0a12f57b4ab0d6db032d0db48b70dad9aee60f620285eae14ad76ca4c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireEtat.html.twig"));

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
    <h3><center>Formulaire Etat</center></h3>
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
        
        $__internal_c451963c34ca04a4ce35819183083367f0035975ff8c7f54ab127847ba3ce9f4->leave($__internal_c451963c34ca04a4ce35819183083367f0035975ff8c7f54ab127847ba3ce9f4_prof);

        
        $__internal_5bfe0a12f57b4ab0d6db032d0db48b70dad9aee60f620285eae14ad76ca4c198->leave($__internal_5bfe0a12f57b4ab0d6db032d0db48b70dad9aee60f620285eae14ad76ca4c198_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireEtat.html.twig";
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
        <title>Formulaire Visiteur</title>

    </head>

    <body>
    <h3><center>Formulaire Etat</center></h3>
        {{ form_start(form) }}

        {{ form_errors(form) }}
       
        {{ form_end(form)}}
         ", "GSBVisiteurBundle:Form:formulaireEtat.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireEtat.html.twig");
    }
}
