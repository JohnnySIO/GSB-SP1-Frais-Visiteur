<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_b877b71a47d5798ce397da7c5803c62089efaf7df97312cf7fd557ca04cd9f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70bafe01ee665c66e6213fb41fc800a25ca77ab5b65ebac1dc3aeb86cff37318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bafe01ee665c66e6213fb41fc800a25ca77ab5b65ebac1dc3aeb86cff37318->enter($__internal_70bafe01ee665c66e6213fb41fc800a25ca77ab5b65ebac1dc3aeb86cff37318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_31d791e3552d496e2bd26e2dbb1264a7f7ac67f3397e06221ce881015af8d7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d791e3552d496e2bd26e2dbb1264a7f7ac67f3397e06221ce881015af8d7db->enter($__internal_31d791e3552d496e2bd26e2dbb1264a7f7ac67f3397e06221ce881015af8d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_70bafe01ee665c66e6213fb41fc800a25ca77ab5b65ebac1dc3aeb86cff37318->leave($__internal_70bafe01ee665c66e6213fb41fc800a25ca77ab5b65ebac1dc3aeb86cff37318_prof);

        
        $__internal_31d791e3552d496e2bd26e2dbb1264a7f7ac67f3397e06221ce881015af8d7db->leave($__internal_31d791e3552d496e2bd26e2dbb1264a7f7ac67f3397e06221ce881015af8d7db_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_bfb11230233f7a00cbe4fd26283d53b853b62bd9467654f23d169d8d7538c37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb11230233f7a00cbe4fd26283d53b853b62bd9467654f23d169d8d7538c37c->enter($__internal_bfb11230233f7a00cbe4fd26283d53b853b62bd9467654f23d169d8d7538c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_24844cc5415dd2677b1ed3dad5bc8903a7914b21c62f9c5d4c98ebc1fea15097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24844cc5415dd2677b1ed3dad5bc8903a7914b21c62f9c5d4c98ebc1fea15097->enter($__internal_24844cc5415dd2677b1ed3dad5bc8903a7914b21c62f9c5d4c98ebc1fea15097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_24844cc5415dd2677b1ed3dad5bc8903a7914b21c62f9c5d4c98ebc1fea15097->leave($__internal_24844cc5415dd2677b1ed3dad5bc8903a7914b21c62f9c5d4c98ebc1fea15097_prof);

        
        $__internal_bfb11230233f7a00cbe4fd26283d53b853b62bd9467654f23d169d8d7538c37c->leave($__internal_bfb11230233f7a00cbe4fd26283d53b853b62bd9467654f23d169d8d7538c37c_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7ed1ce03f8241dc45b0d69972f99af90ac5eb96277175551b279f2f0febc6eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed1ce03f8241dc45b0d69972f99af90ac5eb96277175551b279f2f0febc6eaf->enter($__internal_7ed1ce03f8241dc45b0d69972f99af90ac5eb96277175551b279f2f0febc6eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2bfab7ac0557a7aaea687423f6c4497b095aeb6e3b78a44e1b988da5b91ac982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfab7ac0557a7aaea687423f6c4497b095aeb6e3b78a44e1b988da5b91ac982->enter($__internal_2bfab7ac0557a7aaea687423f6c4497b095aeb6e3b78a44e1b988da5b91ac982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_2bfab7ac0557a7aaea687423f6c4497b095aeb6e3b78a44e1b988da5b91ac982->leave($__internal_2bfab7ac0557a7aaea687423f6c4497b095aeb6e3b78a44e1b988da5b91ac982_prof);

        
        $__internal_7ed1ce03f8241dc45b0d69972f99af90ac5eb96277175551b279f2f0febc6eaf->leave($__internal_7ed1ce03f8241dc45b0d69972f99af90ac5eb96277175551b279f2f0febc6eaf_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_832dc6f6114af784a027d1f5e7fe75535c8cc04a9146b992f664cb4eef20acd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832dc6f6114af784a027d1f5e7fe75535c8cc04a9146b992f664cb4eef20acd8->enter($__internal_832dc6f6114af784a027d1f5e7fe75535c8cc04a9146b992f664cb4eef20acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7d955afdb02eef0ad857b1cb3bf03e6d469ff77229385f91e7c41053ff859eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d955afdb02eef0ad857b1cb3bf03e6d469ff77229385f91e7c41053ff859eb4->enter($__internal_7d955afdb02eef0ad857b1cb3bf03e6d469ff77229385f91e7c41053ff859eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_7d955afdb02eef0ad857b1cb3bf03e6d469ff77229385f91e7c41053ff859eb4->leave($__internal_7d955afdb02eef0ad857b1cb3bf03e6d469ff77229385f91e7c41053ff859eb4_prof);

        
        $__internal_832dc6f6114af784a027d1f5e7fe75535c8cc04a9146b992f664cb4eef20acd8->leave($__internal_832dc6f6114af784a027d1f5e7fe75535c8cc04a9146b992f664cb4eef20acd8_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_77e2c8fa8d83b692859e1cad254a66cb76b8d38e29e0ca52a0290da3ebaf0d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e2c8fa8d83b692859e1cad254a66cb76b8d38e29e0ca52a0290da3ebaf0d86->enter($__internal_77e2c8fa8d83b692859e1cad254a66cb76b8d38e29e0ca52a0290da3ebaf0d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7c8c542a27b81a35057027b74427c1a9a631bcf60222445fb6c40231cc3bf1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8c542a27b81a35057027b74427c1a9a631bcf60222445fb6c40231cc3bf1e6->enter($__internal_7c8c542a27b81a35057027b74427c1a9a631bcf60222445fb6c40231cc3bf1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_7c8c542a27b81a35057027b74427c1a9a631bcf60222445fb6c40231cc3bf1e6->leave($__internal_7c8c542a27b81a35057027b74427c1a9a631bcf60222445fb6c40231cc3bf1e6_prof);

        
        $__internal_77e2c8fa8d83b692859e1cad254a66cb76b8d38e29e0ca52a0290da3ebaf0d86->leave($__internal_77e2c8fa8d83b692859e1cad254a66cb76b8d38e29e0ca52a0290da3ebaf0d86_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0e309cb728b60dc076e0daa4c3e399bfaf94ac0bb6ddc1f2d4985d4c6c3995d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e309cb728b60dc076e0daa4c3e399bfaf94ac0bb6ddc1f2d4985d4c6c3995d2->enter($__internal_0e309cb728b60dc076e0daa4c3e399bfaf94ac0bb6ddc1f2d4985d4c6c3995d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ed1b676e48672cde6ba0fa539e2ed92a3cb05063435be38d4e11db063a6404c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1b676e48672cde6ba0fa539e2ed92a3cb05063435be38d4e11db063a6404c9->enter($__internal_ed1b676e48672cde6ba0fa539e2ed92a3cb05063435be38d4e11db063a6404c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_ed1b676e48672cde6ba0fa539e2ed92a3cb05063435be38d4e11db063a6404c9->leave($__internal_ed1b676e48672cde6ba0fa539e2ed92a3cb05063435be38d4e11db063a6404c9_prof);

        
        $__internal_0e309cb728b60dc076e0daa4c3e399bfaf94ac0bb6ddc1f2d4985d4c6c3995d2->leave($__internal_0e309cb728b60dc076e0daa4c3e399bfaf94ac0bb6ddc1f2d4985d4c6c3995d2_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_db6169d72ba59149f691388fea8e3a8c779b5a7fb9ecc2302262c4f213f0f11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6169d72ba59149f691388fea8e3a8c779b5a7fb9ecc2302262c4f213f0f11b->enter($__internal_db6169d72ba59149f691388fea8e3a8c779b5a7fb9ecc2302262c4f213f0f11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0079fa31d39b39692a2e8ccab5d0209842f08181588a18169a60fa978f99f831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0079fa31d39b39692a2e8ccab5d0209842f08181588a18169a60fa978f99f831->enter($__internal_0079fa31d39b39692a2e8ccab5d0209842f08181588a18169a60fa978f99f831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0079fa31d39b39692a2e8ccab5d0209842f08181588a18169a60fa978f99f831->leave($__internal_0079fa31d39b39692a2e8ccab5d0209842f08181588a18169a60fa978f99f831_prof);

        
        $__internal_db6169d72ba59149f691388fea8e3a8c779b5a7fb9ecc2302262c4f213f0f11b->leave($__internal_db6169d72ba59149f691388fea8e3a8c779b5a7fb9ecc2302262c4f213f0f11b_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_08761acd8d4755ad6f8b28368de9e6ec9760463a58e42df5208b06f98c566cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08761acd8d4755ad6f8b28368de9e6ec9760463a58e42df5208b06f98c566cc1->enter($__internal_08761acd8d4755ad6f8b28368de9e6ec9760463a58e42df5208b06f98c566cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5b08b37557562d6e034b692c9971afbcfaa9e3c91350fdc2c424bbe75c81d7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b08b37557562d6e034b692c9971afbcfaa9e3c91350fdc2c424bbe75c81d7ee->enter($__internal_5b08b37557562d6e034b692c9971afbcfaa9e3c91350fdc2c424bbe75c81d7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5b08b37557562d6e034b692c9971afbcfaa9e3c91350fdc2c424bbe75c81d7ee->leave($__internal_5b08b37557562d6e034b692c9971afbcfaa9e3c91350fdc2c424bbe75c81d7ee_prof);

        
        $__internal_08761acd8d4755ad6f8b28368de9e6ec9760463a58e42df5208b06f98c566cc1->leave($__internal_08761acd8d4755ad6f8b28368de9e6ec9760463a58e42df5208b06f98c566cc1_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_d21815817a1628fae9291b379d57d858156326cd7856bb488a3a2af67c932fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21815817a1628fae9291b379d57d858156326cd7856bb488a3a2af67c932fce->enter($__internal_d21815817a1628fae9291b379d57d858156326cd7856bb488a3a2af67c932fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_58c0758c6fffc33f81da5bbc1c4f1a7750bd25367b21dbfc33f855c435326fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c0758c6fffc33f81da5bbc1c4f1a7750bd25367b21dbfc33f855c435326fab->enter($__internal_58c0758c6fffc33f81da5bbc1c4f1a7750bd25367b21dbfc33f855c435326fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_58c0758c6fffc33f81da5bbc1c4f1a7750bd25367b21dbfc33f855c435326fab->leave($__internal_58c0758c6fffc33f81da5bbc1c4f1a7750bd25367b21dbfc33f855c435326fab_prof);

        
        $__internal_d21815817a1628fae9291b379d57d858156326cd7856bb488a3a2af67c932fce->leave($__internal_d21815817a1628fae9291b379d57d858156326cd7856bb488a3a2af67c932fce_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a23ea62cf088506bfda597a60d6bdfe3d84b8680bb46a72ba475de9b4a79804a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23ea62cf088506bfda597a60d6bdfe3d84b8680bb46a72ba475de9b4a79804a->enter($__internal_a23ea62cf088506bfda597a60d6bdfe3d84b8680bb46a72ba475de9b4a79804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e3481664688060b0f9226baf6d9109ffee9cb7d921dfaa6d679f3fa4353755f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3481664688060b0f9226baf6d9109ffee9cb7d921dfaa6d679f3fa4353755f4->enter($__internal_e3481664688060b0f9226baf6d9109ffee9cb7d921dfaa6d679f3fa4353755f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e3481664688060b0f9226baf6d9109ffee9cb7d921dfaa6d679f3fa4353755f4->leave($__internal_e3481664688060b0f9226baf6d9109ffee9cb7d921dfaa6d679f3fa4353755f4_prof);

        
        $__internal_a23ea62cf088506bfda597a60d6bdfe3d84b8680bb46a72ba475de9b4a79804a->leave($__internal_a23ea62cf088506bfda597a60d6bdfe3d84b8680bb46a72ba475de9b4a79804a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6eb870ed226c86db047e5e6938bb9e50d2ef92f1394cfebf8204360257113cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb870ed226c86db047e5e6938bb9e50d2ef92f1394cfebf8204360257113cd5->enter($__internal_6eb870ed226c86db047e5e6938bb9e50d2ef92f1394cfebf8204360257113cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_78487e953259126c61e5a88fd2347f689ffec43abade9dbe38d8748eadb8917f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78487e953259126c61e5a88fd2347f689ffec43abade9dbe38d8748eadb8917f->enter($__internal_78487e953259126c61e5a88fd2347f689ffec43abade9dbe38d8748eadb8917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_78487e953259126c61e5a88fd2347f689ffec43abade9dbe38d8748eadb8917f->leave($__internal_78487e953259126c61e5a88fd2347f689ffec43abade9dbe38d8748eadb8917f_prof);

        
        $__internal_6eb870ed226c86db047e5e6938bb9e50d2ef92f1394cfebf8204360257113cd5->leave($__internal_6eb870ed226c86db047e5e6938bb9e50d2ef92f1394cfebf8204360257113cd5_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bfb38768ce300abf5784b8e4c9aed9cce771dded608b06432e7504668e720900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb38768ce300abf5784b8e4c9aed9cce771dded608b06432e7504668e720900->enter($__internal_bfb38768ce300abf5784b8e4c9aed9cce771dded608b06432e7504668e720900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0a6e2d1d3f035b4f4d55808e48a9da22ff79241527268f47d4e33b270f038a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6e2d1d3f035b4f4d55808e48a9da22ff79241527268f47d4e33b270f038a7e->enter($__internal_0a6e2d1d3f035b4f4d55808e48a9da22ff79241527268f47d4e33b270f038a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_0a6e2d1d3f035b4f4d55808e48a9da22ff79241527268f47d4e33b270f038a7e->leave($__internal_0a6e2d1d3f035b4f4d55808e48a9da22ff79241527268f47d4e33b270f038a7e_prof);

        
        $__internal_bfb38768ce300abf5784b8e4c9aed9cce771dded608b06432e7504668e720900->leave($__internal_bfb38768ce300abf5784b8e4c9aed9cce771dded608b06432e7504668e720900_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_71351fe552cc527fc7dacb0dbb364c1a7499f76a973309c287f3e0efdd130c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71351fe552cc527fc7dacb0dbb364c1a7499f76a973309c287f3e0efdd130c9c->enter($__internal_71351fe552cc527fc7dacb0dbb364c1a7499f76a973309c287f3e0efdd130c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_24843f3fd038c364a9314b424240a73459924de15f0c349c61ded329c784ccde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24843f3fd038c364a9314b424240a73459924de15f0c349c61ded329c784ccde->enter($__internal_24843f3fd038c364a9314b424240a73459924de15f0c349c61ded329c784ccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_24843f3fd038c364a9314b424240a73459924de15f0c349c61ded329c784ccde->leave($__internal_24843f3fd038c364a9314b424240a73459924de15f0c349c61ded329c784ccde_prof);

        
        $__internal_71351fe552cc527fc7dacb0dbb364c1a7499f76a973309c287f3e0efdd130c9c->leave($__internal_71351fe552cc527fc7dacb0dbb364c1a7499f76a973309c287f3e0efdd130c9c_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_36c6599da4e9f1bd433ab55534bc4461ed43ee456f592049491a05e624805b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c6599da4e9f1bd433ab55534bc4461ed43ee456f592049491a05e624805b8c->enter($__internal_36c6599da4e9f1bd433ab55534bc4461ed43ee456f592049491a05e624805b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_87f377b863b7a6a761c70e03fa98b3a16c81a39eaf7711197aee405b8a584bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f377b863b7a6a761c70e03fa98b3a16c81a39eaf7711197aee405b8a584bfb->enter($__internal_87f377b863b7a6a761c70e03fa98b3a16c81a39eaf7711197aee405b8a584bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_87f377b863b7a6a761c70e03fa98b3a16c81a39eaf7711197aee405b8a584bfb->leave($__internal_87f377b863b7a6a761c70e03fa98b3a16c81a39eaf7711197aee405b8a584bfb_prof);

        
        $__internal_36c6599da4e9f1bd433ab55534bc4461ed43ee456f592049491a05e624805b8c->leave($__internal_36c6599da4e9f1bd433ab55534bc4461ed43ee456f592049491a05e624805b8c_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f52197c48aaf2fca7cf90254c93795ff6d5e8818b82c6db4aba90b8e57c1f23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52197c48aaf2fca7cf90254c93795ff6d5e8818b82c6db4aba90b8e57c1f23e->enter($__internal_f52197c48aaf2fca7cf90254c93795ff6d5e8818b82c6db4aba90b8e57c1f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_236724b6e7a3879f89c71f81b9d2ed27af423f3d76dd37f6a69dce51a80f8784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236724b6e7a3879f89c71f81b9d2ed27af423f3d76dd37f6a69dce51a80f8784->enter($__internal_236724b6e7a3879f89c71f81b9d2ed27af423f3d76dd37f6a69dce51a80f8784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_236724b6e7a3879f89c71f81b9d2ed27af423f3d76dd37f6a69dce51a80f8784->leave($__internal_236724b6e7a3879f89c71f81b9d2ed27af423f3d76dd37f6a69dce51a80f8784_prof);

        
        $__internal_f52197c48aaf2fca7cf90254c93795ff6d5e8818b82c6db4aba90b8e57c1f23e->leave($__internal_f52197c48aaf2fca7cf90254c93795ff6d5e8818b82c6db4aba90b8e57c1f23e_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b53aaeba5f39bd518bc98d047df876d0df3a84cc2633734932d00c68c2cfa6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53aaeba5f39bd518bc98d047df876d0df3a84cc2633734932d00c68c2cfa6de->enter($__internal_b53aaeba5f39bd518bc98d047df876d0df3a84cc2633734932d00c68c2cfa6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fd1a407686e61c0d4d737b268c1b342135c5d800e9a3685d2f3af00f3f07e870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1a407686e61c0d4d737b268c1b342135c5d800e9a3685d2f3af00f3f07e870->enter($__internal_fd1a407686e61c0d4d737b268c1b342135c5d800e9a3685d2f3af00f3f07e870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_fd1a407686e61c0d4d737b268c1b342135c5d800e9a3685d2f3af00f3f07e870->leave($__internal_fd1a407686e61c0d4d737b268c1b342135c5d800e9a3685d2f3af00f3f07e870_prof);

        
        $__internal_b53aaeba5f39bd518bc98d047df876d0df3a84cc2633734932d00c68c2cfa6de->leave($__internal_b53aaeba5f39bd518bc98d047df876d0df3a84cc2633734932d00c68c2cfa6de_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_19925d5a0349e0a5d263c806e2abb696d06dfd995a6e60870fccb41675b40317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19925d5a0349e0a5d263c806e2abb696d06dfd995a6e60870fccb41675b40317->enter($__internal_19925d5a0349e0a5d263c806e2abb696d06dfd995a6e60870fccb41675b40317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5095164dc024d53a44884533b3f82e8c6105fe1a41bb607c1331580a2ac31749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5095164dc024d53a44884533b3f82e8c6105fe1a41bb607c1331580a2ac31749->enter($__internal_5095164dc024d53a44884533b3f82e8c6105fe1a41bb607c1331580a2ac31749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_5095164dc024d53a44884533b3f82e8c6105fe1a41bb607c1331580a2ac31749->leave($__internal_5095164dc024d53a44884533b3f82e8c6105fe1a41bb607c1331580a2ac31749_prof);

        
        $__internal_19925d5a0349e0a5d263c806e2abb696d06dfd995a6e60870fccb41675b40317->leave($__internal_19925d5a0349e0a5d263c806e2abb696d06dfd995a6e60870fccb41675b40317_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/var/www/html/AppliGSB/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
