<?php

/* GSBVisiteurBundle:Form:FicheFrais.html.twig */
class __TwigTemplate_5f398009bd4bc7209c209ae878d5bc457fbd25c8c09e7c586a635eec2f416acb extends Twig_Template
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
        $__internal_04abd4158cde4de35299518d225cf4e515347420e4b3b1bbf017139508e24dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04abd4158cde4de35299518d225cf4e515347420e4b3b1bbf017139508e24dc4->enter($__internal_04abd4158cde4de35299518d225cf4e515347420e4b3b1bbf017139508e24dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:FicheFrais.html.twig"));

        $__internal_e5c3ce8e50aad5917e0e256e541fa848eb5abd41c1927080599062acdfec2419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c3ce8e50aad5917e0e256e541fa848eb5abd41c1927080599062acdfec2419->enter($__internal_e5c3ce8e50aad5917e0e256e541fa848eb5abd41c1927080599062acdfec2419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:FicheFrais.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<head>
        <title>Visiteur ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo "</title>
\t<style>
\t\tbody{
\t\t\tbackground-color:#B4B4FF;
\t\t}
\t\th3{
\t\t\tcolor:white;
\t\t\tbackground-color:royalblue;
\t\t\twidth:500px;
\t\t\theight:40px;
\t\t\tborder-radius: 10px;
\t\t\tmargin-left:auto;
\t\t\tmargin-right:auto;
\t\t\tline-height:40px;
\t\t}
\t\t.champs{
\t\t\tcolor:royalblue;
\t\t\tpadding: 10px;
\t\t\tbackground-color:white;
\t\t\tborder-radius: 10px;
\t\t}
\t\t.btn{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:royalblue;
\t\t\twidth:120px;
\t\t\tfont-size:20px;
\t\t\tborder-radius: 10px;
\t\t}

\t</style>
\t</head>

\t<body>
\t<center>
\t\t<h3>Création d'une nouvelle fiche</h3>

\t\t<br><br><br><br>

\t\t<i class=\"champs\">Votre fiche du ";
        // line 43
        echo twig_escape_filter($this->env, ($context["mois"] ?? $this->getContext($context, "mois")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["anneeCours"] ?? $this->getContext($context, "anneeCours")), "html", null, true);
        echo " est désormais crée</i>

\t\t<br><br><br><br>
\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t<button type=\"submit\" class=\"btn\">Continuer</button>

\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</center>
\t</body>
</html>

\t
            
         
";
        
        $__internal_04abd4158cde4de35299518d225cf4e515347420e4b3b1bbf017139508e24dc4->leave($__internal_04abd4158cde4de35299518d225cf4e515347420e4b3b1bbf017139508e24dc4_prof);

        
        $__internal_e5c3ce8e50aad5917e0e256e541fa848eb5abd41c1927080599062acdfec2419->leave($__internal_e5c3ce8e50aad5917e0e256e541fa848eb5abd41c1927080599062acdfec2419_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:FicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 52,  87 => 50,  80 => 46,  72 => 43,  30 => 4,  25 => 1,);
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
        <title>Visiteur {{ app.session.get('loginVis')}}</title>
\t<style>
\t\tbody{
\t\t\tbackground-color:#B4B4FF;
\t\t}
\t\th3{
\t\t\tcolor:white;
\t\t\tbackground-color:royalblue;
\t\t\twidth:500px;
\t\t\theight:40px;
\t\t\tborder-radius: 10px;
\t\t\tmargin-left:auto;
\t\t\tmargin-right:auto;
\t\t\tline-height:40px;
\t\t}
\t\t.champs{
\t\t\tcolor:royalblue;
\t\t\tpadding: 10px;
\t\t\tbackground-color:white;
\t\t\tborder-radius: 10px;
\t\t}
\t\t.btn{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:royalblue;
\t\t\twidth:120px;
\t\t\tfont-size:20px;
\t\t\tborder-radius: 10px;
\t\t}

\t</style>
\t</head>

\t<body>
\t<center>
\t\t<h3>Création d'une nouvelle fiche</h3>

\t\t<br><br><br><br>

\t\t<i class=\"champs\">Votre fiche du {{mois}}/{{anneeCours}} est désormais crée</i>

\t\t<br><br><br><br>
\t\t{{ form_start(form) }}

\t\t<button type=\"submit\" class=\"btn\">Continuer</button>

\t\t{{ form_errors(form) }}

\t\t{{ form_end(form)}}
\t</center>
\t</body>
</html>

\t
            
         
", "GSBVisiteurBundle:Form:FicheFrais.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/FicheFrais.html.twig");
    }
}
