<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e89d57279ce7deb7404fef0bea8b7ce3ca842855b173ebabafa598d8c3646644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89d57279ce7deb7404fef0bea8b7ce3ca842855b173ebabafa598d8c3646644->enter($__internal_e89d57279ce7deb7404fef0bea8b7ce3ca842855b173ebabafa598d8c3646644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f16e783dd253d3ca016aecea0fe66e95df4632318466ffc40a26b383470217c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16e783dd253d3ca016aecea0fe66e95df4632318466ffc40a26b383470217c1->enter($__internal_f16e783dd253d3ca016aecea0fe66e95df4632318466ffc40a26b383470217c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89d57279ce7deb7404fef0bea8b7ce3ca842855b173ebabafa598d8c3646644->leave($__internal_e89d57279ce7deb7404fef0bea8b7ce3ca842855b173ebabafa598d8c3646644_prof);

        
        $__internal_f16e783dd253d3ca016aecea0fe66e95df4632318466ffc40a26b383470217c1->leave($__internal_f16e783dd253d3ca016aecea0fe66e95df4632318466ffc40a26b383470217c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09e803d20ec5e63d7fe08edc7af3e34a026c64f1158f13c31d37ee09942fdb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e803d20ec5e63d7fe08edc7af3e34a026c64f1158f13c31d37ee09942fdb60->enter($__internal_09e803d20ec5e63d7fe08edc7af3e34a026c64f1158f13c31d37ee09942fdb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f79ce70ba3228f98967dcd83905ce8ea99064cd873defa761cab08d10ca360b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79ce70ba3228f98967dcd83905ce8ea99064cd873defa761cab08d10ca360b8->enter($__internal_f79ce70ba3228f98967dcd83905ce8ea99064cd873defa761cab08d10ca360b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f79ce70ba3228f98967dcd83905ce8ea99064cd873defa761cab08d10ca360b8->leave($__internal_f79ce70ba3228f98967dcd83905ce8ea99064cd873defa761cab08d10ca360b8_prof);

        
        $__internal_09e803d20ec5e63d7fe08edc7af3e34a026c64f1158f13c31d37ee09942fdb60->leave($__internal_09e803d20ec5e63d7fe08edc7af3e34a026c64f1158f13c31d37ee09942fdb60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd053a24a4ca845fcc728aee92fdb02171a993ca61d51b4d357af3dc0655bfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd053a24a4ca845fcc728aee92fdb02171a993ca61d51b4d357af3dc0655bfed->enter($__internal_cd053a24a4ca845fcc728aee92fdb02171a993ca61d51b4d357af3dc0655bfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14341cdc1a86a5e05c0489db30babb9aa527e1b1b2e2581489c7c5b67bec895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14341cdc1a86a5e05c0489db30babb9aa527e1b1b2e2581489c7c5b67bec895c->enter($__internal_14341cdc1a86a5e05c0489db30babb9aa527e1b1b2e2581489c7c5b67bec895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14341cdc1a86a5e05c0489db30babb9aa527e1b1b2e2581489c7c5b67bec895c->leave($__internal_14341cdc1a86a5e05c0489db30babb9aa527e1b1b2e2581489c7c5b67bec895c_prof);

        
        $__internal_cd053a24a4ca845fcc728aee92fdb02171a993ca61d51b4d357af3dc0655bfed->leave($__internal_cd053a24a4ca845fcc728aee92fdb02171a993ca61d51b4d357af3dc0655bfed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e71789252ab16593a73bac5e6a37a4fbc3e1fae875a6fa77f2697c3ce157881b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71789252ab16593a73bac5e6a37a4fbc3e1fae875a6fa77f2697c3ce157881b->enter($__internal_e71789252ab16593a73bac5e6a37a4fbc3e1fae875a6fa77f2697c3ce157881b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c5fe039ec276510c9ee42c728b70a36a0ce24146d789470e4a21212cf71e858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5fe039ec276510c9ee42c728b70a36a0ce24146d789470e4a21212cf71e858->enter($__internal_0c5fe039ec276510c9ee42c728b70a36a0ce24146d789470e4a21212cf71e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c5fe039ec276510c9ee42c728b70a36a0ce24146d789470e4a21212cf71e858->leave($__internal_0c5fe039ec276510c9ee42c728b70a36a0ce24146d789470e4a21212cf71e858_prof);

        
        $__internal_e71789252ab16593a73bac5e6a37a4fbc3e1fae875a6fa77f2697c3ce157881b->leave($__internal_e71789252ab16593a73bac5e6a37a4fbc3e1fae875a6fa77f2697c3ce157881b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
