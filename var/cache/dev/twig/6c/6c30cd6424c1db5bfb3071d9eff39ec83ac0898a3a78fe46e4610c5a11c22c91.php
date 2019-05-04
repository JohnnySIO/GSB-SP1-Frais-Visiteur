<?php

/* GSBVisiteurBundle:Form:formulaireFicheFrais.html.twig */
class __TwigTemplate_efae27a5a47a5c73f4c9a1ee159a6ea9df6ca2a54ba44f6cad85b2e9de351654 extends Twig_Template
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
        $__internal_84da590a23eaa5ca9f3da27219d7092172e675f0fa54e54c552dd56a4a248e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84da590a23eaa5ca9f3da27219d7092172e675f0fa54e54c552dd56a4a248e29->enter($__internal_84da590a23eaa5ca9f3da27219d7092172e675f0fa54e54c552dd56a4a248e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireFicheFrais.html.twig"));

        $__internal_e3f08ce3b051ba85b6c2aa29a1be0e63ecd3995cad1601d5b1a6cf5de2252379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f08ce3b051ba85b6c2aa29a1be0e63ecd3995cad1601d5b1a6cf5de2252379->enter($__internal_e3f08ce3b051ba85b6c2aa29a1be0e63ecd3995cad1601d5b1a6cf5de2252379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:formulaireFicheFrais.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<head>
        <title>Formulaire Fiche Frais</title>

\t</head>

\t<body>
\t\t<h3><center>Formulaire Fiche Frais</center></h3>
\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t\t<button type=\"submit\">Enregistrer</button>
\t       
\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</body>
</html>

\t
            
         
";
        
        $__internal_84da590a23eaa5ca9f3da27219d7092172e675f0fa54e54c552dd56a4a248e29->leave($__internal_84da590a23eaa5ca9f3da27219d7092172e675f0fa54e54c552dd56a4a248e29_prof);

        
        $__internal_e3f08ce3b051ba85b6c2aa29a1be0e63ecd3995cad1601d5b1a6cf5de2252379->leave($__internal_e3f08ce3b051ba85b6c2aa29a1be0e63ecd3995cad1601d5b1a6cf5de2252379_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:formulaireFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  41 => 12,  36 => 10,  25 => 1,);
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
\t<head>
        <title>Formulaire Fiche Frais</title>

\t</head>

\t<body>
\t\t<h3><center>Formulaire Fiche Frais</center></h3>
\t\t{{ form_start(form) }}

\t\t{{ form_errors(form) }}

\t\t<button type=\"submit\">Enregistrer</button>
\t       
\t\t{{ form_end(form)}}
\t</body>
</html>

\t
            
         
", "GSBVisiteurBundle:Form:formulaireFicheFrais.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/formulaireFicheFrais.html.twig");
    }
}
