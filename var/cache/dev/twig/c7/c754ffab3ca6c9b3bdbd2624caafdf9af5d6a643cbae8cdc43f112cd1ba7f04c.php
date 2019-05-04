<?php

/* GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig */
class __TwigTemplate_10e1d08b6c0cd8f66bb77ad52c7b1cba8fe10d080228921e8f1346ab13c85c2c extends Twig_Template
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
        $__internal_e4d1f24e7bee83d086c19bee3ac208786ccf5fbf316ccefd45cbe2d5539b33e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d1f24e7bee83d086c19bee3ac208786ccf5fbf316ccefd45cbe2d5539b33e0->enter($__internal_e4d1f24e7bee83d086c19bee3ac208786ccf5fbf316ccefd45cbe2d5539b33e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig"));

        $__internal_579386fd49466bde00831c5433cf453923882602d36849507be26d6946bcd094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579386fd49466bde00831c5433cf453923882602d36849507be26d6946bcd094->enter($__internal_579386fd49466bde00831c5433cf453923882602d36849507be26d6946bcd094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Visiteur ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo " </title>
\t\t<style>
\t\t\th3{
\t\t\t\tcolor:white;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:500px;
\t\t\t\theight:40px;
\t\t\t\tborder-radius: 10px;
\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\tline-height:40px;
\t\t\t}

\t\t\ta {
\t\t\t\tcolor:royalblue;
\t\t\t}
\t\t\t
\t\t\t.btn{
\t\t\t\twidth:200px;
\t\t\t\theight:50px;
\t\t\t\tbackground-color:#9090ff;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t\tfont-size:20px;
\t\t\t\tfont-weight:bold;
\t\t\t}
\t\t
\t\t</style>
\t</head>

\t<body>
\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t\t<br>
\t\t<h3><center>Ajouter un frais du ";
        // line 38
        echo twig_escape_filter($this->env, ($context["moisCours"] ?? $this->getContext($context, "moisCours")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["anneeCours"] ?? $this->getContext($context, "anneeCours")), "html", null, true);
        echo "</center></h3>

\t\t<br><br><br><br>

\t\t<center>
\t\t\t<form action=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_formulaire");
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Forfaitisé\" />\t\t\t
\t\t\t</form>
\t\t\t<br>
\t\t\t<form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_formulaire");
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Hors forfait\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
";
        
        $__internal_e4d1f24e7bee83d086c19bee3ac208786ccf5fbf316ccefd45cbe2d5539b33e0->leave($__internal_e4d1f24e7bee83d086c19bee3ac208786ccf5fbf316ccefd45cbe2d5539b33e0_prof);

        
        $__internal_579386fd49466bde00831c5433cf453923882602d36849507be26d6946bcd094->leave($__internal_579386fd49466bde00831c5433cf453923882602d36849507be26d6946bcd094_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 47,  80 => 43,  70 => 38,  65 => 36,  31 => 5,  25 => 1,);
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
\t\t<style>
\t\t\th3{
\t\t\t\tcolor:white;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:500px;
\t\t\t\theight:40px;
\t\t\t\tborder-radius: 10px;
\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\tline-height:40px;
\t\t\t}

\t\t\ta {
\t\t\t\tcolor:royalblue;
\t\t\t}
\t\t\t
\t\t\t.btn{
\t\t\t\twidth:200px;
\t\t\t\theight:50px;
\t\t\t\tbackground-color:#9090ff;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t\tfont-size:20px;
\t\t\t\tfont-weight:bold;
\t\t\t}
\t\t
\t\t</style>
\t</head>

\t<body>
\t\t<a href=\"{{ path('gsb_fichefrais') }}\">Retour fiche de vos frais</a>
\t\t<br>
\t\t<h3><center>Ajouter un frais du {{moisCours}}/{{anneeCours}}</center></h3>

\t\t<br><br><br><br>

\t\t<center>
\t\t\t<form action=\"{{ path('gsb_lignefraisforfait_formulaire') }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Forfaitisé\" />\t\t\t
\t\t\t</form>
\t\t\t<br>
\t\t\t<form action=\"{{ path('gsb_lignefraishorsforfait_formulaire') }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Hors forfait\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
", "GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/ChoixFrais/ChoixForm.html.twig");
    }
}
