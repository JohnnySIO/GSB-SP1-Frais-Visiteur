<?php

/* GSBVisiteurBundle:Connexion:authVisiteur.html.twig */
class __TwigTemplate_49d17ab7afabb6f1bbad2bfd98ee20eeb5451fd17ebc13830993411e4e9cf788 extends Twig_Template
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
        $__internal_e819d4b8985852d32275d0118b9a128fb7cce97f67e56ac04a3f022063ed0c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e819d4b8985852d32275d0118b9a128fb7cce97f67e56ac04a3f022063ed0c59->enter($__internal_e819d4b8985852d32275d0118b9a128fb7cce97f67e56ac04a3f022063ed0c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:authVisiteur.html.twig"));

        $__internal_9b9d5f7361d33062736120d1638c8783b9155ff766301994ea66fb751b6580a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9d5f7361d33062736120d1638c8783b9155ff766301994ea66fb751b6580a5->enter($__internal_9b9d5f7361d33062736120d1638c8783b9155ff766301994ea66fb751b6580a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:authVisiteur.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Visiteur ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo "</title>
\t\t\t<style>
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
\t\t\t\twidth:120px;
\t\t\t\tfont-size:20px;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t</style>
\t</head>

\t<body>
\t\t<br><br><br><br>
\t\t<h3><center>Bienvenue ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "nomVis"), "method"), "html", null, true);
        echo "
\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenomVis"), "method"), "html", null, true);
        echo "</center></h3>

\t\t<br>
\t\t<br>

\t\t<center>
\t\t\t<i class=\"champs\">Vous êtes à présent connecté</i>
\t\t\t<br><br><br>
\t\t\t<form action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Continuer\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
";
        
        $__internal_e819d4b8985852d32275d0118b9a128fb7cce97f67e56ac04a3f022063ed0c59->leave($__internal_e819d4b8985852d32275d0118b9a128fb7cce97f67e56ac04a3f022063ed0c59_prof);

        
        $__internal_9b9d5f7361d33062736120d1638c8783b9155ff766301994ea66fb751b6580a5->leave($__internal_9b9d5f7361d33062736120d1638c8783b9155ff766301994ea66fb751b6580a5_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Connexion:authVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 40,  64 => 32,  60 => 31,  29 => 3,  25 => 1,);
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
\t\t<title>Visiteur {{ app.session.get('loginVis')}}</title>
\t\t\t<style>
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
\t\t\t\twidth:120px;
\t\t\t\tfont-size:20px;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t</style>
\t</head>

\t<body>
\t\t<br><br><br><br>
\t\t<h3><center>Bienvenue {{ app.session.get('nomVis') }}
\t\t{{ app.session.get('prenomVis') }}</center></h3>

\t\t<br>
\t\t<br>

\t\t<center>
\t\t\t<i class=\"champs\">Vous êtes à présent connecté</i>
\t\t\t<br><br><br>
\t\t\t<form action=\"{{ path('gsb_fichefrais') }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Continuer\" />\t\t\t
\t\t\t</form>
\t\t</center>
    
\t</body>
</html>
", "GSBVisiteurBundle:Connexion:authVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Connexion/authVisiteur.html.twig");
    }
}
