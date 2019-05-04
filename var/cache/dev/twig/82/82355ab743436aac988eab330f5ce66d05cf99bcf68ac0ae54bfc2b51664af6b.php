<?php

/* GSBVisiteurBundle:Consulter:consulter.html.twig */
class __TwigTemplate_3d89bce9db0f917c7800cb4892a0e8f1bfadbb7d03f7461506e704a6ad1f992a extends Twig_Template
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
        $__internal_7cece1cdcab961b195ec903e01cba114ec5af2499597f4634365ec6040fde101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cece1cdcab961b195ec903e01cba114ec5af2499597f4634365ec6040fde101->enter($__internal_7cece1cdcab961b195ec903e01cba114ec5af2499597f4634365ec6040fde101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:consulter.html.twig"));

        $__internal_21d433a65d8565decd8a081b1c8e21f7d2acf2d08dfa76508d2f05b1f92c6026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d433a65d8565decd8a081b1c8e21f7d2acf2d08dfa76508d2f05b1f92c6026->enter($__internal_21d433a65d8565decd8a081b1c8e21f7d2acf2d08dfa76508d2f05b1f92c6026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Consulter:consulter.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
\t<center>
\t\t<h3>Liste de vos Fiche Frais</h3>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Mois</th>
\t\t\t\t<th>Nombre de Justificatifs</th>
\t\t\t\t<th>Montant valide</th>
\t\t\t\t<th>Date de la Modification</th>
\t\t\t</tr>

\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ff"] ?? $this->getContext($context, "ff")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFf"]) {
            // line 15
            echo "\t\t\t<tr>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "moisFf", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "nbJustificatifsFf", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFf"], "montantValideFf", array()), "html", null, true);
            echo " €</td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFf"], "dateModifFf", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t";
            // line 20
            if (($this->getAttribute($context["unFf"], "moisFf", array()) == ($context["mois"] ?? $this->getContext($context, "mois")))) {
                // line 21
                echo "\t\t\t\t<td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_lignefraisforfait_formulaire");
                echo "\">Ajouter frais</a></td>
\t\t\t";
            }
            // line 23
            echo "\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</table>
\t</center>
</html>
";
        
        $__internal_7cece1cdcab961b195ec903e01cba114ec5af2499597f4634365ec6040fde101->leave($__internal_7cece1cdcab961b195ec903e01cba114ec5af2499597f4634365ec6040fde101_prof);

        
        $__internal_21d433a65d8565decd8a081b1c8e21f7d2acf2d08dfa76508d2f05b1f92c6026->leave($__internal_21d433a65d8565decd8a081b1c8e21f7d2acf2d08dfa76508d2f05b1f92c6026_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Consulter:consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  71 => 23,  65 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  44 => 15,  40 => 14,  25 => 1,);
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
\t<center>
\t\t<h3>Liste de vos Fiche Frais</h3>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Mois</th>
\t\t\t\t<th>Nombre de Justificatifs</th>
\t\t\t\t<th>Montant valide</th>
\t\t\t\t<th>Date de la Modification</th>
\t\t\t</tr>

\t\t\t{% for unFf in ff %}
\t\t\t<tr>
\t\t\t<td>{{ unFf.moisFf }}</td>
\t\t\t<td>{{ unFf.nbJustificatifsFf }}</td>
\t\t\t<td>{{ unFf.montantValideFf }} €</td>
\t\t\t<td>{{ unFf.dateModifFf|date('d/m/Y') }}</td>
\t\t\t{% if unFf.moisFf == mois %}
\t\t\t\t<td><a href=\"{{ path('gsb_lignefraisforfait_formulaire') }}\">Ajouter frais</a></td>
\t\t\t{% endif %}
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t</center>
</html>
", "GSBVisiteurBundle:Consulter:consulter.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Consulter/consulter.html.twig");
    }
}
