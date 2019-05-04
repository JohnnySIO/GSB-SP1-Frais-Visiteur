<?php

/* GSBVisiteurBundle:ChoixFrais:Choix.html.twig */
class __TwigTemplate_c19f5a0c6e34bf1a958e903fa3a33de76cbd25364ea6c09f73984796a67dad00 extends Twig_Template
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
        $__internal_34dcc6a27ccbef7e3608cd238203a52ef0538dc047feca6d161806672b57b5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dcc6a27ccbef7e3608cd238203a52ef0538dc047feca6d161806672b57b5fa->enter($__internal_34dcc6a27ccbef7e3608cd238203a52ef0538dc047feca6d161806672b57b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:Choix.html.twig"));

        $__internal_fcad697b2d3b14603963a5e71c811d1affd88f1d397325af392a50e2b0636717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcad697b2d3b14603963a5e71c811d1affd88f1d397325af392a50e2b0636717->enter($__internal_fcad697b2d3b14603963a5e71c811d1affd88f1d397325af392a50e2b0636717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:Choix.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Visiteur ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo " </title>

\t</head>

\t<body>
\t\t<br>
\t\t<br>
\t\t<h3><center>Ajouter un frais</center></h3>

\t\t<br>
\t\t<br>

\t\t<center>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_formulaire");
        echo "\">forfaitisé</a>
\t\t\t<a>|</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_formulaire");
        echo "\">hors forfait</a>
\t\t</center>
    
\t</body>
</html>
";
        
        $__internal_34dcc6a27ccbef7e3608cd238203a52ef0538dc047feca6d161806672b57b5fa->leave($__internal_34dcc6a27ccbef7e3608cd238203a52ef0538dc047feca6d161806672b57b5fa_prof);

        
        $__internal_fcad697b2d3b14603963a5e71c811d1affd88f1d397325af392a50e2b0636717->leave($__internal_fcad697b2d3b14603963a5e71c811d1affd88f1d397325af392a50e2b0636717_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:ChoixFrais:Choix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  47 => 18,  31 => 5,  25 => 1,);
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
\t\t<meta charset=\"utf-8\">
\t\t<title>Visiteur {{ app.session.get('loginVis')}} </title>

\t</head>

\t<body>
\t\t<br>
\t\t<br>
\t\t<h3><center>Ajouter un frais</center></h3>

\t\t<br>
\t\t<br>

\t\t<center>
\t\t\t<a href=\"{{ path('gsb_lignefraisforfait_formulaire') }}\">forfaitisé</a>
\t\t\t<a>|</a>
\t\t\t<a href=\"{{ path('gsb_lignefraishorsforfait_formulaire') }}\">hors forfait</a>
\t\t</center>
    
\t</body>
</html>
", "GSBVisiteurBundle:ChoixFrais:Choix.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/ChoixFrais/Choix.html.twig");
    }
}
