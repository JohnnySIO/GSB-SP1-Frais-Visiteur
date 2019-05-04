<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d253ef653e106c67020065dfbf72b12755844ae6dac96f56fd63a0aabfe7977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d253ef653e106c67020065dfbf72b12755844ae6dac96f56fd63a0aabfe7977->enter($__internal_1d253ef653e106c67020065dfbf72b12755844ae6dac96f56fd63a0aabfe7977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c0f982b9bd13026cb88d0179c65638b071531e9af7c68aad349a40242e5befd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f982b9bd13026cb88d0179c65638b071531e9af7c68aad349a40242e5befd9->enter($__internal_c0f982b9bd13026cb88d0179c65638b071531e9af7c68aad349a40242e5befd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d253ef653e106c67020065dfbf72b12755844ae6dac96f56fd63a0aabfe7977->leave($__internal_1d253ef653e106c67020065dfbf72b12755844ae6dac96f56fd63a0aabfe7977_prof);

        
        $__internal_c0f982b9bd13026cb88d0179c65638b071531e9af7c68aad349a40242e5befd9->leave($__internal_c0f982b9bd13026cb88d0179c65638b071531e9af7c68aad349a40242e5befd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_901e8e7b8900d31f08c8d1da2f61f54e2f3ea320ed55c363e9e1a2c7042ae3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901e8e7b8900d31f08c8d1da2f61f54e2f3ea320ed55c363e9e1a2c7042ae3df->enter($__internal_901e8e7b8900d31f08c8d1da2f61f54e2f3ea320ed55c363e9e1a2c7042ae3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdfaf325a96937cf28b094f7b6efe68af094c8450ad875c8363f38089e1d05e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfaf325a96937cf28b094f7b6efe68af094c8450ad875c8363f38089e1d05e7->enter($__internal_fdfaf325a96937cf28b094f7b6efe68af094c8450ad875c8363f38089e1d05e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fdfaf325a96937cf28b094f7b6efe68af094c8450ad875c8363f38089e1d05e7->leave($__internal_fdfaf325a96937cf28b094f7b6efe68af094c8450ad875c8363f38089e1d05e7_prof);

        
        $__internal_901e8e7b8900d31f08c8d1da2f61f54e2f3ea320ed55c363e9e1a2c7042ae3df->leave($__internal_901e8e7b8900d31f08c8d1da2f61f54e2f3ea320ed55c363e9e1a2c7042ae3df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_02495a22edb5ad66cb89279de81b02c83e12447b6cd5c479b18434f411211142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02495a22edb5ad66cb89279de81b02c83e12447b6cd5c479b18434f411211142->enter($__internal_02495a22edb5ad66cb89279de81b02c83e12447b6cd5c479b18434f411211142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e23ad50c838186e79d4a24e46494a0566ccb41c3696bace413d23a65a3a746f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23ad50c838186e79d4a24e46494a0566ccb41c3696bace413d23a65a3a746f1->enter($__internal_e23ad50c838186e79d4a24e46494a0566ccb41c3696bace413d23a65a3a746f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e23ad50c838186e79d4a24e46494a0566ccb41c3696bace413d23a65a3a746f1->leave($__internal_e23ad50c838186e79d4a24e46494a0566ccb41c3696bace413d23a65a3a746f1_prof);

        
        $__internal_02495a22edb5ad66cb89279de81b02c83e12447b6cd5c479b18434f411211142->leave($__internal_02495a22edb5ad66cb89279de81b02c83e12447b6cd5c479b18434f411211142_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
