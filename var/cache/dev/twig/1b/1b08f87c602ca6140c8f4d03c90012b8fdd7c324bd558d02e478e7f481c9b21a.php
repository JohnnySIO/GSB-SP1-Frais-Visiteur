<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c20b0fe7f3aa2b0edb3f5270ff3783bfbc397dc64cab2bce04894a70caa649bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20b0fe7f3aa2b0edb3f5270ff3783bfbc397dc64cab2bce04894a70caa649bb->enter($__internal_c20b0fe7f3aa2b0edb3f5270ff3783bfbc397dc64cab2bce04894a70caa649bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6658c70a11b8000b8a7924f17d9822a887db369bbac150a4b133e7f905418dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6658c70a11b8000b8a7924f17d9822a887db369bbac150a4b133e7f905418dfc->enter($__internal_6658c70a11b8000b8a7924f17d9822a887db369bbac150a4b133e7f905418dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20b0fe7f3aa2b0edb3f5270ff3783bfbc397dc64cab2bce04894a70caa649bb->leave($__internal_c20b0fe7f3aa2b0edb3f5270ff3783bfbc397dc64cab2bce04894a70caa649bb_prof);

        
        $__internal_6658c70a11b8000b8a7924f17d9822a887db369bbac150a4b133e7f905418dfc->leave($__internal_6658c70a11b8000b8a7924f17d9822a887db369bbac150a4b133e7f905418dfc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dcbe61399bf798c8b64c0f824cb5d9796f4b6024937552e832e132347c288b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcbe61399bf798c8b64c0f824cb5d9796f4b6024937552e832e132347c288b6->enter($__internal_2dcbe61399bf798c8b64c0f824cb5d9796f4b6024937552e832e132347c288b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e95e4379cdf06f5050632af749e4df6cfe6cb6f9f0ae75632a19e3540354737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e95e4379cdf06f5050632af749e4df6cfe6cb6f9f0ae75632a19e3540354737->enter($__internal_1e95e4379cdf06f5050632af749e4df6cfe6cb6f9f0ae75632a19e3540354737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1e95e4379cdf06f5050632af749e4df6cfe6cb6f9f0ae75632a19e3540354737->leave($__internal_1e95e4379cdf06f5050632af749e4df6cfe6cb6f9f0ae75632a19e3540354737_prof);

        
        $__internal_2dcbe61399bf798c8b64c0f824cb5d9796f4b6024937552e832e132347c288b6->leave($__internal_2dcbe61399bf798c8b64c0f824cb5d9796f4b6024937552e832e132347c288b6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c454f35eee9e73416da9e0dbf04889f4c0dfe4350df1f512eada4aeb9516910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c454f35eee9e73416da9e0dbf04889f4c0dfe4350df1f512eada4aeb9516910->enter($__internal_1c454f35eee9e73416da9e0dbf04889f4c0dfe4350df1f512eada4aeb9516910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c7b109eef7e8bbfed511fc28ea27b0a14d12e7f5868c2b6708d855b5f727599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7b109eef7e8bbfed511fc28ea27b0a14d12e7f5868c2b6708d855b5f727599->enter($__internal_5c7b109eef7e8bbfed511fc28ea27b0a14d12e7f5868c2b6708d855b5f727599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c7b109eef7e8bbfed511fc28ea27b0a14d12e7f5868c2b6708d855b5f727599->leave($__internal_5c7b109eef7e8bbfed511fc28ea27b0a14d12e7f5868c2b6708d855b5f727599_prof);

        
        $__internal_1c454f35eee9e73416da9e0dbf04889f4c0dfe4350df1f512eada4aeb9516910->leave($__internal_1c454f35eee9e73416da9e0dbf04889f4c0dfe4350df1f512eada4aeb9516910_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa1903a258b0a26e43d8b2622e76a91a7a08c4974b2d5c7be91c852bb8e5195b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1903a258b0a26e43d8b2622e76a91a7a08c4974b2d5c7be91c852bb8e5195b->enter($__internal_fa1903a258b0a26e43d8b2622e76a91a7a08c4974b2d5c7be91c852bb8e5195b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d14e74fcf5a18784b196178f6d27a2f63fe38e26e5c722cdf1d5680004577e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d14e74fcf5a18784b196178f6d27a2f63fe38e26e5c722cdf1d5680004577e9->enter($__internal_7d14e74fcf5a18784b196178f6d27a2f63fe38e26e5c722cdf1d5680004577e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7d14e74fcf5a18784b196178f6d27a2f63fe38e26e5c722cdf1d5680004577e9->leave($__internal_7d14e74fcf5a18784b196178f6d27a2f63fe38e26e5c722cdf1d5680004577e9_prof);

        
        $__internal_fa1903a258b0a26e43d8b2622e76a91a7a08c4974b2d5c7be91c852bb8e5195b->leave($__internal_fa1903a258b0a26e43d8b2622e76a91a7a08c4974b2d5c7be91c852bb8e5195b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
