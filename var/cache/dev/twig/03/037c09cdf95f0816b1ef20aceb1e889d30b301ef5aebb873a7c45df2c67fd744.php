<?php

/* GSBVisiteurBundle:FicheFrais:consulter.html.twig */
class __TwigTemplate_764ff29a62fcfc0ee4eac0890137986193e9c6a213fbd99860edc6e012ad6561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:consulter.html.twig", 1);
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
        $__internal_7184db3088f71b0790d24a4cd4e5bf72eb0c402a92a247658aabd02b8d7100c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7184db3088f71b0790d24a4cd4e5bf72eb0c402a92a247658aabd02b8d7100c4->enter($__internal_7184db3088f71b0790d24a4cd4e5bf72eb0c402a92a247658aabd02b8d7100c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:consulter.html.twig"));

        $__internal_551e1421bbc7dc08ef9cfb912517ef283f1f19d2295408a178be80aca54f0ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551e1421bbc7dc08ef9cfb912517ef283f1f19d2295408a178be80aca54f0ba6->enter($__internal_551e1421bbc7dc08ef9cfb912517ef283f1f19d2295408a178be80aca54f0ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7184db3088f71b0790d24a4cd4e5bf72eb0c402a92a247658aabd02b8d7100c4->leave($__internal_7184db3088f71b0790d24a4cd4e5bf72eb0c402a92a247658aabd02b8d7100c4_prof);

        
        $__internal_551e1421bbc7dc08ef9cfb912517ef283f1f19d2295408a178be80aca54f0ba6->leave($__internal_551e1421bbc7dc08ef9cfb912517ef283f1f19d2295408a178be80aca54f0ba6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8e2caa96bb00b7b63f0d73546333d65a2629158bf2382a7efb0316dc7bb9ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e2caa96bb00b7b63f0d73546333d65a2629158bf2382a7efb0316dc7bb9ac4->enter($__internal_e8e2caa96bb00b7b63f0d73546333d65a2629158bf2382a7efb0316dc7bb9ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bf071cb735e371e403df8a32d98da90439b765c4393ec8b8e1915a7a1b14903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf071cb735e371e403df8a32d98da90439b765c4393ec8b8e1915a7a1b14903->enter($__internal_4bf071cb735e371e403df8a32d98da90439b765c4393ec8b8e1915a7a1b14903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bf071cb735e371e403df8a32d98da90439b765c4393ec8b8e1915a7a1b14903->leave($__internal_4bf071cb735e371e403df8a32d98da90439b765c4393ec8b8e1915a7a1b14903_prof);

        
        $__internal_e8e2caa96bb00b7b63f0d73546333d65a2629158bf2382a7efb0316dc7bb9ac4->leave($__internal_e8e2caa96bb00b7b63f0d73546333d65a2629158bf2382a7efb0316dc7bb9ac4_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:consulter.html.twig";
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

{% endblock %}", "GSBVisiteurBundle:FicheFrais:consulter.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/FicheFrais/consulter.html.twig");
    }
}
