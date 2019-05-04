<?php

/* GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig */
class __TwigTemplate_e13e8f98aaddf9dc256bb5caeff1372f7727f3e9a1bae7ebafeaff3b25315b7e extends Twig_Template
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
        $__internal_7ca56a04ff728ee3ca0455ae5db1617bd456a23fbb2ddfa8438d27c40252bae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca56a04ff728ee3ca0455ae5db1617bd456a23fbb2ddfa8438d27c40252bae2->enter($__internal_7ca56a04ff728ee3ca0455ae5db1617bd456a23fbb2ddfa8438d27c40252bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig"));

        $__internal_aa314ccf2c63be7411ba3eabcec1ed735aa5de20c4f1ea2cb7c2860ea956755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa314ccf2c63be7411ba3eabcec1ed735aa5de20c4f1ea2cb7c2860ea956755f->enter($__internal_aa314ccf2c63be7411ba3eabcec1ed735aa5de20c4f1ea2cb7c2860ea956755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig"));

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
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\ta{
\t\t\t\tcolor:white;
\t\t\t}

\t\t\t.btn{
\t\t\t\twidth:330px;
\t\t\t\theight:50px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t\tfont-size:20px;
\t\t\t\tfont-weight:bold;
\t\t\t}

\t\t</style>
\t</head>
\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t<center>
\t\t<br><br><br><br><br>
\t\t<i class=\"champs\">Frais hors forfait supprimé</i>
\t\t<br><br><br><br><br><br>
\t\t<form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">
\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à vos frais non forfaitisés\" />\t\t\t
\t\t</form>
\t</center>
</html>
";
        
        $__internal_7ca56a04ff728ee3ca0455ae5db1617bd456a23fbb2ddfa8438d27c40252bae2->leave($__internal_7ca56a04ff728ee3ca0455ae5db1617bd456a23fbb2ddfa8438d27c40252bae2_prof);

        
        $__internal_aa314ccf2c63be7411ba3eabcec1ed735aa5de20c4f1ea2cb7c2860ea956755f->leave($__internal_aa314ccf2c63be7411ba3eabcec1ed735aa5de20c4f1ea2cb7c2860ea956755f_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 38,  62 => 33,  31 => 5,  25 => 1,);
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
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\ta{
\t\t\t\tcolor:white;
\t\t\t}

\t\t\t.btn{
\t\t\t\twidth:330px;
\t\t\t\theight:50px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t\tfont-size:20px;
\t\t\t\tfont-weight:bold;
\t\t\t}

\t\t</style>
\t</head>
\t<a href=\"{{ path('gsb_fichefrais') }}\">Retour fiche de vos frais</a>
\t<center>
\t\t<br><br><br><br><br>
\t\t<i class=\"champs\">Frais hors forfait supprimé</i>
\t\t<br><br><br><br><br><br>
\t\t<form action=\"{{ path('gsb_lignefraishorsforfait_consulter', {'mois' : mois}) }}\">
\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à vos frais non forfaitisés\" />\t\t\t
\t\t</form>
\t</center>
</html>
", "GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Supprimer/LigneFraisHorsForfait.html.twig");
    }
}
