<?php

/* GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig */
class __TwigTemplate_4e14cb24236a7825d88d00ae51e5efe32c58501da12e36a73f5ef1233ef0338e extends Twig_Template
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
        $__internal_57ddaabdb3e5623c9801028bcb756b420c7eb0ecc6769039008f477b61d7c063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ddaabdb3e5623c9801028bcb756b420c7eb0ecc6769039008f477b61d7c063->enter($__internal_57ddaabdb3e5623c9801028bcb756b420c7eb0ecc6769039008f477b61d7c063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig"));

        $__internal_f9b66e7f342daf60d16297b056e565e73fc174522519b1e1b54d5a453424e885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b66e7f342daf60d16297b056e565e73fc174522519b1e1b54d5a453424e885->enter($__internal_f9b66e7f342daf60d16297b056e565e73fc174522519b1e1b54d5a453424e885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig"));

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
\t\t}

\t</style>
\t</head>

\t<body>
\t\t<a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t\t<center>
\t\t\t<h3>Formulaire Frais Hors Forfait</h3>
\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t\t<div class=\"champs\">
\t\t\t<b>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelleLfhf", array()), 'label', array("label" => "Libellé du frais non forfaitisé :"));
        echo "</b>
\t\t\t<br><br>
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelleLfhf", array()), 'widget', array("attr" => array("class" => "contenu")));
        echo "
\t\t\t</div>

\t\t\t<div class=\"champs\">
\t\t\t\t<b>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantLfhf", array()), 'label', array("label" => "Montant du frais (€) :"));
        echo "</b>
\t\t\t\t<br><br>
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montantLfhf", array()), 'widget', array("attr" => array("class" => "contenu")));
        echo "
\t\t\t</div>

\t\t\t<div class=\"champs\">
\t\t\t\t<p>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "btn")));
        echo "</p>
\t\t\t</div>

\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</center>
\t</body>
</html>
";
        
        $__internal_57ddaabdb3e5623c9801028bcb756b420c7eb0ecc6769039008f477b61d7c063->leave($__internal_57ddaabdb3e5623c9801028bcb756b420c7eb0ecc6769039008f477b61d7c063_prof);

        
        $__internal_f9b66e7f342daf60d16297b056e565e73fc174522519b1e1b54d5a453424e885->leave($__internal_f9b66e7f342daf60d16297b056e565e73fc174522519b1e1b54d5a453424e885_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 68,  116 => 66,  110 => 63,  103 => 59,  98 => 57,  91 => 53,  86 => 51,  80 => 48,  74 => 45,  29 => 3,  25 => 1,);
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
\t\t}

\t</style>
\t</head>

\t<body>
\t\t<a href=\"{{ path('gsb_fichefrais') }}\">Retour fiche de vos frais</a>
\t\t<center>
\t\t\t<h3>Formulaire Frais Hors Forfait</h3>
\t\t\t{{ form_start(form) }}

\t\t\t<div class=\"champs\">
\t\t\t<b>{{ form_label(form.libelleLfhf, \"Libellé du frais non forfaitisé :\") }}</b>
\t\t\t<br><br>
\t\t\t{{ form_widget(form.libelleLfhf, {'attr': {'class':'contenu'}}) }}
\t\t\t</div>

\t\t\t<div class=\"champs\">
\t\t\t\t<b>{{ form_label(form.montantLfhf, \"Montant du frais (€) :\") }}</b>
\t\t\t\t<br><br>
\t\t\t\t{{ form_widget(form.montantLfhf, {'attr': {'class':'contenu'}}) }}
\t\t\t</div>

\t\t\t<div class=\"champs\">
\t\t\t\t<p>{{form_widget(form.ajouter, {'attr': {'class':'btn'}})}}</p>
\t\t\t</div>

\t\t\t{{ form_errors(form) }}

\t\t\t{{ form_end(form)}}
\t\t</center>
\t</body>
</html>
", "GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Form/LigneFraisHorsForfait.html.twig");
    }
}
