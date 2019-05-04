<?php

/* GSBVisiteurBundle:Consulter:FicheFrais.html.twig */
class __TwigTemplate_615f85632ae54c43c6dead051f1dedb3485f5a96ea479b63acc7c40e517d81bb extends Twig_Template
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
        $__internal_fa5c4f4138e614224170d8318565548e2cffc7bb26054c590f9160f6a51be45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5c4f4138e614224170d8318565548e2cffc7bb26054c590f9160f6a51be45c->enter($__internal_fa5c4f4138e614224170d8318565548e2cffc7bb26054c590f9160f6a51be45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:FicheFrais.html.twig"));

        $__internal_a214693a6ea8c256b74d9522e333b81c40f19943dc34b911f6eff175ac677a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a214693a6ea8c256b74d9522e333b81c40f19943dc34b911f6eff175ac677a44->enter($__internal_a214693a6ea8c256b74d9522e333b81c40f19943dc34b911f6eff175ac677a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:FicheFrais.html.twig"));

        // line 1
        echo "<html>
\t<head>
        <meta charset=\"utf-8\">
        <title>Visiteur ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginVis"), "method"), "html", null, true);
        echo " </title>
\t<style>
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
\t\t.darkblue{
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t}
\t\tth{
\t\t\tpadding: 8px;
\t\t}
\t\ttd.ff{
\t\t\tpadding: 8px;
\t\t\tbackground-color:#9090ff;
\t\t}
\t\ttd.cours{
\t\t\tpadding: 8px;
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t}
\t\ta {
\t\t\tcolor:royalblue;
\t\t}
\t\t.info{
\t\t\tcolor:royalblue;
\t\t\tfont-size:15px;
\t\t}
\t\t.btn{
\t\t\tmargin-top:10px;
\t\t\twidth:100px;
\t\t\theight:30px;
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t\tborder-radius: 6px;
\t\t}
\t\t
\t</style>
\t</head>
\t<body>
\t<a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_deconnexion_visiteur");
        echo "\">Se déconnecter</a>
\t\t
\t<center>
\t\t<h3>Liste de vos Fiche Frais ";
        // line 54
        echo twig_escape_filter($this->env, ($context["anneeCours"] ?? $this->getContext($context, "anneeCours")), "html", null, true);
        echo "</h3>
\t\t<br/>

\t\t<table>
\t\t\t<tr >
\t\t\t\t<th></th>
\t\t\t\t<th class=\"darkblue\">Mois</th>
\t\t\t\t<th class=\"darkblue\">Nb Justificatifs</th>
\t\t\t\t<th class=\"darkblue\">Montant valide</th>
\t\t\t\t<th class=\"darkblue\">Date de création</th>
\t\t\t\t<th class=\"darkblue\">État</th>
\t\t\t</tr>

\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFf"]) {
            // line 68
            echo "\t\t\t<tr class=\"contenu\">
\t\t\t";
            // line 69
            if (($this->getAttribute($context["unFf"], "moisFf", array()) == ($context["mois"] ?? $this->getContext($context, "mois")))) {
                // line 70
                echo "\t\t\t<td class=\"info\"><b>Mois en cours</b>
\t\t\t<td class=\"cours\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "moisFf", array()), "html", null, true);
                echo "</td>
\t\t\t<td class=\"cours\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "nbJustificatifsFf", array()), "html", null, true);
                echo "</td>
\t\t\t<td class=\"cours\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "montantValideFf", array()), "html", null, true);
                echo " €</td>
\t\t\t<td class=\"cours\">";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFf"], "dateCreationFf", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t<td class=\"cours\">";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "libelleEtat", array()), "html", null, true);
                echo "</td>
\t\t\t";
            } else {
                // line 77
                echo "\t\t\t<td></td>
\t\t\t<td class=\"ff\">";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "moisFf", array()), "html", null, true);
                echo "</td>
\t\t\t<td class=\"ff\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "nbJustificatifsFf", array()), "html", null, true);
                echo "</td>
\t\t\t<td class=\"ff\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "montantValideFf", array()), "html", null, true);
                echo " €</td>
\t\t\t<td class=\"ff\">";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFf"], "dateCreationFf", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t<td class=\"ff\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "libelleEtat", array()), "html", null, true);
                echo "</td>
\t\t\t";
            }
            // line 84
            echo "\t\t\t
\t\t\t

\t\t\t<td><form action=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_choix_frais_consulter", array("mois" => $this->getAttribute($context["unFf"], "moisFf", array()))), "html", null, true);
            echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Voir frais\" />\t\t\t
\t\t\t</form></td>
\t\t\t";
            // line 90
            if (($this->getAttribute($context["unFf"], "moisFf", array()) == ($context["mois"] ?? $this->getContext($context, "mois")))) {
                // line 91
                echo "\t\t\t<td><form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_choix_frais_form");
                echo "\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Ajouter frais\" />\t\t\t
\t\t\t</form></td>
\t\t\t";
            }
            // line 95
            echo "\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t</table>
\t\t

