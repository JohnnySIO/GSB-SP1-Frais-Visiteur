<?php

/* GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig */
class __TwigTemplate_a3504e369273c0265aa944b70e1155c85fe9136284da45075c8b8d72fbf85d6e extends Twig_Template
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
        $__internal_79293c3302bec4b0c4a9ba5d214f23b5eabca8ba09e69eaadbf1d975f40d846b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79293c3302bec4b0c4a9ba5d214f23b5eabca8ba09e69eaadbf1d975f40d846b->enter($__internal_79293c3302bec4b0c4a9ba5d214f23b5eabca8ba09e69eaadbf1d975f40d846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig"));

        $__internal_ba89eb0f4f555210c07974a102c56c81ba6608fe8afb42234812664bd5b6c25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba89eb0f4f555210c07974a102c56c81ba6608fe8afb42234812664bd5b6c25a->enter($__internal_ba89eb0f4f555210c07974a102c56c81ba6608fe8afb42234812664bd5b6c25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Déconnexion Visiteur</title>
\t\t<style>
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
\t\t\th3{
\t\t\t\tcolor:white;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t\t.btn{
\t\t\t\tcolor:white;
\t\t\t\tpadding: 5px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:200px;
\t\t\t\tfont-size:20px;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<br><br><br><br>
\t\t<h3><center>Aurevoir</center></h3>

\t\t<br><br>

\t\t<center>
\t\t\t<i class=\"champs\">Vous êtes à présent déconnecté</i>
\t\t\t<br><br><br>
\t\t\t<form action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_connexion_visiteur");
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à l'accueil\" />\t\t\t
\t\t\t</form>  
\t\t</center>
    
\t</body>
</html>
";
        
        $__internal_79293c3302bec4b0c4a9ba5d214f23b5eabca8ba09e69eaadbf1d975f40d846b->leave($__internal_79293c3302bec4b0c4a9ba5d214f23b5eabca8ba09e69eaadbf1d975f40d846b_prof);

        
        $__internal_ba89eb0f4f555210c07974a102c56c81ba6608fe8afb42234812664bd5b6c25a->leave($__internal_ba89eb0f4f555210c07974a102c56c81ba6608fe8afb42234812664bd5b6c25a_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 37,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
\t<head>
\t\t<title>Déconnexion Visiteur</title>
\t\t<style>
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
\t\t\th3{
\t\t\t\tcolor:white;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t\t.btn{
\t\t\t\tcolor:white;
\t\t\t\tpadding: 5px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:200px;
\t\t\t\tfont-size:20px;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t</style>
\t</head>

\t<body>
\t\t<br><br><br><br>
\t\t<h3><center>Aurevoir</center></h3>

\t\t<br><br>

\t\t<center>
\t\t\t<i class=\"champs\">Vous êtes à présent déconnecté</i>
\t\t\t<br><br><br>
\t\t\t<form action=\"{{ path('gsb_connexion_visiteur') }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Retour à l'accueil\" />\t\t\t
\t\t\t</form>  
\t\t</center>
    
\t</body>
</html>
", "GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Connexion/deconnexionVisiteur.html.twig");
    }
}
