<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78b26fbf7e3cf0033638faa10a8317dc6f28ce5128a7cc7010e21f82667b39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78b26fbf7e3cf0033638faa10a8317dc6f28ce5128a7cc7010e21f82667b39f->enter($__internal_f78b26fbf7e3cf0033638faa10a8317dc6f28ce5128a7cc7010e21f82667b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_93032e22dbf4996be633faa618176d8c27eb8736d9bd6aee52bd9d09f6374d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93032e22dbf4996be633faa618176d8c27eb8736d9bd6aee52bd9d09f6374d5f->enter($__internal_93032e22dbf4996be633faa618176d8c27eb8736d9bd6aee52bd9d09f6374d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap-4.0.0/dist.css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_f78b26fbf7e3cf0033638faa10a8317dc6f28ce5128a7cc7010e21f82667b39f->leave($__internal_f78b26fbf7e3cf0033638faa10a8317dc6f28ce5128a7cc7010e21f82667b39f_prof);

        
        $__internal_93032e22dbf4996be633faa618176d8c27eb8736d9bd6aee52bd9d09f6374d5f->leave($__internal_93032e22dbf4996be633faa618176d8c27eb8736d9bd6aee52bd9d09f6374d5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb36b26871ec14278715c78c6d7291217f22fc4ceb07cf6cc5b40c7618c108b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb36b26871ec14278715c78c6d7291217f22fc4ceb07cf6cc5b40c7618c108b7->enter($__internal_eb36b26871ec14278715c78c6d7291217f22fc4ceb07cf6cc5b40c7618c108b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca15a4a10bbe9aab2f17163c13d3c2c7e5c86efc8f97035148393a91232d1d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca15a4a10bbe9aab2f17163c13d3c2c7e5c86efc8f97035148393a91232d1d4a->enter($__internal_ca15a4a10bbe9aab2f17163c13d3c2c7e5c86efc8f97035148393a91232d1d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca15a4a10bbe9aab2f17163c13d3c2c7e5c86efc8f97035148393a91232d1d4a->leave($__internal_ca15a4a10bbe9aab2f17163c13d3c2c7e5c86efc8f97035148393a91232d1d4a_prof);

        
        $__internal_eb36b26871ec14278715c78c6d7291217f22fc4ceb07cf6cc5b40c7618c108b7->leave($__internal_eb36b26871ec14278715c78c6d7291217f22fc4ceb07cf6cc5b40c7618c108b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c595f94494c7dd7e998e6db5381a93b8790d67dc0f74315355b1422f55c57b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c595f94494c7dd7e998e6db5381a93b8790d67dc0f74315355b1422f55c57b8f->enter($__internal_c595f94494c7dd7e998e6db5381a93b8790d67dc0f74315355b1422f55c57b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59ce02742657cadbadc554720c580f219cdcade4f6d9f52b0edd88353a4e15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ce02742657cadbadc554720c580f219cdcade4f6d9f52b0edd88353a4e15ce->enter($__internal_59ce02742657cadbadc554720c580f219cdcade4f6d9f52b0edd88353a4e15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_59ce02742657cadbadc554720c580f219cdcade4f6d9f52b0edd88353a4e15ce->leave($__internal_59ce02742657cadbadc554720c580f219cdcade4f6d9f52b0edd88353a4e15ce_prof);

        
        $__internal_c595f94494c7dd7e998e6db5381a93b8790d67dc0f74315355b1422f55c57b8f->leave($__internal_c595f94494c7dd7e998e6db5381a93b8790d67dc0f74315355b1422f55c57b8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a43fb46580a3623e3d201ad9e176f8478a04a8dda0dc582d16c99960d56a735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a43fb46580a3623e3d201ad9e176f8478a04a8dda0dc582d16c99960d56a735->enter($__internal_4a43fb46580a3623e3d201ad9e176f8478a04a8dda0dc582d16c99960d56a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10c74651379c2c19cf1e00759a29185c1c59c446dfe397dbf71dad2ebab54e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c74651379c2c19cf1e00759a29185c1c59c446dfe397dbf71dad2ebab54e55->enter($__internal_10c74651379c2c19cf1e00759a29185c1c59c446dfe397dbf71dad2ebab54e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10c74651379c2c19cf1e00759a29185c1c59c446dfe397dbf71dad2ebab54e55->leave($__internal_10c74651379c2c19cf1e00759a29185c1c59c446dfe397dbf71dad2ebab54e55_prof);

        
        $__internal_4a43fb46580a3623e3d201ad9e176f8478a04a8dda0dc582d16c99960d56a735->leave($__internal_4a43fb46580a3623e3d201ad9e176f8478a04a8dda0dc582d16c99960d56a735_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa3106d665bf5132507e90961b892632d0a04dd8b3b135fbbaca6c69a3a5d438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3106d665bf5132507e90961b892632d0a04dd8b3b135fbbaca6c69a3a5d438->enter($__internal_aa3106d665bf5132507e90961b892632d0a04dd8b3b135fbbaca6c69a3a5d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbdeb6866a4dd9af0f7e44c042440a33e32b72a52fb18253bdb33d3ac8729ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdeb6866a4dd9af0f7e44c042440a33e32b72a52fb18253bdb33d3ac8729ee2->enter($__internal_bbdeb6866a4dd9af0f7e44c042440a33e32b72a52fb18253bdb33d3ac8729ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbdeb6866a4dd9af0f7e44c042440a33e32b72a52fb18253bdb33d3ac8729ee2->leave($__internal_bbdeb6866a4dd9af0f7e44c042440a33e32b72a52fb18253bdb33d3ac8729ee2_prof);

        
        $__internal_aa3106d665bf5132507e90961b892632d0a04dd8b3b135fbbaca6c69a3a5d438->leave($__internal_aa3106d665bf5132507e90961b892632d0a04dd8b3b135fbbaca6c69a3a5d438_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link href=\"{{ asset('/css/bootstrap-4.0.0/dist.css/bootstrap.min.css') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/AppliGSB/app/Resources/views/base.html.twig");
    }
}
