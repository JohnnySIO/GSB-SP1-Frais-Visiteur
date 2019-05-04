<?php

/* GSBVisiteurBundle:FicheFrais:index.html.twig */
class __TwigTemplate_44c918833de5ee9a7487f4d676757813fd92b160363d8f456f2c30405edb4501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Visiteur:base.html.twig", "GSBVisiteurBundle:FicheFrais:index.html.twig", 1);
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
        $__internal_bee4adc7e5d6f709d605c903af9cfcf565fcd28ca865f312075399a04bd32712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee4adc7e5d6f709d605c903af9cfcf565fcd28ca865f312075399a04bd32712->enter($__internal_bee4adc7e5d6f709d605c903af9cfcf565fcd28ca865f312075399a04bd32712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $__internal_cc658c105a5a5d91f6159d8579360d17c7b6c21b5661947c80cd2145d7326a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc658c105a5a5d91f6159d8579360d17c7b6c21b5661947c80cd2145d7326a80->enter($__internal_cc658c105a5a5d91f6159d8579360d17c7b6c21b5661947c80cd2145d7326a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:FicheFrais:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee4adc7e5d6f709d605c903af9cfcf565fcd28ca865f312075399a04bd32712->leave($__internal_bee4adc7e5d6f709d605c903af9cfcf565fcd28ca865f312075399a04bd32712_prof);

        
        $__internal_cc658c105a5a5d91f6159d8579360d17c7b6c21b5661947c80cd2145d7326a80->leave($__internal_cc658c105a5a5d91f6159d8579360d17c7b6c21b5661947c80cd2145d7326a80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae034b107c6e0cb97ed430455af06c29acb2f0c8caa4c09b3a2545c04846151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae034b107c6e0cb97ed430455af06c29acb2f0c8caa4c09b3a2545c04846151->enter($__internal_fae034b107c6e0cb97ed430455af06c29acb2f0c8caa4c09b3a2545c04846151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6e53b3480b254e3b080c1c93435514294a2a595448aa17e95cec47f8db7bf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e53b3480b254e3b080c1c93435514294a2a595448aa17e95cec47f8db7bf3e->enter($__internal_c6e53b3480b254e3b080c1c93435514294a2a595448aa17e95cec47f8db7bf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6e53b3480b254e3b080c1c93435514294a2a595448aa17e95cec47f8db7bf3e->leave($__internal_c6e53b3480b254e3b080c1c93435514294a2a595448aa17e95cec47f8db7bf3e_prof);

        
        $__internal_fae034b107c6e0cb97ed430455af06c29acb2f0c8caa4c09b3a2545c04846151->leave($__internal_fae034b107c6e0cb97ed430455af06c29acb2f0c8caa4c09b3a2545c04846151_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:FicheFrais:index.html.twig";
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

{% endblock %}", "GSBVisiteurBundle:FicheFrais:index.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/FicheFrais/index.html.twig");
    }
}
