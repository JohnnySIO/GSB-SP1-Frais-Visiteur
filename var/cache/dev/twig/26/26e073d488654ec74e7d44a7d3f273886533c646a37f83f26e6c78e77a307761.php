<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_695c47174ccb4c2ae2f2b25a2cd21d56ab4130cd67c5286c9f54d7606b9fd7ad extends Twig_Template
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
        $__internal_65a97cf7ca2e8178a227cb09b4545537f3af59e42aca60d672bfbe5d77959e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a97cf7ca2e8178a227cb09b4545537f3af59e42aca60d672bfbe5d77959e65->enter($__internal_65a97cf7ca2e8178a227cb09b4545537f3af59e42aca60d672bfbe5d77959e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_1cab6d127b7368b8461b88fd2774b2d08777cef4599e61b3380cd5b9169eb8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cab6d127b7368b8461b88fd2774b2d08777cef4599e61b3380cd5b9169eb8c7->enter($__internal_1cab6d127b7368b8461b88fd2774b2d08777cef4599e61b3380cd5b9169eb8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        ";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                // line 15
                echo "            ";
                $context["status"] = "error";
                // line 16
                echo "        ";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                // line 17
                echo "            ";
                $context["status"] = "warning";
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["severity"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array()), false)) : (false));
                // line 20
                echo "            ";
                $context["status"] = ((((($context["severity"] ?? $this->getContext($context, "severity")) === constant("E_DEPRECATED")) || (($context["severity"] ?? $this->getContext($context, "severity")) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 21
                echo "        ";
            }
            // line 22
            echo "        <tr class=\"status-";
            echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 27
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                // line 28
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 32
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
        
        $__internal_65a97cf7ca2e8178a227cb09b4545537f3af59e42aca60d672bfbe5d77959e65->leave($__internal_65a97cf7ca2e8178a227cb09b4545537f3af59e42aca60d672bfbe5d77959e65_prof);

        
        $__internal_1cab6d127b7368b8461b88fd2774b2d08777cef4599e61b3380cd5b9169eb8c7->leave($__internal_1cab6d127b7368b8461b88fd2774b2d08777cef4599e61b3380cd5b9169eb8c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  99 => 32,  93 => 29,  90 => 28,  88 => 27,  83 => 25,  79 => 24,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  45 => 13,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set channel_is_defined = (logs|first).channel is defined %}

<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            {% if channel_is_defined %}<th>Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        {% if log.priority >= 400 %}
            {% set status = 'error' %}
        {% elseif log.priority >= 300 %}
            {% set status = 'warning' %}
        {% else %}
            {% set severity = log.context.exception.severity|default(false) %}
            {% set status = severity is constant('E_DEPRECATED') or severity is constant('E_USER_DEPRECATED') ? 'warning' : 'normal' %}
        {% endif %}
        <tr class=\"status-{{ status }}\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>{{ log.message|format_log_message(log.context) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
