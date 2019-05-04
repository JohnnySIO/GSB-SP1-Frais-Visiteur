<?php

/* GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig */
class __TwigTemplate_07406dd43542b4d81c8f70869824d567cb49c7716c7489ba69a947535251259f extends Twig_Template
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
        $__internal_a6911de6212346638c792f57552f8b58c5f28a4912145feef6c392c84d1487b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6911de6212346638c792f57552f8b58c5f28a4912145feef6c392c84d1487b8->enter($__internal_a6911de6212346638c792f57552f8b58c5f28a4912145feef6c392c84d1487b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig"));

        $__internal_e18b9cfe9d9b4a1ad0d6119be0231b93a7e474bbb5931e058846c57ad199f802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18b9cfe9d9b4a1ad0d6119be0231b93a7e474bbb5931e058846c57ad199f802->enter($__internal_e18b9cfe9d9b4a1ad0d6119be0231b93a7e474bbb5931e058846c57ad199f802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig"));

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
\t\t\t\twidth:300px;
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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t<center>
\t\t<br><br><br><br><br>
\t\t<i class=\"champs\">Frais forfait supprimé</i>
\t\t<br><br><br><br><br><br>
\t\t<form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">
\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à vos frais forfaitisés\" />\t\t\t
\t\t</form>
\t\t
\t</center>
</html>
";
        
        $__internal_a6911de6212346638c792f57552f8b58c5f28a4912145feef6c392c84d1487b8->leave($__internal_a6911de6212346638c792f57552f8b58c5f28a4912145feef6c392c84d1487b8_prof);

        
        $__internal_e18b9cfe9d9b4a1ad0d6119be0231b93a7e474bbb5931e058846c57ad199f802->leave($__internal_e18b9cfe9d9b4a1ad0d6119be0231b93a7e474bbb5931e058846c57ad199f802_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  63 => 34,  31 => 5,  25 => 1,);
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
\t\t\t\twidth:300px;
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
\t\t<i class=\"champs\">Frais forfait supprimé</i>
\t\t<br><br><br><br><br><br>
\t\t<form action=\"{{ path('gsb_lignefraisforfait_consulter', {'mois' : mois}) }}\">
\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à vos frais forfaitisés\" />\t\t\t
\t\t</form>
\t\t
\t</center>
</html>
", "GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Supprimer/LigneFraisForfait.html.twig");
    }
}
