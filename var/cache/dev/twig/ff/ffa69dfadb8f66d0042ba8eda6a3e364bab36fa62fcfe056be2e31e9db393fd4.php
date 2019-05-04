<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7369fab46fb2dc7e238a1cd213228b44b8a83f7a99244ea83e1c62c2d6e2ac4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7369fab46fb2dc7e238a1cd213228b44b8a83f7a99244ea83e1c62c2d6e2ac4b->enter($__internal_7369fab46fb2dc7e238a1cd213228b44b8a83f7a99244ea83e1c62c2d6e2ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a76533ad67e21f421d56e040a7b4aa074bae238f5be404a867390653035c63a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76533ad67e21f421d56e040a7b4aa074bae238f5be404a867390653035c63a7->enter($__internal_a76533ad67e21f421d56e040a7b4aa074bae238f5be404a867390653035c63a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7369fab46fb2dc7e238a1cd213228b44b8a83f7a99244ea83e1c62c2d6e2ac4b->leave($__internal_7369fab46fb2dc7e238a1cd213228b44b8a83f7a99244ea83e1c62c2d6e2ac4b_prof);

        
        $__internal_a76533ad67e21f421d56e040a7b4aa074bae238f5be404a867390653035c63a7->leave($__internal_a76533ad67e21f421d56e040a7b4aa074bae238f5be404a867390653035c63a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94f373bafedeb69c328b71be7a4347d749d790eb57c5e506c9e0b843553d27ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f373bafedeb69c328b71be7a4347d749d790eb57c5e506c9e0b843553d27ac->enter($__internal_94f373bafedeb69c328b71be7a4347d749d790eb57c5e506c9e0b843553d27ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f688b1c3661951e0be45bf105ea26181af8364f541b99123db6a1a6a585a282b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f688b1c3661951e0be45bf105ea26181af8364f541b99123db6a1a6a585a282b->enter($__internal_f688b1c3661951e0be45bf105ea26181af8364f541b99123db6a1a6a585a282b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f688b1c3661951e0be45bf105ea26181af8364f541b99123db6a1a6a585a282b->leave($__internal_f688b1c3661951e0be45bf105ea26181af8364f541b99123db6a1a6a585a282b_prof);

        
        $__internal_94f373bafedeb69c328b71be7a4347d749d790eb57c5e506c9e0b843553d27ac->leave($__internal_94f373bafedeb69c328b71be7a4347d749d790eb57c5e506c9e0b843553d27ac_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_524ef44452053db5433c2d8d906ee52a6da4a05974cf22a5177e45d74cddfe0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524ef44452053db5433c2d8d906ee52a6da4a05974cf22a5177e45d74cddfe0c->enter($__internal_524ef44452053db5433c2d8d906ee52a6da4a05974cf22a5177e45d74cddfe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f848470cb3fdb40c8c02c5827eef967ef71b4596c401fcdb809e04920fc6350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f848470cb3fdb40c8c02c5827eef967ef71b4596c401fcdb809e04920fc6350a->enter($__internal_f848470cb3fdb40c8c02c5827eef967ef71b4596c401fcdb809e04920fc6350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f848470cb3fdb40c8c02c5827eef967ef71b4596c401fcdb809e04920fc6350a->leave($__internal_f848470cb3fdb40c8c02c5827eef967ef71b4596c401fcdb809e04920fc6350a_prof);

        
        $__internal_524ef44452053db5433c2d8d906ee52a6da4a05974cf22a5177e45d74cddfe0c->leave($__internal_524ef44452053db5433c2d8d906ee52a6da4a05974cf22a5177e45d74cddfe0c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9726f14489a85ca127374ec8615a9b36707a8cdca76aad9a0e03aecc7c8b45dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9726f14489a85ca127374ec8615a9b36707a8cdca76aad9a0e03aecc7c8b45dc->enter($__internal_9726f14489a85ca127374ec8615a9b36707a8cdca76aad9a0e03aecc7c8b45dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb95699ce43bcf6fd403f999f89f708231d67046ffd6da9fe58f3961baa5bd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb95699ce43bcf6fd403f999f89f708231d67046ffd6da9fe58f3961baa5bd36->enter($__internal_eb95699ce43bcf6fd403f999f89f708231d67046ffd6da9fe58f3961baa5bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb95699ce43bcf6fd403f999f89f708231d67046ffd6da9fe58f3961baa5bd36->leave($__internal_eb95699ce43bcf6fd403f999f89f708231d67046ffd6da9fe58f3961baa5bd36_prof);

        
        $__internal_9726f14489a85ca127374ec8615a9b36707a8cdca76aad9a0e03aecc7c8b45dc->leave($__internal_9726f14489a85ca127374ec8615a9b36707a8cdca76aad9a0e03aecc7c8b45dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
