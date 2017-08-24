<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_60c15b9a68a159d4e820d34d79e4f1f514bf71a7d29186acd248150454f9d09c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_216459fda13b0593ae5f65edbb8370ae4e73bc92350e1b7df7e370dd436dd2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216459fda13b0593ae5f65edbb8370ae4e73bc92350e1b7df7e370dd436dd2fa->enter($__internal_216459fda13b0593ae5f65edbb8370ae4e73bc92350e1b7df7e370dd436dd2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_216459fda13b0593ae5f65edbb8370ae4e73bc92350e1b7df7e370dd436dd2fa->leave($__internal_216459fda13b0593ae5f65edbb8370ae4e73bc92350e1b7df7e370dd436dd2fa_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_28812654a60930fe5e589f3ce745453f30d80f12d3663a6831e1f68c43cd0978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28812654a60930fe5e589f3ce745453f30d80f12d3663a6831e1f68c43cd0978->enter($__internal_28812654a60930fe5e589f3ce745453f30d80f12d3663a6831e1f68c43cd0978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_28812654a60930fe5e589f3ce745453f30d80f12d3663a6831e1f68c43cd0978->leave($__internal_28812654a60930fe5e589f3ce745453f30d80f12d3663a6831e1f68c43cd0978_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4d5bfa209db2a913dc6c8c5c2398c968ae5a66160cfcefcbb66525c1a2b890d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5bfa209db2a913dc6c8c5c2398c968ae5a66160cfcefcbb66525c1a2b890d2->enter($__internal_4d5bfa209db2a913dc6c8c5c2398c968ae5a66160cfcefcbb66525c1a2b890d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4d5bfa209db2a913dc6c8c5c2398c968ae5a66160cfcefcbb66525c1a2b890d2->leave($__internal_4d5bfa209db2a913dc6c8c5c2398c968ae5a66160cfcefcbb66525c1a2b890d2_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0f4ab924d8318f9ad8bee9b7e7f4d29e4d05b84eb2b92b2f44026cdd59788bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4ab924d8318f9ad8bee9b7e7f4d29e4d05b84eb2b92b2f44026cdd59788bfe->enter($__internal_0f4ab924d8318f9ad8bee9b7e7f4d29e4d05b84eb2b92b2f44026cdd59788bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0f4ab924d8318f9ad8bee9b7e7f4d29e4d05b84eb2b92b2f44026cdd59788bfe->leave($__internal_0f4ab924d8318f9ad8bee9b7e7f4d29e4d05b84eb2b92b2f44026cdd59788bfe_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_16970ae3c05fe3450027e8259d8df91675294a4ef45f1a9ee12974208d471517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16970ae3c05fe3450027e8259d8df91675294a4ef45f1a9ee12974208d471517->enter($__internal_16970ae3c05fe3450027e8259d8df91675294a4ef45f1a9ee12974208d471517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_49f054c2b07cb8dd40a297915857bd091afabbe579ea51626a4e374df28dbd57 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_743daf9b7dc99304cc7c110536f88e1def3ac58687f1e15aedc5253c3722a358 = "{{") && ('' === $__internal_743daf9b7dc99304cc7c110536f88e1def3ac58687f1e15aedc5253c3722a358 || 0 === strpos($__internal_49f054c2b07cb8dd40a297915857bd091afabbe579ea51626a4e374df28dbd57, $__internal_743daf9b7dc99304cc7c110536f88e1def3ac58687f1e15aedc5253c3722a358)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_16970ae3c05fe3450027e8259d8df91675294a4ef45f1a9ee12974208d471517->leave($__internal_16970ae3c05fe3450027e8259d8df91675294a4ef45f1a9ee12974208d471517_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a832453925188784a563ebd03658a74a2d26fd0c766c6827f0957a6a95022f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a832453925188784a563ebd03658a74a2d26fd0c766c6827f0957a6a95022f77->enter($__internal_a832453925188784a563ebd03658a74a2d26fd0c766c6827f0957a6a95022f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a832453925188784a563ebd03658a74a2d26fd0c766c6827f0957a6a95022f77->leave($__internal_a832453925188784a563ebd03658a74a2d26fd0c766c6827f0957a6a95022f77_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7bd56c4da0185fc9861e91283974db9caae73d3fe9436731783cc63c7ccec949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd56c4da0185fc9861e91283974db9caae73d3fe9436731783cc63c7ccec949->enter($__internal_7bd56c4da0185fc9861e91283974db9caae73d3fe9436731783cc63c7ccec949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_7bd56c4da0185fc9861e91283974db9caae73d3fe9436731783cc63c7ccec949->leave($__internal_7bd56c4da0185fc9861e91283974db9caae73d3fe9436731783cc63c7ccec949_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fddd5642a2892f4867cdbeb2dd2502ddc28a101f3ee0a4c74d9c1c43577d5cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddd5642a2892f4867cdbeb2dd2502ddc28a101f3ee0a4c74d9c1c43577d5cb9->enter($__internal_fddd5642a2892f4867cdbeb2dd2502ddc28a101f3ee0a4c74d9c1c43577d5cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_fddd5642a2892f4867cdbeb2dd2502ddc28a101f3ee0a4c74d9c1c43577d5cb9->leave($__internal_fddd5642a2892f4867cdbeb2dd2502ddc28a101f3ee0a4c74d9c1c43577d5cb9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b8acfb64ab62d9f6912eb4f256316f042287f005b1d3109a5570a17ce3c8c50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8acfb64ab62d9f6912eb4f256316f042287f005b1d3109a5570a17ce3c8c50a->enter($__internal_b8acfb64ab62d9f6912eb4f256316f042287f005b1d3109a5570a17ce3c8c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_b8acfb64ab62d9f6912eb4f256316f042287f005b1d3109a5570a17ce3c8c50a->leave($__internal_b8acfb64ab62d9f6912eb4f256316f042287f005b1d3109a5570a17ce3c8c50a_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_eebe625ad3f82c54824346db74ee48a26255b7442e0b3cc767ad08624ed24963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebe625ad3f82c54824346db74ee48a26255b7442e0b3cc767ad08624ed24963->enter($__internal_eebe625ad3f82c54824346db74ee48a26255b7442e0b3cc767ad08624ed24963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_eebe625ad3f82c54824346db74ee48a26255b7442e0b3cc767ad08624ed24963->leave($__internal_eebe625ad3f82c54824346db74ee48a26255b7442e0b3cc767ad08624ed24963_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6fcfbc046464337c27d0d8fb2eb643724a67f5cdbf214cfe9e8c685f653179b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcfbc046464337c27d0d8fb2eb643724a67f5cdbf214cfe9e8c685f653179b9->enter($__internal_6fcfbc046464337c27d0d8fb2eb643724a67f5cdbf214cfe9e8c685f653179b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6fcfbc046464337c27d0d8fb2eb643724a67f5cdbf214cfe9e8c685f653179b9->leave($__internal_6fcfbc046464337c27d0d8fb2eb643724a67f5cdbf214cfe9e8c685f653179b9_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_42c6dbdf3e18dc21d0ad2eefcf14b5cac08affa90e6de620a2559a2dd6244aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c6dbdf3e18dc21d0ad2eefcf14b5cac08affa90e6de620a2559a2dd6244aa7->enter($__internal_42c6dbdf3e18dc21d0ad2eefcf14b5cac08affa90e6de620a2559a2dd6244aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_42c6dbdf3e18dc21d0ad2eefcf14b5cac08affa90e6de620a2559a2dd6244aa7->leave($__internal_42c6dbdf3e18dc21d0ad2eefcf14b5cac08affa90e6de620a2559a2dd6244aa7_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_26da8a92170e370a243e4182953a4afcf555dc4dace7fe72a573fe1a17577489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26da8a92170e370a243e4182953a4afcf555dc4dace7fe72a573fe1a17577489->enter($__internal_26da8a92170e370a243e4182953a4afcf555dc4dace7fe72a573fe1a17577489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_26da8a92170e370a243e4182953a4afcf555dc4dace7fe72a573fe1a17577489->leave($__internal_26da8a92170e370a243e4182953a4afcf555dc4dace7fe72a573fe1a17577489_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_858f704e926e32efabdb393caf50e66378656399474b0cb066157bd6bafa9ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858f704e926e32efabdb393caf50e66378656399474b0cb066157bd6bafa9ef0->enter($__internal_858f704e926e32efabdb393caf50e66378656399474b0cb066157bd6bafa9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_858f704e926e32efabdb393caf50e66378656399474b0cb066157bd6bafa9ef0->leave($__internal_858f704e926e32efabdb393caf50e66378656399474b0cb066157bd6bafa9ef0_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_78bb5007c99498f1bfe12edd4f2e37aa71048013a0ada8687a7d4eb143edb3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bb5007c99498f1bfe12edd4f2e37aa71048013a0ada8687a7d4eb143edb3a6->enter($__internal_78bb5007c99498f1bfe12edd4f2e37aa71048013a0ada8687a7d4eb143edb3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_78bb5007c99498f1bfe12edd4f2e37aa71048013a0ada8687a7d4eb143edb3a6->leave($__internal_78bb5007c99498f1bfe12edd4f2e37aa71048013a0ada8687a7d4eb143edb3a6_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8fdcdb4530d51c202585722889a60408b028acc75d7d75733e7c70aa9f496a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdcdb4530d51c202585722889a60408b028acc75d7d75733e7c70aa9f496a2c->enter($__internal_8fdcdb4530d51c202585722889a60408b028acc75d7d75733e7c70aa9f496a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8fdcdb4530d51c202585722889a60408b028acc75d7d75733e7c70aa9f496a2c->leave($__internal_8fdcdb4530d51c202585722889a60408b028acc75d7d75733e7c70aa9f496a2c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3d62c625b81951d8ae35429f92f56495c8444e89796fbd92accaee0d78dd7368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d62c625b81951d8ae35429f92f56495c8444e89796fbd92accaee0d78dd7368->enter($__internal_3d62c625b81951d8ae35429f92f56495c8444e89796fbd92accaee0d78dd7368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3d62c625b81951d8ae35429f92f56495c8444e89796fbd92accaee0d78dd7368->leave($__internal_3d62c625b81951d8ae35429f92f56495c8444e89796fbd92accaee0d78dd7368_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ec057652ba286f1880d2f5f8b922089789d308ed1557240425a246674df73dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec057652ba286f1880d2f5f8b922089789d308ed1557240425a246674df73dd0->enter($__internal_ec057652ba286f1880d2f5f8b922089789d308ed1557240425a246674df73dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ec057652ba286f1880d2f5f8b922089789d308ed1557240425a246674df73dd0->leave($__internal_ec057652ba286f1880d2f5f8b922089789d308ed1557240425a246674df73dd0_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_76c90d9078fb7b924937fb32dc8ed665842fe25e3ebd0ed22156cec7c2c49428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c90d9078fb7b924937fb32dc8ed665842fe25e3ebd0ed22156cec7c2c49428->enter($__internal_76c90d9078fb7b924937fb32dc8ed665842fe25e3ebd0ed22156cec7c2c49428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
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
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_76c90d9078fb7b924937fb32dc8ed665842fe25e3ebd0ed22156cec7c2c49428->leave($__internal_76c90d9078fb7b924937fb32dc8ed665842fe25e3ebd0ed22156cec7c2c49428_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c492b3fb01c40da33af5d4dcb5778b11b7ef827672016ad3bb0cc21cb461167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c492b3fb01c40da33af5d4dcb5778b11b7ef827672016ad3bb0cc21cb461167->enter($__internal_5c492b3fb01c40da33af5d4dcb5778b11b7ef827672016ad3bb0cc21cb461167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_5c492b3fb01c40da33af5d4dcb5778b11b7ef827672016ad3bb0cc21cb461167->leave($__internal_5c492b3fb01c40da33af5d4dcb5778b11b7ef827672016ad3bb0cc21cb461167_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_03e60e1d7edcb3b50ad328309248ddb7e15d5bc0530d9472bc05b50835d9803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e60e1d7edcb3b50ad328309248ddb7e15d5bc0530d9472bc05b50835d9803a->enter($__internal_03e60e1d7edcb3b50ad328309248ddb7e15d5bc0530d9472bc05b50835d9803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_03e60e1d7edcb3b50ad328309248ddb7e15d5bc0530d9472bc05b50835d9803a->leave($__internal_03e60e1d7edcb3b50ad328309248ddb7e15d5bc0530d9472bc05b50835d9803a_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4fa1ee58ee80a2802553338ac44d850e2f7b73302ddffadd0da56c68e33994ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa1ee58ee80a2802553338ac44d850e2f7b73302ddffadd0da56c68e33994ee->enter($__internal_4fa1ee58ee80a2802553338ac44d850e2f7b73302ddffadd0da56c68e33994ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4fa1ee58ee80a2802553338ac44d850e2f7b73302ddffadd0da56c68e33994ee->leave($__internal_4fa1ee58ee80a2802553338ac44d850e2f7b73302ddffadd0da56c68e33994ee_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_315f9f03ec830a93aeec7125807bfc8acdf2841e286ecdc2f601ba6d5a0c0c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315f9f03ec830a93aeec7125807bfc8acdf2841e286ecdc2f601ba6d5a0c0c0a->enter($__internal_315f9f03ec830a93aeec7125807bfc8acdf2841e286ecdc2f601ba6d5a0c0c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_315f9f03ec830a93aeec7125807bfc8acdf2841e286ecdc2f601ba6d5a0c0c0a->leave($__internal_315f9f03ec830a93aeec7125807bfc8acdf2841e286ecdc2f601ba6d5a0c0c0a_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_85d1400fa4ed28b3dca6f60c06bde8b8576a76c5ffdefacbbd4ed2dee742da08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d1400fa4ed28b3dca6f60c06bde8b8576a76c5ffdefacbbd4ed2dee742da08->enter($__internal_85d1400fa4ed28b3dca6f60c06bde8b8576a76c5ffdefacbbd4ed2dee742da08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_85d1400fa4ed28b3dca6f60c06bde8b8576a76c5ffdefacbbd4ed2dee742da08->leave($__internal_85d1400fa4ed28b3dca6f60c06bde8b8576a76c5ffdefacbbd4ed2dee742da08_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_75b86a73c651b6f3eb2a4b7eda7a3137af01453e079f143273f5c857243c241c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b86a73c651b6f3eb2a4b7eda7a3137af01453e079f143273f5c857243c241c->enter($__internal_75b86a73c651b6f3eb2a4b7eda7a3137af01453e079f143273f5c857243c241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_75b86a73c651b6f3eb2a4b7eda7a3137af01453e079f143273f5c857243c241c->leave($__internal_75b86a73c651b6f3eb2a4b7eda7a3137af01453e079f143273f5c857243c241c_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a7557c03983eb23ab7ef05943a9a6a824caa094870c691958f090d3591e29b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7557c03983eb23ab7ef05943a9a6a824caa094870c691958f090d3591e29b66->enter($__internal_a7557c03983eb23ab7ef05943a9a6a824caa094870c691958f090d3591e29b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_a7557c03983eb23ab7ef05943a9a6a824caa094870c691958f090d3591e29b66->leave($__internal_a7557c03983eb23ab7ef05943a9a6a824caa094870c691958f090d3591e29b66_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f769c49133b98ad84864c07dea0e583425290c8ebe4c7c109f81d88e256f3a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f769c49133b98ad84864c07dea0e583425290c8ebe4c7c109f81d88e256f3a1a->enter($__internal_f769c49133b98ad84864c07dea0e583425290c8ebe4c7c109f81d88e256f3a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_f769c49133b98ad84864c07dea0e583425290c8ebe4c7c109f81d88e256f3a1a->leave($__internal_f769c49133b98ad84864c07dea0e583425290c8ebe4c7c109f81d88e256f3a1a_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1f97373d10a30d67168d508cc12413afb19ea623c4b1c8decf1dc33f1b9763ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97373d10a30d67168d508cc12413afb19ea623c4b1c8decf1dc33f1b9763ee->enter($__internal_1f97373d10a30d67168d508cc12413afb19ea623c4b1c8decf1dc33f1b9763ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1f97373d10a30d67168d508cc12413afb19ea623c4b1c8decf1dc33f1b9763ee->leave($__internal_1f97373d10a30d67168d508cc12413afb19ea623c4b1c8decf1dc33f1b9763ee_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  970 => 281,  967 => 280,  959 => 278,  955 => 277,  953 => 276,  947 => 275,  945 => 274,  939 => 273,  932 => 268,  930 => 267,  928 => 266,  922 => 265,  916 => 264,  909 => 261,  907 => 260,  905 => 259,  899 => 258,  893 => 257,  886 => 254,  884 => 253,  878 => 252,  871 => 249,  869 => 248,  863 => 247,  856 => 244,  854 => 243,  848 => 242,  841 => 239,  839 => 238,  833 => 237,  826 => 234,  824 => 233,  822 => 232,  816 => 231,  809 => 228,  807 => 227,  805 => 226,  803 => 225,  797 => 224,  791 => 223,  782 => 217,  778 => 216,  763 => 215,  759 => 212,  756 => 209,  755 => 208,  754 => 207,  752 => 206,  749 => 205,  746 => 204,  743 => 203,  740 => 202,  737 => 201,  734 => 200,  731 => 199,  728 => 198,  726 => 197,  720 => 196,  713 => 193,  707 => 192,  700 => 189,  694 => 188,  687 => 185,  685 => 184,  679 => 182,  672 => 179,  670 => 178,  664 => 177,  656 => 171,  654 => 170,  652 => 169,  649 => 167,  647 => 166,  645 => 165,  639 => 164,  631 => 160,  629 => 159,  627 => 158,  624 => 156,  622 => 155,  620 => 154,  614 => 153,  606 => 149,  600 => 146,  599 => 145,  598 => 144,  594 => 143,  590 => 142,  583 => 138,  582 => 137,  581 => 136,  577 => 135,  575 => 134,  569 => 133,  562 => 130,  560 => 129,  554 => 128,  546 => 124,  542 => 123,  537 => 119,  531 => 118,  525 => 117,  519 => 116,  513 => 115,  507 => 114,  501 => 113,  495 => 112,  490 => 108,  484 => 107,  478 => 106,  472 => 105,  466 => 104,  460 => 103,  454 => 102,  448 => 101,  443 => 98,  440 => 97,  438 => 96,  434 => 95,  432 => 94,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 273,  197 => 272,  194 => 270,  192 => 264,  189 => 263,  187 => 257,  184 => 256,  182 => 252,  179 => 251,  177 => 247,  174 => 246,  172 => 242,  169 => 241,  167 => 237,  164 => 236,  162 => 231,  159 => 230,  157 => 223,  154 => 222,  151 => 220,  149 => 196,  146 => 195,  144 => 192,  141 => 191,  139 => 188,  136 => 187,  134 => 182,  131 => 181,  129 => 177,  126 => 176,  123 => 174,  121 => 164,  118 => 163,  116 => 153,  113 => 152,  111 => 133,  108 => 132,  106 => 128,  104 => 90,  102 => 75,  99 => 74,  97 => 56,  94 => 55,  92 => 42,  89 => 41,  87 => 35,  84 => 34,  82 => 22,  79 => 21,  77 => 17,  74 => 16,  72 => 12,  69 => 11,  67 => 5,  64 => 4,  61 => 2,  14 => 1,);
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

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
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
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
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
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/darkchyper/Documents/www/nao/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
