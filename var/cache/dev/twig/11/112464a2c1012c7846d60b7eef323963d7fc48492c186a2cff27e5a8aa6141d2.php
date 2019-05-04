<?php

/* GSBVisiteurBundle:Form:formulaireLigneFraisForfait.html.twig */
class __TwigTemplate_556d426bf90a72fd59085fca39e327f370fb6c9be025daf722ff2b86f0fd85ef extends Twig_Template
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
        $__internal_8fdafc3ba81a0a487220264391fa18d144b476e1bf17b7c475f7c6f42598b726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdafc3ba81a0a487220264391fa18d144b476e1bf17b7c475f7c6f42598b726->enter($__internal_8fdafc3ba81a0a487220264391fa18d144b476e1bf17b7c475f7c6f42598b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireLigneFraisForfait.html.twig"));

        $__internal_294a0cc57f6c4a7b57b5daec86e6260aa88870a3e1d12c5b1ae1b29b47bfa12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294a0cc57f6c4a7b57b5daec86e6260aa88870a3e1d12c5b1ae1b29b47bfa12f->enter($__internal_294a0cc57f6c4a7b57b5daec86e6260aa88870a3e1d12c5b1ae1b29b47bfa12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireLigneFraisForfait.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <title>Formulaire Visiteur</title>

    </head>

    <body>
    <h3><center>Formulaire Ligne Frais Forfait</center></h3>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t
 \t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idVis", array()), 'widget', array("selectedchoice" => ($context["idVis"] ?? $this->getContext($context, "idVis"))));
        echo "</div>

\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "moisFf", array()), 'widget', array("selectedchoice" => ($context["mois"] ?? $this->getContext($context, "mois"))));
        echo "</div>

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
       
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
     
         
";
        
        $__internal_8fdafc3ba81a0a487220264391fa18d144b476e1bf17b7c475f7c6f42598b726->leave($__internal_8fdafc3ba81a0a487220264391fa18d144b476e1bf17b7c475f7c6f42598b726_prof);

        
        $__internal_294a0cc57f6c4a7b57b5daec86e6260aa88870a3e1d12c5b1ae1b29b47bfa12f->leave($__internal_294a0cc57f6c4a7b57b5daec86e6260aa88870a3e1d12c5b1ae1b29b47bfa12f_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireLigneFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  25 => 1,);
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
        <title>Formulaire Visiteur</title>

    </head>

    <body>
    <h3><center>Formulaire Ligne Frais Forfait</center></h3>

        {{ form_start(form) }}
\t
 \t{{ form_widget(form.idVis,{selectedchoice : idVis}) }}</div>

\t{{ form_widget(form.moisFf,{selectedchoice : mois}) }}</div>

        {{ form_errors(form) }}
       
        {{ form_end(form)}}
     
         
", "GSBVisiteurBundle:Form:formulaireLigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireLigneFraisForfait.html.twig");
    }
}
