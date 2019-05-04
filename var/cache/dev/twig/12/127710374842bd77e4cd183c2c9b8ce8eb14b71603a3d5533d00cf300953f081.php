<?php

/* GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig */
class __TwigTemplate_a2e75bd3c1b7a8eaa640fd61e7ca17174e3823239d95aa3205d1e26167c0f0bc extends Twig_Template
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
        $__internal_36598685f5eeee9648a137635339a88e247a508ce7be5008cd191b41dd0ad2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36598685f5eeee9648a137635339a88e247a508ce7be5008cd191b41dd0ad2fa->enter($__internal_36598685f5eeee9648a137635339a88e247a508ce7be5008cd191b41dd0ad2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig"));

        $__internal_e641d933fc4eef1d244d2abe9b3c9b283b0b22905deba705bbdedd111421907f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e641d933fc4eef1d244d2abe9b3c9b283b0b22905deba705bbdedd111421907f->enter($__internal_e641d933fc4eef1d244d2abe9b3c9b283b0b22905deba705bbdedd111421907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig"));

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
\t\t\tth{
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tpadding: 8px;
\t\t\t}
\t\t\ttd.contenu{
\t\t\t\tpadding: 8px;
\t\t\t\tbackground-color:#9090ff;
\t\t\t}
\t\t\t.btn{
\t\t\t\twidth:140px;
\t\t\t\theight:30px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t}

\t\t</style>
\t</head>
\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais");
        echo "\">Retour fiche de vos frais</a>
\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">Consulter les frais forfaitisé</a>
\t<center>
\t\t<h3>Liste de vos Frais hors forfait du ";
        // line 42
        echo twig_escape_filter($this->env, ($context["mois"] ?? $this->getContext($context, "mois")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["anneeCours"] ?? $this->getContext($context, "anneeCours")), "html", null, true);
        echo "</h3>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Frais</th>
\t\t\t\t<th>Montant du Frais</th>
\t\t\t\t<th>Date du frais</th>
\t\t\t</tr>

\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lfhf"] ?? $this->getContext($context, "lfhf")));
        foreach ($context['_seq'] as $context["_key"] => $context["unLfhf"]) {
            // line 52
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"contenu\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLfhf"], "libelleLfhf", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"contenu\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLfhf"], "montantLfhf", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"contenu\">";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unLfhf"], "dateLfhf", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 56
            if ((($context["mois"] ?? $this->getContext($context, "mois")) == ($context["moisCours"] ?? $this->getContext($context, "moisCours")))) {
                // line 57
                echo "\t\t\t\t<td><form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_supprimer", array("id" => $this->getAttribute($context["unLfhf"], "id", array()), "mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
                echo "\">
\t\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Supprimer frais\" />\t\t\t
\t\t\t\t</form></td>
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unLfhf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</table>
\t\t";
        // line 64
        if ((($context["mois"] ?? $this->getContext($context, "mois")) == ($context["moisCours"] ?? $this->getContext($context, "moisCours")))) {
            // line 65
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_formulaire");
            echo "\">Ajouter frais hors forfait</a>
\t\t";
        }
        // line 67
        echo "\t</center>
</html>
";
        
        $__internal_36598685f5eeee9648a137635339a88e247a508ce7be5008cd191b41dd0ad2fa->leave($__internal_36598685f5eeee9648a137635339a88e247a508ce7be5008cd191b41dd0ad2fa_prof);

        
        $__internal_e641d933fc4eef1d244d2abe9b3c9b283b0b22905deba705bbdedd111421907f->leave($__internal_e641d933fc4eef1d244d2abe9b3c9b283b0b22905deba705bbdedd111421907f_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  132 => 65,  130 => 64,  127 => 63,  120 => 61,  112 => 57,  110 => 56,  106 => 55,  102 => 54,  98 => 53,  95 => 52,  91 => 51,  77 => 42,  72 => 40,  68 => 39,  31 => 5,  25 => 1,);
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
\t\t\tth{
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tpadding: 8px;
\t\t\t}
\t\t\ttd.contenu{
\t\t\t\tpadding: 8px;
\t\t\t\tbackground-color:#9090ff;
\t\t\t}
\t\t\t.btn{
\t\t\t\twidth:140px;
\t\t\t\theight:30px;
\t\t\t\tbackground-color:royalblue;
\t\t\t\tcolor:white;
\t\t\t\tborder-radius: 6px;
\t\t\t}

\t\t</style>
\t</head>
\t<a href=\"{{ path('gsb_fichefrais') }}\">Retour fiche de vos frais</a>
\t<a href=\"{{ path('gsb_lignefraisforfait_consulter', {'mois' : mois}) }}\">Consulter les frais forfaitisé</a>
\t<center>
\t\t<h3>Liste de vos Frais hors forfait du {{mois}}/{{anneeCours}}</h3>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Frais</th>
\t\t\t\t<th>Montant du Frais</th>
\t\t\t\t<th>Date du frais</th>
\t\t\t</tr>

\t\t\t{% for unLfhf in lfhf %}
\t\t\t<tr>
\t\t\t\t<td class=\"contenu\">{{unLfhf.libelleLfhf}}</td>
\t\t\t\t<td class=\"contenu\">{{unLfhf.montantLfhf}}</td>
\t\t\t\t<td class=\"contenu\">{{unLfhf.dateLfhf|date('d/m/Y')}}</td>
\t\t\t\t{% if mois == moisCours %}
\t\t\t\t<td><form action=\"{{ path('gsb_lignefraishorsforfait_supprimer', {'id' : unLfhf.id,'mois' : mois}) }}\">
\t\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Supprimer frais\" />\t\t\t
\t\t\t\t</form></td>
\t\t\t\t{% endif %}
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t\t{% if mois == moisCours %}
\t\t<a href=\"{{ path('gsb_lignefraishorsforfait_formulaire') }}\">Ajouter frais hors forfait</a>
\t\t{% endif %}
\t</center>
</html>
", "GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Consulter/LigneFraisHorsForfait.html.twig");
    }
}
