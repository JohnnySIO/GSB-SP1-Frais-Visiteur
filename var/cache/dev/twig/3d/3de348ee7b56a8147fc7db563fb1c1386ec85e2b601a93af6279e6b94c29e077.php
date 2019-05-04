<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_36b8f72c89e5f4172917ae35bbcef6a40cc244ac7e4e771b5e4d5ab2b2b49aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fc9e4154e1f400c4780fb60b5a7484ef9380b6b8e965a3041d5a694e3010c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc9e4154e1f400c4780fb60b5a7484ef9380b6b8e965a3041d5a694e3010c3d->enter($__internal_9fc9e4154e1f400c4780fb60b5a7484ef9380b6b8e965a3041d5a694e3010c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_a528a4a8aed66b6511de486119ceba5e0d2b8cf9ee6592d1b3ac652ce8b57b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a528a4a8aed66b6511de486119ceba5e0d2b8cf9ee6592d1b3ac652ce8b57b93->enter($__internal_a528a4a8aed66b6511de486119ceba5e0d2b8cf9ee6592d1b3ac652ce8b57b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('date_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('time_widget', $context, $blocks);
        // line 78
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 116
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 140
        echo "
";
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('choice_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_label', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('button_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('choice_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('date_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('time_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_9fc9e4154e1f400c4780fb60b5a7484ef9380b6b8e965a3041d5a694e3010c3d->leave($__internal_9fc9e4154e1f400c4780fb60b5a7484ef9380b6b8e965a3041d5a694e3010c3d_prof);

        
        $__internal_a528a4a8aed66b6511de486119ceba5e0d2b8cf9ee6592d1b3ac652ce8b57b93->leave($__internal_a528a4a8aed66b6511de486119ceba5e0d2b8cf9ee6592d1b3ac652ce8b57b93_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c4b1e6e3b8a6df03ae1f854b4ba10d81b89e69ec7c409dfde22874dd3d508faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b1e6e3b8a6df03ae1f854b4ba10d81b89e69ec7c409dfde22874dd3d508faf->enter($__internal_c4b1e6e3b8a6df03ae1f854b4ba10d81b89e69ec7c409dfde22874dd3d508faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3125a9cd1bf400e25a0b96631107a369c66dd70b53038673cfa433b1a8af3fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3125a9cd1bf400e25a0b96631107a369c66dd70b53038673cfa433b1a8af3fa0->enter($__internal_3125a9cd1bf400e25a0b96631107a369c66dd70b53038673cfa433b1a8af3fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3125a9cd1bf400e25a0b96631107a369c66dd70b53038673cfa433b1a8af3fa0->leave($__internal_3125a9cd1bf400e25a0b96631107a369c66dd70b53038673cfa433b1a8af3fa0_prof);

        
        $__internal_c4b1e6e3b8a6df03ae1f854b4ba10d81b89e69ec7c409dfde22874dd3d508faf->leave($__internal_c4b1e6e3b8a6df03ae1f854b4ba10d81b89e69ec7c409dfde22874dd3d508faf_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1b9ffae2e1cd5b2ef1b3b38b383d38e22102332fb10d326062a1dc2068c554b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9ffae2e1cd5b2ef1b3b38b383d38e22102332fb10d326062a1dc2068c554b9->enter($__internal_1b9ffae2e1cd5b2ef1b3b38b383d38e22102332fb10d326062a1dc2068c554b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_896ae07e80e7c7c34c9fe83e48a03a85f936e3a84080b54f7584afd1caa3e088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ae07e80e7c7c34c9fe83e48a03a85f936e3a84080b54f7584afd1caa3e088->enter($__internal_896ae07e80e7c7c34c9fe83e48a03a85f936e3a84080b54f7584afd1caa3e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_96d97c9c96fb2d998d50261908c83e4dadcc05b13c5cd7b16f162c44a45a8eae = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_779d2cf94f231dc76313ab0511d59713250f233491762879f3c602c2a366d7af = "{{") && ('' === $__internal_779d2cf94f231dc76313ab0511d59713250f233491762879f3c602c2a366d7af || 0 === strpos($__internal_96d97c9c96fb2d998d50261908c83e4dadcc05b13c5cd7b16f162c44a45a8eae, $__internal_779d2cf94f231dc76313ab0511d59713250f233491762879f3c602c2a366d7af)));
        // line 13
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 14
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 17
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 18
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "</div>";
        
        $__internal_896ae07e80e7c7c34c9fe83e48a03a85f936e3a84080b54f7584afd1caa3e088->leave($__internal_896ae07e80e7c7c34c9fe83e48a03a85f936e3a84080b54f7584afd1caa3e088_prof);

        
        $__internal_1b9ffae2e1cd5b2ef1b3b38b383d38e22102332fb10d326062a1dc2068c554b9->leave($__internal_1b9ffae2e1cd5b2ef1b3b38b383d38e22102332fb10d326062a1dc2068c554b9_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_390fd4cf5297ff1349b0a529b61448d2a9feca120649f332933b429521da06b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390fd4cf5297ff1349b0a529b61448d2a9feca120649f332933b429521da06b9->enter($__internal_390fd4cf5297ff1349b0a529b61448d2a9feca120649f332933b429521da06b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_52c6cd8553cc17a5223ae1e43c0104a5f2bdabe35e1d867cc1cc089510e32338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c6cd8553cc17a5223ae1e43c0104a5f2bdabe35e1d867cc1cc089510e32338->enter($__internal_52c6cd8553cc17a5223ae1e43c0104a5f2bdabe35e1d867cc1cc089510e32338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_52c6cd8553cc17a5223ae1e43c0104a5f2bdabe35e1d867cc1cc089510e32338->leave($__internal_52c6cd8553cc17a5223ae1e43c0104a5f2bdabe35e1d867cc1cc089510e32338_prof);

        
        $__internal_390fd4cf5297ff1349b0a529b61448d2a9feca120649f332933b429521da06b9->leave($__internal_390fd4cf5297ff1349b0a529b61448d2a9feca120649f332933b429521da06b9_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_851b4777032b8ee226c13df7c3e51afe261f0be26a7b9ff597ecf8f448e864e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851b4777032b8ee226c13df7c3e51afe261f0be26a7b9ff597ecf8f448e864e6->enter($__internal_851b4777032b8ee226c13df7c3e51afe261f0be26a7b9ff597ecf8f448e864e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e897a4ab4cb0b774ccd0b5675d69b9bf22439980d392addebd48edb4a2bb2a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e897a4ab4cb0b774ccd0b5675d69b9bf22439980d392addebd48edb4a2bb2a1c->enter($__internal_e897a4ab4cb0b774ccd0b5675d69b9bf22439980d392addebd48edb4a2bb2a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 31
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 35
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 40
            echo "</div>";
        }
        
        $__internal_e897a4ab4cb0b774ccd0b5675d69b9bf22439980d392addebd48edb4a2bb2a1c->leave($__internal_e897a4ab4cb0b774ccd0b5675d69b9bf22439980d392addebd48edb4a2bb2a1c_prof);

        
        $__internal_851b4777032b8ee226c13df7c3e51afe261f0be26a7b9ff597ecf8f448e864e6->leave($__internal_851b4777032b8ee226c13df7c3e51afe261f0be26a7b9ff597ecf8f448e864e6_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ee86233ca8bb0c0163b96b3f875eaffe7dd115536e11edc16f8d4217eee77412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee86233ca8bb0c0163b96b3f875eaffe7dd115536e11edc16f8d4217eee77412->enter($__internal_ee86233ca8bb0c0163b96b3f875eaffe7dd115536e11edc16f8d4217eee77412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_57499bd31a2d575ec0c722048dc31ccb818151f996f93b79de86f4112b0c2962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57499bd31a2d575ec0c722048dc31ccb818151f996f93b79de86f4112b0c2962->enter($__internal_57499bd31a2d575ec0c722048dc31ccb818151f996f93b79de86f4112b0c2962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 45
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 46
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 48
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 49
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 50
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 52
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 53
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 54
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 55
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 57
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 58
                echo "</div>";
            }
        }
        
        $__internal_57499bd31a2d575ec0c722048dc31ccb818151f996f93b79de86f4112b0c2962->leave($__internal_57499bd31a2d575ec0c722048dc31ccb818151f996f93b79de86f4112b0c2962_prof);

        
        $__internal_ee86233ca8bb0c0163b96b3f875eaffe7dd115536e11edc16f8d4217eee77412->leave($__internal_ee86233ca8bb0c0163b96b3f875eaffe7dd115536e11edc16f8d4217eee77412_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ba2a55de946e1cc45844ba470ca4cc799c68037abe07868f9cd83c195efef5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2a55de946e1cc45844ba470ca4cc799c68037abe07868f9cd83c195efef5ca->enter($__internal_ba2a55de946e1cc45844ba470ca4cc799c68037abe07868f9cd83c195efef5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_179ea608e40e94a2941eb8ca92bf9a03413856d2d107ad391acd55614c53f1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179ea608e40e94a2941eb8ca92bf9a03413856d2d107ad391acd55614c53f1fa->enter($__internal_179ea608e40e94a2941eb8ca92bf9a03413856d2d107ad391acd55614c53f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 64
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 68
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 69
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 72
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 73
                echo "</div>";
            }
        }
        
        $__internal_179ea608e40e94a2941eb8ca92bf9a03413856d2d107ad391acd55614c53f1fa->leave($__internal_179ea608e40e94a2941eb8ca92bf9a03413856d2d107ad391acd55614c53f1fa_prof);

        
        $__internal_ba2a55de946e1cc45844ba470ca4cc799c68037abe07868f9cd83c195efef5ca->leave($__internal_ba2a55de946e1cc45844ba470ca4cc799c68037abe07868f9cd83c195efef5ca_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_811b4ca111661732d5965aca65fcf92355c5790c36b379fc0c6f2861a0ad68e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811b4ca111661732d5965aca65fcf92355c5790c36b379fc0c6f2861a0ad68e5->enter($__internal_811b4ca111661732d5965aca65fcf92355c5790c36b379fc0c6f2861a0ad68e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_3913abee989e3582d8691df8fe1a7b2821482a9c7ad86194ccd433ab38dc5f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3913abee989e3582d8691df8fe1a7b2821482a9c7ad86194ccd433ab38dc5f4c->enter($__internal_3913abee989e3582d8691df8fe1a7b2821482a9c7ad86194ccd433ab38dc5f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 79
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 85
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 89
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 90
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 91
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 92
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 93
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 94
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 96
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 100
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 101
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 102
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 103
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 104
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 105
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 107
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 111
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 112
            echo "</div>";
        }
        
        $__internal_3913abee989e3582d8691df8fe1a7b2821482a9c7ad86194ccd433ab38dc5f4c->leave($__internal_3913abee989e3582d8691df8fe1a7b2821482a9c7ad86194ccd433ab38dc5f4c_prof);

        
        $__internal_811b4ca111661732d5965aca65fcf92355c5790c36b379fc0c6f2861a0ad68e5->leave($__internal_811b4ca111661732d5965aca65fcf92355c5790c36b379fc0c6f2861a0ad68e5_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_33c205fe9058027a2b95bcb76ea71a2d425ebf35d2536691d25a6f0325915add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c205fe9058027a2b95bcb76ea71a2d425ebf35d2536691d25a6f0325915add->enter($__internal_33c205fe9058027a2b95bcb76ea71a2d425ebf35d2536691d25a6f0325915add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3bbe7e77f55a523f2f21cd0a6ff4fbef1743cb8558de7375f502316b9feb4c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbe7e77f55a523f2f21cd0a6ff4fbef1743cb8558de7375f502316b9feb4c24->enter($__internal_3bbe7e77f55a523f2f21cd0a6ff4fbef1743cb8558de7375f502316b9feb4c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_3bbe7e77f55a523f2f21cd0a6ff4fbef1743cb8558de7375f502316b9feb4c24->leave($__internal_3bbe7e77f55a523f2f21cd0a6ff4fbef1743cb8558de7375f502316b9feb4c24_prof);

        
        $__internal_33c205fe9058027a2b95bcb76ea71a2d425ebf35d2536691d25a6f0325915add->leave($__internal_33c205fe9058027a2b95bcb76ea71a2d425ebf35d2536691d25a6f0325915add_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b559591e73d97078195cb7c60c3bb17895b2195b9f678c37392a6706cabde481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b559591e73d97078195cb7c60c3bb17895b2195b9f678c37392a6706cabde481->enter($__internal_b559591e73d97078195cb7c60c3bb17895b2195b9f678c37392a6706cabde481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b443edc44e7965a083155b8b34a56d6ca4ea4aec53efec32598d694377bdd50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b443edc44e7965a083155b8b34a56d6ca4ea4aec53efec32598d694377bdd50e->enter($__internal_b443edc44e7965a083155b8b34a56d6ca4ea4aec53efec32598d694377bdd50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 122
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 130
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 133
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 134
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</div>";
        }
        
        $__internal_b443edc44e7965a083155b8b34a56d6ca4ea4aec53efec32598d694377bdd50e->leave($__internal_b443edc44e7965a083155b8b34a56d6ca4ea4aec53efec32598d694377bdd50e_prof);

        
        $__internal_b559591e73d97078195cb7c60c3bb17895b2195b9f678c37392a6706cabde481->leave($__internal_b559591e73d97078195cb7c60c3bb17895b2195b9f678c37392a6706cabde481_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3b606f962723077fd11398bd335dc8ac38804ff0d5709ee332eec49ae1952815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b606f962723077fd11398bd335dc8ac38804ff0d5709ee332eec49ae1952815->enter($__internal_3b606f962723077fd11398bd335dc8ac38804ff0d5709ee332eec49ae1952815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2fb7a998ac6b47c6eb7ae353f93ac283c72bd7a49b5187efaa9d1fc72fa242ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb7a998ac6b47c6eb7ae353f93ac283c72bd7a49b5187efaa9d1fc72fa242ac->enter($__internal_2fb7a998ac6b47c6eb7ae353f93ac283c72bd7a49b5187efaa9d1fc72fa242ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2fb7a998ac6b47c6eb7ae353f93ac283c72bd7a49b5187efaa9d1fc72fa242ac->leave($__internal_2fb7a998ac6b47c6eb7ae353f93ac283c72bd7a49b5187efaa9d1fc72fa242ac_prof);

        
        $__internal_3b606f962723077fd11398bd335dc8ac38804ff0d5709ee332eec49ae1952815->leave($__internal_3b606f962723077fd11398bd335dc8ac38804ff0d5709ee332eec49ae1952815_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8e90feb98dd2a254e91f64509d8ae0eb4d87dc8aba623f23efb4579c2da05142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e90feb98dd2a254e91f64509d8ae0eb4d87dc8aba623f23efb4579c2da05142->enter($__internal_8e90feb98dd2a254e91f64509d8ae0eb4d87dc8aba623f23efb4579c2da05142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5c439ee0cca4f78255b829f5d02f921d207b47035bca22111d8d324b8aa72600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c439ee0cca4f78255b829f5d02f921d207b47035bca22111d8d324b8aa72600->enter($__internal_5c439ee0cca4f78255b829f5d02f921d207b47035bca22111d8d324b8aa72600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5c439ee0cca4f78255b829f5d02f921d207b47035bca22111d8d324b8aa72600->leave($__internal_5c439ee0cca4f78255b829f5d02f921d207b47035bca22111d8d324b8aa72600_prof);

        
        $__internal_8e90feb98dd2a254e91f64509d8ae0eb4d87dc8aba623f23efb4579c2da05142->leave($__internal_8e90feb98dd2a254e91f64509d8ae0eb4d87dc8aba623f23efb4579c2da05142_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b821f8c94b5a4407428a1ca631575f1f590c8475d9d7ab48d5d4e63b07a1f046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b821f8c94b5a4407428a1ca631575f1f590c8475d9d7ab48d5d4e63b07a1f046->enter($__internal_b821f8c94b5a4407428a1ca631575f1f590c8475d9d7ab48d5d4e63b07a1f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6dc6bad29e5cd0faa08c62ed1c077d05ea009cabcf749a142de98db7e6311191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc6bad29e5cd0faa08c62ed1c077d05ea009cabcf749a142de98db7e6311191->enter($__internal_6dc6bad29e5cd0faa08c62ed1c077d05ea009cabcf749a142de98db7e6311191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6dc6bad29e5cd0faa08c62ed1c077d05ea009cabcf749a142de98db7e6311191->leave($__internal_6dc6bad29e5cd0faa08c62ed1c077d05ea009cabcf749a142de98db7e6311191_prof);

        
        $__internal_b821f8c94b5a4407428a1ca631575f1f590c8475d9d7ab48d5d4e63b07a1f046->leave($__internal_b821f8c94b5a4407428a1ca631575f1f590c8475d9d7ab48d5d4e63b07a1f046_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b3188643e01def664a3707965c756d94d6b186e730399fc6d3d8ca0baaf882bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3188643e01def664a3707965c756d94d6b186e730399fc6d3d8ca0baaf882bf->enter($__internal_b3188643e01def664a3707965c756d94d6b186e730399fc6d3d8ca0baaf882bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_134435905215a044a198b35b8ded991ebc2bf37be96b5a28cda62022c3b8c60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134435905215a044a198b35b8ded991ebc2bf37be96b5a28cda62022c3b8c60b->enter($__internal_134435905215a044a198b35b8ded991ebc2bf37be96b5a28cda62022c3b8c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_134435905215a044a198b35b8ded991ebc2bf37be96b5a28cda62022c3b8c60b->leave($__internal_134435905215a044a198b35b8ded991ebc2bf37be96b5a28cda62022c3b8c60b_prof);

        
        $__internal_b3188643e01def664a3707965c756d94d6b186e730399fc6d3d8ca0baaf882bf->leave($__internal_b3188643e01def664a3707965c756d94d6b186e730399fc6d3d8ca0baaf882bf_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d627290e5f953dea95b54f77a6cfdabd37821fbe1770ae348543cbfc69661c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d627290e5f953dea95b54f77a6cfdabd37821fbe1770ae348543cbfc69661c87->enter($__internal_d627290e5f953dea95b54f77a6cfdabd37821fbe1770ae348543cbfc69661c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_db66100967d55f1f8d0f8db78e7af1de5b20b30b324a5efecba337dd30b1b939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db66100967d55f1f8d0f8db78e7af1de5b20b30b324a5efecba337dd30b1b939->enter($__internal_db66100967d55f1f8d0f8db78e7af1de5b20b30b324a5efecba337dd30b1b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_db66100967d55f1f8d0f8db78e7af1de5b20b30b324a5efecba337dd30b1b939->leave($__internal_db66100967d55f1f8d0f8db78e7af1de5b20b30b324a5efecba337dd30b1b939_prof);

        
        $__internal_d627290e5f953dea95b54f77a6cfdabd37821fbe1770ae348543cbfc69661c87->leave($__internal_d627290e5f953dea95b54f77a6cfdabd37821fbe1770ae348543cbfc69661c87_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e42101420934ec5d8fcb87f5a4f7ac5e8732cfeb1f4362e04a83495e6053976e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42101420934ec5d8fcb87f5a4f7ac5e8732cfeb1f4362e04a83495e6053976e->enter($__internal_e42101420934ec5d8fcb87f5a4f7ac5e8732cfeb1f4362e04a83495e6053976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d5f23c8a0ebe696c47c08085e067067d16f30fb1f25f1d7b0db853238052423a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f23c8a0ebe696c47c08085e067067d16f30fb1f25f1d7b0db853238052423a->enter($__internal_d5f23c8a0ebe696c47c08085e067067d16f30fb1f25f1d7b0db853238052423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5f23c8a0ebe696c47c08085e067067d16f30fb1f25f1d7b0db853238052423a->leave($__internal_d5f23c8a0ebe696c47c08085e067067d16f30fb1f25f1d7b0db853238052423a_prof);

        
        $__internal_e42101420934ec5d8fcb87f5a4f7ac5e8732cfeb1f4362e04a83495e6053976e->leave($__internal_e42101420934ec5d8fcb87f5a4f7ac5e8732cfeb1f4362e04a83495e6053976e_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_872a1f6f7436d5e81f3cba751599a832cd61657838b8641526fed6c9d347e16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872a1f6f7436d5e81f3cba751599a832cd61657838b8641526fed6c9d347e16f->enter($__internal_872a1f6f7436d5e81f3cba751599a832cd61657838b8641526fed6c9d347e16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_259efa883665ba0e4245995eec705637d985ec1b4edad6ab234d0b8d3955c9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259efa883665ba0e4245995eec705637d985ec1b4edad6ab234d0b8d3955c9bc->enter($__internal_259efa883665ba0e4245995eec705637d985ec1b4edad6ab234d0b8d3955c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_259efa883665ba0e4245995eec705637d985ec1b4edad6ab234d0b8d3955c9bc->leave($__internal_259efa883665ba0e4245995eec705637d985ec1b4edad6ab234d0b8d3955c9bc_prof);

        
        $__internal_872a1f6f7436d5e81f3cba751599a832cd61657838b8641526fed6c9d347e16f->leave($__internal_872a1f6f7436d5e81f3cba751599a832cd61657838b8641526fed6c9d347e16f_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_292f662d533aff773d7c6c7fa1328a77953a489ddfe71774ada55481f4ca486a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292f662d533aff773d7c6c7fa1328a77953a489ddfe71774ada55481f4ca486a->enter($__internal_292f662d533aff773d7c6c7fa1328a77953a489ddfe71774ada55481f4ca486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_615c07064985312281b974b99ef1710a865c7ef4c076ed4cd86061acd48cc2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c07064985312281b974b99ef1710a865c7ef4c076ed4cd86061acd48cc2f8->enter($__internal_615c07064985312281b974b99ef1710a865c7ef4c076ed4cd86061acd48cc2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_615c07064985312281b974b99ef1710a865c7ef4c076ed4cd86061acd48cc2f8->leave($__internal_615c07064985312281b974b99ef1710a865c7ef4c076ed4cd86061acd48cc2f8_prof);

        
        $__internal_292f662d533aff773d7c6c7fa1328a77953a489ddfe71774ada55481f4ca486a->leave($__internal_292f662d533aff773d7c6c7fa1328a77953a489ddfe71774ada55481f4ca486a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  731 => 182,  729 => 181,  720 => 180,  710 => 177,  708 => 176,  699 => 175,  689 => 172,  687 => 171,  678 => 170,  668 => 167,  666 => 166,  657 => 165,  647 => 162,  645 => 161,  643 => 160,  634 => 159,  624 => 154,  615 => 153,  605 => 150,  596 => 149,  586 => 146,  584 => 145,  575 => 143,  564 => 137,  558 => 134,  557 => 133,  556 => 132,  552 => 131,  548 => 130,  541 => 126,  540 => 125,  539 => 124,  535 => 123,  533 => 122,  524 => 121,  514 => 118,  512 => 117,  503 => 116,  492 => 112,  488 => 111,  483 => 107,  477 => 106,  471 => 105,  465 => 104,  459 => 103,  453 => 102,  447 => 101,  441 => 100,  436 => 96,  430 => 95,  424 => 94,  418 => 93,  412 => 92,  406 => 91,  400 => 90,  394 => 89,  389 => 86,  386 => 85,  384 => 84,  380 => 83,  378 => 82,  375 => 80,  373 => 79,  364 => 78,  352 => 73,  350 => 72,  340 => 71,  335 => 69,  333 => 68,  331 => 67,  328 => 65,  326 => 64,  317 => 63,  305 => 58,  303 => 57,  301 => 55,  300 => 54,  299 => 53,  298 => 52,  293 => 50,  291 => 49,  289 => 48,  286 => 46,  284 => 45,  275 => 44,  264 => 40,  262 => 39,  260 => 38,  258 => 37,  256 => 36,  252 => 35,  250 => 34,  247 => 32,  245 => 31,  236 => 30,  225 => 26,  223 => 25,  221 => 24,  212 => 23,  202 => 20,  197 => 18,  195 => 17,  193 => 16,  188 => 14,  186 => 13,  184 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 180,  137 => 179,  135 => 175,  132 => 174,  130 => 170,  127 => 169,  125 => 165,  122 => 164,  120 => 159,  117 => 158,  114 => 156,  112 => 153,  109 => 152,  107 => 149,  104 => 148,  102 => 143,  99 => 142,  96 => 140,  94 => 121,  91 => 120,  89 => 116,  87 => 78,  85 => 63,  82 => 62,  80 => 44,  77 => 43,  75 => 30,  72 => 29,  70 => 23,  67 => 22,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    <div class=\"input-group{{ group_class|default('') }}\">
        {%- set append = money_pattern starts with '{{' -%}
        {%- if not append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
        {{- block('form_widget_simple') -}}
        {%- if append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
