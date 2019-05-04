<?php

/* GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig */
class __TwigTemplate_83620c79ce7194ab34568915bd2290bd823919b6bbc1fd85515b6d88e566c2d6 extends Twig_Template
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
        $__internal_0ee94b4e48ed7f9284f1bffc7d5ef0656a18fe1f3d6384b2ed63570bc0b091e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee94b4e48ed7f9284f1bffc7d5ef0656a18fe1f3d6384b2ed63570bc0b091e2->enter($__internal_0ee94b4e48ed7f9284f1bffc7d5ef0656a18fe1f3d6384b2ed63570bc0b091e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig"));

        $__internal_1f33f3dcf5145d87f64aa4a9304183b7278f884b6396407d2c30fa14856c6b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f33f3dcf5145d87f64aa4a9304183b7278f884b6396407d2c30fa14856c6b09->enter($__internal_1f33f3dcf5145d87f64aa4a9304183b7278f884b6396407d2c30fa14856c6b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion Visiteur</title>
        <style>
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
\t\t.login{
\t\t\tcolor:royalblue;
\t\t\tpadding: 10px;
\t\t\tbackground-color:white;
\t\t}
\t\t.champs{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:#B4B4FF;
\t\t\twidth:300px;
\t\t}
\t\t.btn{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:royalblue;
\t\t\twidth:100px;
\t\t\tborder-radius: 10px;
\t\t}

\t</style>
        
\t</head>

\t<body>
        <br>
\t<br>
        <h3><center>Connexion Visiteur</center></h3>
\t<br>
\t<br>
    \t<center>
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"login\">
\t\t<br>
\t\t<b>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "loginVis", array()), 'label', array("label" => "Login :"));
        echo "</b>
\t\t<br><br>
\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "loginVis", array()), 'widget', array("attr" => array("placeholder" => "Votre identifiant", "class" => "champs")));
        echo "
\t</div>

\t<div class=\"login\">
\t\t<b>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mdpVis", array()), 'label', array("label" => "Mot de passe :"));
        echo "</b>
\t\t<br><br>
\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mdpVis", array()), 'widget', array("attr" => array("placeholder" => "Votre mot de passe", "class" => "champs")));
        echo "
\t</div>
        
\t<div class=\"login\">
\t\t<p>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "login", array()), 'widget', array("attr" => array("class" => "btn")));
        echo "</p>
\t</div>
        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "\t
\t</center>
\t</body>
</html>
";
        
        $__internal_0ee94b4e48ed7f9284f1bffc7d5ef0656a18fe1f3d6384b2ed63570bc0b091e2->leave($__internal_0ee94b4e48ed7f9284f1bffc7d5ef0656a18fe1f3d6384b2ed63570bc0b091e2_prof);

        
        $__internal_1f33f3dcf5145d87f64aa4a9304183b7278f884b6396407d2c30fa14856c6b09->leave($__internal_1f33f3dcf5145d87f64aa4a9304183b7278f884b6396407d2c30fa14856c6b09_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 66,  105 => 64,  98 => 60,  93 => 58,  86 => 54,  81 => 52,  75 => 49,  25 => 1,);
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
    <head>
        <meta charset=\"utf-8\">
        <title>Connexion Visiteur</title>
        <style>
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
\t\t.login{
\t\t\tcolor:royalblue;
\t\t\tpadding: 10px;
\t\t\tbackground-color:white;
\t\t}
\t\t.champs{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:#B4B4FF;
\t\t\twidth:300px;
\t\t}
\t\t.btn{
\t\t\tcolor:white;
\t\t\tpadding: 5px;
\t\t\tbackground-color:royalblue;
\t\t\twidth:100px;
\t\t\tborder-radius: 10px;
\t\t}

\t</style>
        
\t</head>

\t<body>
        <br>
\t<br>
        <h3><center>Connexion Visiteur</center></h3>
\t<br>
\t<br>
    \t<center>
        {{ form_start(form) }}
        <div class=\"login\">
\t\t<br>
\t\t<b>{{ form_label(form.loginVis, \"Login :\") }}</b>
\t\t<br><br>
\t\t{{ form_widget(form.loginVis, {'attr': {'placeholder':\"Votre identifiant\",'class':'champs'}} ) }}
\t</div>

\t<div class=\"login\">
\t\t<b>{{ form_label(form.mdpVis, \"Mot de passe :\") }}</b>
\t\t<br><br>
\t\t{{ form_widget(form.mdpVis, {'attr': {'placeholder':\"Votre mot de passe\",'class':'champs'}}) }}
\t</div>
        
\t<div class=\"login\">
\t\t<p>{{form_widget(form.login, {'attr': {'class':'btn'}})}}</p>
\t</div>
        {{ form_end(form) }}\t
\t</center>
\t</body>
</html>
", "GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Connexion/connexionVisiteur.html.twig");
    }
}
