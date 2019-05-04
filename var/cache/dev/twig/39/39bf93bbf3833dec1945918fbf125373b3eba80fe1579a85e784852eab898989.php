<?php

/* GSBVisiteurBundle:Form:LigneFraisForfait.html.twig */
class __TwigTemplate_7e6c785b89d4ab1489f35c2d8b5c49527684023af7abd10ebfa7be96fd5bbff2 extends Twig_Template
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
        $__internal_236d9e3b4390248f715a3f2a05d8b151481f7d8942cf93577bbacb7760ca20c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236d9e3b4390248f715a3f2a05d8b151481f7d8942cf93577bbacb7760ca20c0->enter($__internal_236d9e3b4390248f715a3f2a05d8b151481f7d8942cf93577bbacb7760ca20c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:LigneFraisForfait.html.twig"));

        $__internal_3901401c612ba4bd5eda0dfb1a5e7f378b48eb22d214a02b0c19c9136597dad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3901401c612ba4bd5eda0dfb1a5e7f378b48eb22d214a02b0c19c9136597dad4->enter($__internal_3901401c612ba4bd5eda0dfb1a5e7f378b48eb22d214a02b0c19c9136597dad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:LigneFraisForfait.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Visiteur ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo "</title>
\t\t<style>
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
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
\t\t\ta{
\t\t\t\tcolor:white;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t}
\t\t\t.contenu{
\t\t\t\tcolor:white;
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t\tpadding: 5px;
\t\t\t\twidth:300px;
\t\t\t}
\t\t\t.btn{
\t\t\t\tcolor:white;
\t\t\t\tpadding: 5px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:100px;
\t\t\t\tborder-radius: 10px;
\t\t\t\tfont-weight:bold;
\t\t\t}

\t\t</style>
\t</head>

\t<body>
\t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t<center>
\t
\t<h3><center>Formulaire Ligne Frais Forfait</center></h3>

\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t<div class=\"champs\">
\t\t<b>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFrais", array()), 'label', array("label" => "Frais forfaitisé :"));
        echo "</b>
\t\t<br><br>
\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idFrais", array()), 'widget', array("attr" => array("class" => "contenu")));
        echo "
\t</div>

\t<div class=\"champs\">
\t\t<b>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteLff", array()), 'label', array("label" => "Quantité forfaitisé :"));
        echo "</b>
\t\t<br><br>
\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantiteLff", array()), 'widget', array("attr" => array("class" => "contenu")));
        echo "
\t</div>
        
\t<div class=\"champs\">
\t\t<p>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "btn")));
        echo "</p>
\t</div>

        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</center>
\t</body>
</html>
     
         
";
        
        $__internal_236d9e3b4390248f715a3f2a05d8b151481f7d8942cf93577bbacb7760ca20c0->leave($__internal_236d9e3b4390248f715a3f2a05d8b151481f7d8942cf93577bbacb7760ca20c0_prof);

        
        $__internal_3901401c612ba4bd5eda0dfb1a5e7f378b48eb22d214a02b0c19c9136597dad4->leave($__internal_3901401c612ba4bd5eda0dfb1a5e7f378b48eb22d214a02b0c19c9136597dad4_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:LigneFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 70,  118 => 68,  112 => 65,  105 => 61,  100 => 59,  93 => 55,  88 => 53,  82 => 50,  74 => 45,  29 => 3,  25 => 1,);
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
\t\t<title>Visiteur {{app.session.get(\"loginVis\")}}</title>
\t\t<style>
\t\t\tbody{
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t}
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
\t\t\ta{
\t\t\t\tcolor:white;
\t\t\t}
\t\t\t.champs{
\t\t\t\tcolor:royalblue;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color:white;
\t\t\t}
\t\t\t.contenu{
\t\t\t\tcolor:white;
\t\t\t\tbackground-color:#B4B4FF;
\t\t\t\tpadding: 5px;
\t\t\t\twidth:300px;
\t\t\t}
\t\t\t.btn{
\t\t\t\tcolor:white;
\t\t\t\tpadding: 5px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\twidth:100px;
\t\t\t\tborder-radius: 10px;
\t\t\t\tfont-weight:bold;
\t\t\t}

\t\t</style>
\t</head>

\t<body>
\t<a href=\"{{ path('gsb_fichefrais') }}\">Retour fiche de vos frais</a>
\t<center>
\t
\t<h3><center>Formulaire Ligne Frais Forfait</center></h3>

\t{{ form_start(form) }}

\t<div class=\"champs\">
\t\t<b>{{ form_label(form.idFrais, \"Frais forfaitisé :\") }}</b>
\t\t<br><br>
\t\t{{ form_widget(form.idFrais, {'attr': {'class':'contenu'}}) }}
\t</div>

\t<div class=\"champs\">
\t\t<b>{{ form_label(form.quantiteLff, \"Quantité forfaitisé :\") }}</b>
\t\t<br><br>
\t\t{{ form_widget(form.quantiteLff, {'attr': {'class':'contenu'}}) }}
\t</div>
        
\t<div class=\"champs\">
\t\t<p>{{form_widget(form.ajouter, {'attr': {'class':'btn'}})}}</p>
\t</div>

        {{ form_errors(form) }}

        {{ form_end(form)}}
\t</center>
\t</body>
</html>
     
         
", "GSBVisiteurBundle:Form:LigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/LigneFraisForfait.html.twig");
    }
}
