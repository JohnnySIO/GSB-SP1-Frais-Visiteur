<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1f05a768e7ab05ac17b77ae7c4779bf1cbb1169c1c9b23941ca8eae00b59e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f05a768e7ab05ac17b77ae7c4779bf1cbb1169c1c9b23941ca8eae00b59e48->enter($__internal_b1f05a768e7ab05ac17b77ae7c4779bf1cbb1169c1c9b23941ca8eae00b59e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_201ea83e3fce172ec2d2a867b6454f160c7b68e880de8170afd072f9921cd476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201ea83e3fce172ec2d2a867b6454f160c7b68e880de8170afd072f9921cd476->enter($__internal_201ea83e3fce172ec2d2a867b6454f160c7b68e880de8170afd072f9921cd476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f05a768e7ab05ac17b77ae7c4779bf1cbb1169c1c9b23941ca8eae00b59e48->leave($__internal_b1f05a768e7ab05ac17b77ae7c4779bf1cbb1169c1c9b23941ca8eae00b59e48_prof);

        
        $__internal_201ea83e3fce172ec2d2a867b6454f160c7b68e880de8170afd072f9921cd476->leave($__internal_201ea83e3fce172ec2d2a867b6454f160c7b68e880de8170afd072f9921cd476_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7d720567ae4132b2d8ad14d0eda7caff0ec6dfdc9ee58207fbb45892d22309c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d720567ae4132b2d8ad14d0eda7caff0ec6dfdc9ee58207fbb45892d22309c->enter($__internal_d7d720567ae4132b2d8ad14d0eda7caff0ec6dfdc9ee58207fbb45892d22309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b957307ddeb464e31eb00520d6e8dc27a4af86349be03e0c183dce8b7d948012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b957307ddeb464e31eb00520d6e8dc27a4af86349be03e0c183dce8b7d948012->enter($__internal_b957307ddeb464e31eb00520d6e8dc27a4af86349be03e0c183dce8b7d948012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b957307ddeb464e31eb00520d6e8dc27a4af86349be03e0c183dce8b7d948012->leave($__internal_b957307ddeb464e31eb00520d6e8dc27a4af86349be03e0c183dce8b7d948012_prof);

        
        $__internal_d7d720567ae4132b2d8ad14d0eda7caff0ec6dfdc9ee58207fbb45892d22309c->leave($__internal_d7d720567ae4132b2d8ad14d0eda7caff0ec6dfdc9ee58207fbb45892d22309c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91cee11583f173429fa9d2bff1ea2f9377d3fdebf3ad607fc85a315708f3ca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cee11583f173429fa9d2bff1ea2f9377d3fdebf3ad607fc85a315708f3ca48->enter($__internal_91cee11583f173429fa9d2bff1ea2f9377d3fdebf3ad607fc85a315708f3ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73ae5a20bd091c31a33d71c0be508fd036ee04f5f0c0abad1addc297c14fbfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ae5a20bd091c31a33d71c0be508fd036ee04f5f0c0abad1addc297c14fbfa4->enter($__internal_73ae5a20bd091c31a33d71c0be508fd036ee04f5f0c0abad1addc297c14fbfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_73ae5a20bd091c31a33d71c0be508fd036ee04f5f0c0abad1addc297c14fbfa4->leave($__internal_73ae5a20bd091c31a33d71c0be508fd036ee04f5f0c0abad1addc297c14fbfa4_prof);

        
        $__internal_91cee11583f173429fa9d2bff1ea2f9377d3fdebf3ad607fc85a315708f3ca48->leave($__internal_91cee11583f173429fa9d2bff1ea2f9377d3fdebf3ad607fc85a315708f3ca48_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c499469f2a4a3e59614c9c9b6869a66cc440e1d68946dc19463933bdfa6df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c499469f2a4a3e59614c9c9b6869a66cc440e1d68946dc19463933bdfa6df3->enter($__internal_84c499469f2a4a3e59614c9c9b6869a66cc440e1d68946dc19463933bdfa6df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a049e7dab6874037d386d759b30db5e1e066e131ec7ff368d79ce54f88dd9b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a049e7dab6874037d386d759b30db5e1e066e131ec7ff368d79ce54f88dd9b97->enter($__internal_a049e7dab6874037d386d759b30db5e1e066e131ec7ff368d79ce54f88dd9b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a049e7dab6874037d386d759b30db5e1e066e131ec7ff368d79ce54f88dd9b97->leave($__internal_a049e7dab6874037d386d759b30db5e1e066e131ec7ff368d79ce54f88dd9b97_prof);

        
        $__internal_84c499469f2a4a3e59614c9c9b6869a66cc440e1d68946dc19463933bdfa6df3->leave($__internal_84c499469f2a4a3e59614c9c9b6869a66cc440e1d68946dc19463933bdfa6df3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
