<?php

/* GSBVisiteurBundle:Consulter:index.html.twig */
class __TwigTemplate_8e29285cb212ed017778803186c996d8a5191395fb03e95c97e1e675a6c37017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:Consulter:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Visiteur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d86459296156f1afc21baa164de7604b7c6223d93898b6fa25c4c987083f8704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86459296156f1afc21baa164de7604b7c6223d93898b6fa25c4c987083f8704->enter($__internal_d86459296156f1afc21baa164de7604b7c6223d93898b6fa25c4c987083f8704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:index.html.twig"));

        $__internal_99e8d767fb2aafa6ee9b5b56b9fbf58ec38cdb301a52927285a5d73c81cf084f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e8d767fb2aafa6ee9b5b56b9fbf58ec38cdb301a52927285a5d73c81cf084f->enter($__internal_99e8d767fb2aafa6ee9b5b56b9fbf58ec38cdb301a52927285a5d73c81cf084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d86459296156f1afc21baa164de7604b7c6223d93898b6fa25c4c987083f8704->leave($__internal_d86459296156f1afc21baa164de7604b7c6223d93898b6fa25c4c987083f8704_prof);

        
        $__internal_99e8d767fb2aafa6ee9b5b56b9fbf58ec38cdb301a52927285a5d73c81cf084f->leave($__internal_99e8d767fb2aafa6ee9b5b56b9fbf58ec38cdb301a52927285a5d73c81cf084f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3112a2c6be5df2c2e186858991623c7c4630f74a4832d8651b4f99473fe5188b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3112a2c6be5df2c2e186858991623c7c4630f74a4832d8651b4f99473fe5188b->enter($__internal_3112a2c6be5df2c2e186858991623c7c4630f74a4832d8651b4f99473fe5188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48a5cfffe8f88d6ace7fd3ff3fe776cdd06187fe53cc97befd8e24add57559f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a5cfffe8f88d6ace7fd3ff3fe776cdd06187fe53cc97befd8e24add57559f7->enter($__internal_48a5cfffe8f88d6ace7fd3ff3fe776cdd06187fe53cc97befd8e24add57559f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                    <th>Modifier</th>
                </tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFF"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mois"] ?? $this->getContext($context, "mois")), ($this->getAttribute($context["unFF"], "mois", array()) - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "nbJustificatifs", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "montantValide", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "LeEtat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFF"], "dateNotif", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFF"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

";
        
        $__internal_48a5cfffe8f88d6ace7fd3ff3fe776cdd06187fe53cc97befd8e24add57559f7->leave($__internal_48a5cfffe8f88d6ace7fd3ff3fe776cdd06187fe53cc97befd8e24add57559f7_prof);

        
        $__internal_3112a2c6be5df2c2e186858991623c7c4630f74a4832d8651b4f99473fe5188b->leave($__internal_3112a2c6be5df2c2e186858991623c7c4630f74a4832d8651b4f99473fe5188b_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Consulter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Visiteur:base.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <h3>Liste des Fiche Frais</h3><br/>
            <table class=\"table table-dark table-hover\">
                <tr>
                    <th>Mois</th>
                    <th>Nombre de Justificatifs</th>
                    <th>Montant valide</th>
                    <th>Etat</th>
                    <th>Date de la Notifications</th>
                    <th>Modifier</th>
                </tr>
                {% for unFF in ff %}
                    <tr>
                        <td>{{ mois[unFF.mois - 1] }}</td>
                        <td>{{ unFF.nbJustificatifs }}</td>
                        <td>{{ unFF.montantValide }} €</td>
                        <td>{{ unFF.LeEtat }}</td>
                        <td>{{ unFF.dateNotif|date('d/m/Y') }}</td>
                        <td><a href=\"/visiteur/fiche_frais/modifier/{{ unFF.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            <a href=\"/visiteur/fiche_frais/ajouter\" class=\"btn btn-outline-light\">AJOUTER NOUVELLE<br/>FICHE FRAIS</a><br/>
        </div>
    </center>

{% endblock %}", "GSBVisiteurBundle:Consulter:index.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Consulter/index.html.twig");
    }
}
