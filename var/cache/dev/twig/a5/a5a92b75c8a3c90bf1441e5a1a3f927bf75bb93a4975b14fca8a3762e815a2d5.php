<?php

/* GSBVisiteurBundle:Find:findVisiteur.html.twig */
class __TwigTemplate_336ba9fd60e2bfbe89765a51623a8734b038ca1a0aa62c427f8aa06326179798 extends Twig_Template
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
        $__internal_7edb932a8e5d186e6bb06aae204fc65dccb165f19046d478006485afc4cd34b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edb932a8e5d186e6bb06aae204fc65dccb165f19046d478006485afc4cd34b0->enter($__internal_7edb932a8e5d186e6bb06aae204fc65dccb165f19046d478006485afc4cd34b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Find:findVisiteur.html.twig"));

        $__internal_6bbe6bfa5bc9ca11bf58e51ec4eb694a76f576124fef4a3dd3dcf3eaa990aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbe6bfa5bc9ca11bf58e51ec4eb694a76f576124fef4a3dd3dcf3eaa990aee1->enter($__internal_6bbe6bfa5bc9ca11bf58e51ec4eb694a76f576124fef4a3dd3dcf3eaa990aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBVisiteurBundle:Find:findVisiteur.html.twig"));

        // line 2
        echo "<table border=\"1\" width=\"15%\">
<th>Liste des Visiteurs</th>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 5
            echo "<tr>
<td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["valeur"], "loginVis", array()), "html", null, true);
            echo "</td>
<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["valeur"], "mdpVis", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</table>";
        
        $__internal_7edb932a8e5d186e6bb06aae204fc65dccb165f19046d478006485afc4cd34b0->leave($__internal_7edb932a8e5d186e6bb06aae204fc65dccb165f19046d478006485afc4cd34b0_prof);

        
        $__internal_6bbe6bfa5bc9ca11bf58e51ec4eb694a76f576124fef4a3dd3dcf3eaa990aee1->leave($__internal_6bbe6bfa5bc9ca11bf58e51ec4eb694a76f576124fef4a3dd3dcf3eaa990aee1_prof);

    }

    public function getTemplateName()
    {
        return "GSBVisiteurBundle:Find:findVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<table border=\"1\" width=\"15%\">
<th>Liste des Visiteurs</th>
{% for valeur in result %}
<tr>
<td>{{ valeur.loginVis }}</td>
<td>{{ valeur.mdpVis }}</td>
</tr>
{%endfor %}
</table>", "GSBVisiteurBundle:Find:findVisiteur.html.twig", "/var/www/html/AppliGSB/src/GSB/VisiteurBundle/Resources/views/Find/findVisiteur.html.twig");
    }
}
