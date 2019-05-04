<?php

/* GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig */
class __TwigTemplate_45cc279372e81fbe1926ccb0bfc4f07c03e7c63af1820d47e1d7d7d60e140577 extends Twig_Template
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
        $__internal_0c8a155abb8e2773cdab14c764804b4d57a1489df648f1b260cb1305c611d82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8a155abb8e2773cdab14c764804b4d57a1489df648f1b260cb1305c611d82e->enter($__internal_0c8a155abb8e2773cdab14c764804b4d57a1489df648f1b260cb1305c611d82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig"));

        $__internal_167572b2928c873ec4755e62ea61d62eca0832d53a27ecfeca4250f93f71de57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167572b2928c873ec4755e62ea61d62eca0832d53a27ecfeca4250f93f71de57->enter($__internal_167572b2928c873ec4755e62ea61d62eca0832d53a27ecfeca4250f93f71de57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraishorsforfait_consulter", array("mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
        echo "\">Consulter les frais non forfaitisé</a>
\t<center>
\t\t<h3>Liste de vos Frais forfaitisé du ";
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
\t\t\t\t<th>Quantité</th>
\t\t\t</tr>

\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lff"] ?? $this->getContext($context, "lff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unLff"]) {
            // line 52
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"contenu\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLff"], "libelleFrais", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"contenu\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLff"], "montantFrais", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"contenu\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["unLff"], "quantiteLff", array()), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 56
            if ((($context["mois"] ?? $this->getContext($context, "mois")) == ($context["moisCours"] ?? $this->getContext($context, "moisCours")))) {
                // line 57
                echo "\t\t\t\t<td><form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_supprimer", array("id" => $this->getAttribute($context["unLff"], "id", array()), "mois" => ($context["mois"] ?? $this->getContext($context, "mois")))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unLff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</table>
\t\t";
        // line 64
        if ((($context["mois"] ?? $this->getContext($context, "mois")) == ($context["moisCours"] ?? $this->getContext($context, "moisCours")))) {
            // line 65
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_formulaire");
            echo "\">Ajouter frais forfaitisé</a>
\t\t";
        }
        // line 67
        echo "\t</center>
</html>
";
        
        $__internal_0c8a155abb8e2773cdab14c764804b4d57a1489df648f1b260cb1305c611d82e->leave($__internal_0c8a155abb8e2773cdab14c764804b4d57a1489df648f1b260cb1305c611d82e_prof);

        
        $__internal_167572b2928c873ec4755e62ea61d62eca0832d53a27ecfeca4250f93f71de57->leave($__internal_167572b2928c873ec4755e62ea61d62eca0832d53a27ecfeca4250f93f71de57_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig";
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
\t<a href=\"{{ path('gsb_lignefraishorsforfait_consulter', {'mois' : mois}) }}\">Consulter les frais non forfaitisé</a>
\t<center>
\t\t<h3>Liste de vos Frais forfaitisé du {{mois}}/{{anneeCours}}</h3>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Frais</th>
\t\t\t\t<th>Montant du Frais</th>
\t\t\t\t<th>Quantité</th>
\t\t\t</tr>

\t\t\t{% for unLff in lff %}
\t\t\t<tr>
\t\t\t\t<td class=\"contenu\">{{unLff.libelleFrais}}</td>
\t\t\t\t<td class=\"contenu\">{{unLff.montantFrais}}</td>
\t\t\t\t<td class=\"contenu\">{{unLff.quantiteLff}}</td>
\t\t\t\t{% if mois == moisCours %}
\t\t\t\t<td><form action=\"{{ path('gsb_lignefraisforfait_supprimer', {'id' : unLff.id,'mois' : mois}) }}\">
\t\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Supprimer frais\" />\t\t\t
\t\t\t\t</form></td>
\t\t\t\t{% endif %}
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t\t{% if mois == moisCours %}
\t\t<a href=\"{{ path('gsb_lignefraisforfait_formulaire') }}\">Ajouter frais forfaitisé</a>
\t\t{% endif %}
\t</center>
</html>
", "GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Consulter/LigneFraisForfait.html.twig");
    }
}