\t\t";
        // line 100
        if ((($context["estAjd"] ?? $this->getContext($context, "estAjd")) == 0)) {
            // line 101
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_fichefrais_form");
            echo "\">Ajouter le 1er frais du mois</a>
\t\t
\t\t";
        }
        // line 104
        echo "
\t</center>
\t</body>
</html>
";
        
        $__internal_fa5c4f4138e614224170d8318565548e2cffc7bb26054c590f9160f6a51be45c->leave($__internal_fa5c4f4138e614224170d8318565548e2cffc7bb26054c590f9160f6a51be45c_prof);

        
        $__internal_a214693a6ea8c256b74d9522e333b81c40f19943dc34b911f6eff175ac677a44->leave($__internal_a214693a6ea8c256b74d9522e333b81c40f19943dc34b911f6eff175ac677a44_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Consulter:FicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 104,  194 => 101,  192 => 100,  187 => 97,  180 => 95,  172 => 91,  170 => 90,  164 => 87,  159 => 84,  154 => 82,  150 => 81,  146 => 80,  142 => 79,  138 => 78,  135 => 77,  130 => 75,  126 => 74,  122 => 73,  118 => 72,  114 => 71,  111 => 70,  109 => 69,  106 => 68,  102 => 67,  86 => 54,  80 => 51,  30 => 4,  25 => 1,);
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
        <meta charset=\"utf-8\">
        <title>Visiteur {{ app.session.get('loginVis')}} </title>
\t<style>
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
\t\t.darkblue{
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t}
\t\tth{
\t\t\tpadding: 8px;
\t\t}
\t\ttd.ff{
\t\t\tpadding: 8px;
\t\t\tbackground-color:#9090ff;
\t\t}
\t\ttd.cours{
\t\t\tpadding: 8px;
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t}
\t\ta {
\t\t\tcolor:royalblue;
\t\t}
\t\t.info{
\t\t\tcolor:royalblue;
\t\t\tfont-size:15px;
\t\t}
\t\t.btn{
\t\t\tmargin-top:10px;
\t\t\twidth:100px;
\t\t\theight:30px;
\t\t\tbackground-color:royalblue;
\t\t\tcolor:white;
\t\t\tborder-radius: 6px;
\t\t}
\t\t
\t</style>
\t</head>
\t<body>
\t<a href=\"{{ path('gsb_deconnexion_visiteur')}}\">Se déconnecter</a>
\t\t
\t<center>
\t\t<h3>Liste de vos Fiche Frais {{anneeCours}}</h3>
\t\t<br/>

\t\t<table>
\t\t\t<tr >
\t\t\t\t<th></th>
\t\t\t\t<th class=\"darkblue\">Mois</th>
\t\t\t\t<th class=\"darkblue\">Nb Justificatifs</th>
\t\t\t\t<th class=\"darkblue\">Montant valide</th>
\t\t\t\t<th class=\"darkblue\">Date de création</th>
\t\t\t\t<th class=\"darkblue\">État</th>
\t\t\t</tr>

\t\t\t{% for unFf in ff %}
\t\t\t<tr class=\"contenu\">
\t\t\t{% if unFf.moisFf == mois %}
\t\t\t<td class=\"info\"><b>Mois en cours</b>
\t\t\t<td class=\"cours\">{{ unFf.moisFf }}</td>
\t\t\t<td class=\"cours\">{{ unFf.nbJustificatifsFf }}</td>
\t\t\t<td class=\"cours\">{{ unFf.montantValideFf }} €</td>
\t\t\t<td class=\"cours\">{{ unFf.dateCreationFf|date('d/m/Y') }}</td>
\t\t\t<td class=\"cours\">{{ unFf.libelleEtat }}</td>
\t\t\t{% else %}
\t\t\t<td></td>
\t\t\t<td class=\"ff\">{{ unFf.moisFf }}</td>
\t\t\t<td class=\"ff\">{{ unFf.nbJustificatifsFf }}</td>
\t\t\t<td class=\"ff\">{{ unFf.montantValideFf }} €</td>
\t\t\t<td class=\"ff\">{{ unFf.dateCreationFf|date('d/m/Y') }}</td>
\t\t\t<td class=\"ff\">{{ unFf.libelleEtat }}</td>
\t\t\t{% endif %}
\t\t\t
\t\t\t

\t\t\t<td><form action=\"{{ path('gsb_choix_frais_consulter', {'mois' : unFf.moisFf}) }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Voir frais\" />\t\t\t
\t\t\t</form></td>
\t\t\t{% if unFf.moisFf == mois %}
\t\t\t<td><form action=\"{{ path('gsb_choix_frais_form') }}\">
\t\t\t\t<input class=\"btn\" type=\"submit\" value=\"Ajouter frais\" />\t\t\t
\t\t\t</form></td>
\t\t\t{% endif %}
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t\t

\t\t{% if estAjd == 0  %}
\t\t<a href=\"{{ path('gsb_fichefrais_form') }}\">Ajouter le 1er frais du mois</a>
\t\t
\t\t{% endif %}

\t</center>
\t</body>
</html>
", "GSBVisiteurBundle:Consulter:FicheFrais.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Consulter/FicheFrais.html.twig");
    }
}
