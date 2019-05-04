<?php

/* GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig */
class __TwigTemplate_435bdbe726211882243ec1b98c3b913c243985b1ebfca7b428b890be89619828 extends Twig_Template
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
        $__internal_9f68f8652755823e504ea444286354d86f45c6d170c243d9114724d3b337b7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f68f8652755823e504ea444286354d86f45c6d170c243d9114724d3b337b7c4->enter($__internal_9f68f8652755823e504ea444286354d86f45c6d170c243d9114724d3b337b7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig"));

        $__internal_0f1a1ea26c29a533f715284de317704a57f1304458ea0bd53883b6a3888eed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1a1ea26c29a533f715284de317704a57f1304458ea0bd53883b6a3888eed0c->enter($__internal_0f1a1ea26c29a533f715284de317704a57f1304458ea0bd53883b6a3888eed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig"));

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
\t\t<h3><center>Consulter un frais du ";
        // line 38
        echo twig_escape_filter($this->env, ($context["mois"] ?? $this->getContext($context, "mois")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["anneeCours"] ?? $this->getContext($context, "anneeCours")), "html", null, true);
        echo "</center></h3>

\t\t<br><br><br><br>

\t\t<center>
\t\t\t<form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Forfaitisé\" />\t\t\t
\t\t\t</form>
\t\t\t<br>
\t\t\t<form action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Hors forfait\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
";
        
        $__internal_9f68f8652755823e504ea444286354d86f45c6d170c243d9114724d3b337b7c4->leave($__internal_9f68f8652755823e504ea444286354d86f45c6d170c243d9114724d3b337b7c4_prof);

        
        $__internal_0f1a1ea26c29a533f715284de317704a57f1304458ea0bd53883b6a3888eed0c->leave($__internal_0f1a1ea26c29a533f715284de317704a57f1304458ea0bd53883b6a3888eed0c_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig";
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
\t\t<h3><center>Consulter un frais du {{mois}}/{{anneeCours}}</center></h3>

\t\t<br><br><br><br>

\t\t<center>
\t\t\t<form action=\"{{ path('gsb_lignefraisforfait_consulter', {'mois' : mois}) }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Forfaitisé\" />\t\t\t
\t\t\t</form>
\t\t\t<br>
\t\t\t<form action=\"{{ path('gsb_lignefraishorsforfait_consulter', {'mois' : mois}) }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Hors forfait\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
", "GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/ChoixFrais/ChoixConsulter.html.twig");
    }
}
