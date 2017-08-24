<?php

/* form_div_layout.html.twig */
class __TwigTemplate_46fe62e1b87cdf610f233e260ece63b8281b262f39bbdf0eafc823448c4f23f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e83508889e48aac3b2a82b850754c09b0b54f44cdab02e6a5fb0f712fadc5a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83508889e48aac3b2a82b850754c09b0b54f44cdab02e6a5fb0f712fadc5a34->enter($__internal_e83508889e48aac3b2a82b850754c09b0b54f44cdab02e6a5fb0f712fadc5a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 318
        $this->displayBlock('form_end', $context, $blocks);
        // line 325
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_rest', $context, $blocks);
        // line 356
        echo "
";
        // line 359
        $this->displayBlock('form_rows', $context, $blocks);
        // line 365
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 372
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_e83508889e48aac3b2a82b850754c09b0b54f44cdab02e6a5fb0f712fadc5a34->leave($__internal_e83508889e48aac3b2a82b850754c09b0b54f44cdab02e6a5fb0f712fadc5a34_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d2ec954f6ccf6fda227812801fb48bd0a5f6bfb89310239be42af441659b3d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ec954f6ccf6fda227812801fb48bd0a5f6bfb89310239be42af441659b3d4f->enter($__internal_d2ec954f6ccf6fda227812801fb48bd0a5f6bfb89310239be42af441659b3d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d2ec954f6ccf6fda227812801fb48bd0a5f6bfb89310239be42af441659b3d4f->leave($__internal_d2ec954f6ccf6fda227812801fb48bd0a5f6bfb89310239be42af441659b3d4f_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_001f87e34654a32184fbde3195b072056413766f7a10496fe48e51ab7cf964b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001f87e34654a32184fbde3195b072056413766f7a10496fe48e51ab7cf964b6->enter($__internal_001f87e34654a32184fbde3195b072056413766f7a10496fe48e51ab7cf964b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_001f87e34654a32184fbde3195b072056413766f7a10496fe48e51ab7cf964b6->leave($__internal_001f87e34654a32184fbde3195b072056413766f7a10496fe48e51ab7cf964b6_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_7abef4f87285d5a3ff799175ab3824f93edffe2f6aea4485ae05c1e0e23a79f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abef4f87285d5a3ff799175ab3824f93edffe2f6aea4485ae05c1e0e23a79f3->enter($__internal_7abef4f87285d5a3ff799175ab3824f93edffe2f6aea4485ae05c1e0e23a79f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_7abef4f87285d5a3ff799175ab3824f93edffe2f6aea4485ae05c1e0e23a79f3->leave($__internal_7abef4f87285d5a3ff799175ab3824f93edffe2f6aea4485ae05c1e0e23a79f3_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_00d6b8095da7ab3fdeadb76b2fd053fa0ca84ae1767b53993b4e1f715cbc650d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d6b8095da7ab3fdeadb76b2fd053fa0ca84ae1767b53993b4e1f715cbc650d->enter($__internal_00d6b8095da7ab3fdeadb76b2fd053fa0ca84ae1767b53993b4e1f715cbc650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_00d6b8095da7ab3fdeadb76b2fd053fa0ca84ae1767b53993b4e1f715cbc650d->leave($__internal_00d6b8095da7ab3fdeadb76b2fd053fa0ca84ae1767b53993b4e1f715cbc650d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a2b9bd16e51a80ae02b60b092ddfdc235477d845fa111a930347a7e6fab0fbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b9bd16e51a80ae02b60b092ddfdc235477d845fa111a930347a7e6fab0fbcf->enter($__internal_a2b9bd16e51a80ae02b60b092ddfdc235477d845fa111a930347a7e6fab0fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_a2b9bd16e51a80ae02b60b092ddfdc235477d845fa111a930347a7e6fab0fbcf->leave($__internal_a2b9bd16e51a80ae02b60b092ddfdc235477d845fa111a930347a7e6fab0fbcf_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_50a262272a8cd7c61b3653c9d86572a2f20b05582e1bdbf4d96a3695d190bbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a262272a8cd7c61b3653c9d86572a2f20b05582e1bdbf4d96a3695d190bbb3->enter($__internal_50a262272a8cd7c61b3653c9d86572a2f20b05582e1bdbf4d96a3695d190bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_50a262272a8cd7c61b3653c9d86572a2f20b05582e1bdbf4d96a3695d190bbb3->leave($__internal_50a262272a8cd7c61b3653c9d86572a2f20b05582e1bdbf4d96a3695d190bbb3_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8b2b00244e878cb7c54b6135f462feae1a9909debb04ec444e5e1fb050c28061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2b00244e878cb7c54b6135f462feae1a9909debb04ec444e5e1fb050c28061->enter($__internal_8b2b00244e878cb7c54b6135f462feae1a9909debb04ec444e5e1fb050c28061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_8b2b00244e878cb7c54b6135f462feae1a9909debb04ec444e5e1fb050c28061->leave($__internal_8b2b00244e878cb7c54b6135f462feae1a9909debb04ec444e5e1fb050c28061_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_41dfa2f12fa24c9d0e770d36c5f8a6ac065e40dbf431a3f51cf3975dd0d30a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dfa2f12fa24c9d0e770d36c5f8a6ac065e40dbf431a3f51cf3975dd0d30a49->enter($__internal_41dfa2f12fa24c9d0e770d36c5f8a6ac065e40dbf431a3f51cf3975dd0d30a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_41dfa2f12fa24c9d0e770d36c5f8a6ac065e40dbf431a3f51cf3975dd0d30a49->leave($__internal_41dfa2f12fa24c9d0e770d36c5f8a6ac065e40dbf431a3f51cf3975dd0d30a49_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_87c604bfa72e0d969ff03926837f5a1933a08a639a26eae8a5f9e2af7c1e14f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c604bfa72e0d969ff03926837f5a1933a08a639a26eae8a5f9e2af7c1e14f0->enter($__internal_87c604bfa72e0d969ff03926837f5a1933a08a639a26eae8a5f9e2af7c1e14f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    $__internal_deb42944ad801677c644866e91741d5599dfda2718c76a89ff34cb53883c0fbd = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_deb42944ad801677c644866e91741d5599dfda2718c76a89ff34cb53883c0fbd)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_deb42944ad801677c644866e91741d5599dfda2718c76a89ff34cb53883c0fbd);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_87c604bfa72e0d969ff03926837f5a1933a08a639a26eae8a5f9e2af7c1e14f0->leave($__internal_87c604bfa72e0d969ff03926837f5a1933a08a639a26eae8a5f9e2af7c1e14f0_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5869bc7993855de335ac39785b1abb6e49eca4ff540566c7068858f062680562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5869bc7993855de335ac39785b1abb6e49eca4ff540566c7068858f062680562->enter($__internal_5869bc7993855de335ac39785b1abb6e49eca4ff540566c7068858f062680562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_5869bc7993855de335ac39785b1abb6e49eca4ff540566c7068858f062680562->leave($__internal_5869bc7993855de335ac39785b1abb6e49eca4ff540566c7068858f062680562_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9e4edb666cad70d1fe16a7128ae3c7e89f1149eb324be08a122a20551f9aaa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4edb666cad70d1fe16a7128ae3c7e89f1149eb324be08a122a20551f9aaa0e->enter($__internal_9e4edb666cad70d1fe16a7128ae3c7e89f1149eb324be08a122a20551f9aaa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_9e4edb666cad70d1fe16a7128ae3c7e89f1149eb324be08a122a20551f9aaa0e->leave($__internal_9e4edb666cad70d1fe16a7128ae3c7e89f1149eb324be08a122a20551f9aaa0e_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_010556d7e271519bc0ff8888ebd2acc43cabba93f77bca0a7bed0c35cc51c815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010556d7e271519bc0ff8888ebd2acc43cabba93f77bca0a7bed0c35cc51c815->enter($__internal_010556d7e271519bc0ff8888ebd2acc43cabba93f77bca0a7bed0c35cc51c815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_010556d7e271519bc0ff8888ebd2acc43cabba93f77bca0a7bed0c35cc51c815->leave($__internal_010556d7e271519bc0ff8888ebd2acc43cabba93f77bca0a7bed0c35cc51c815_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c4a561c9186c5d394fe47d6a93e2b747406e424e11f4ec7011b81b6cd15516a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a561c9186c5d394fe47d6a93e2b747406e424e11f4ec7011b81b6cd15516a8->enter($__internal_c4a561c9186c5d394fe47d6a93e2b747406e424e11f4ec7011b81b6cd15516a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_c4a561c9186c5d394fe47d6a93e2b747406e424e11f4ec7011b81b6cd15516a8->leave($__internal_c4a561c9186c5d394fe47d6a93e2b747406e424e11f4ec7011b81b6cd15516a8_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_85f03d68aec571b835218f4b6f3a0f2dd2c334e3672f64ed7c0300f92db4dda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f03d68aec571b835218f4b6f3a0f2dd2c334e3672f64ed7c0300f92db4dda1->enter($__internal_85f03d68aec571b835218f4b6f3a0f2dd2c334e3672f64ed7c0300f92db4dda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_85f03d68aec571b835218f4b6f3a0f2dd2c334e3672f64ed7c0300f92db4dda1->leave($__internal_85f03d68aec571b835218f4b6f3a0f2dd2c334e3672f64ed7c0300f92db4dda1_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5ed5fc9e2a71ddc0209542a92178e868b32e71c462e9660708a0362b4ee49ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed5fc9e2a71ddc0209542a92178e868b32e71c462e9660708a0362b4ee49ef1->enter($__internal_5ed5fc9e2a71ddc0209542a92178e868b32e71c462e9660708a0362b4ee49ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_5ed5fc9e2a71ddc0209542a92178e868b32e71c462e9660708a0362b4ee49ef1->leave($__internal_5ed5fc9e2a71ddc0209542a92178e868b32e71c462e9660708a0362b4ee49ef1_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_d9f646c86d45792e093f290dcc48df7532b8e483fc548743a23a60b223ddda80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f646c86d45792e093f290dcc48df7532b8e483fc548743a23a60b223ddda80->enter($__internal_d9f646c86d45792e093f290dcc48df7532b8e483fc548743a23a60b223ddda80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d9f646c86d45792e093f290dcc48df7532b8e483fc548743a23a60b223ddda80->leave($__internal_d9f646c86d45792e093f290dcc48df7532b8e483fc548743a23a60b223ddda80_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_32da9e6aff53e754fb5b422eeb4b4c8eba13fdf3b6e9fb5afd8c3650adf94ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32da9e6aff53e754fb5b422eeb4b4c8eba13fdf3b6e9fb5afd8c3650adf94ede->enter($__internal_32da9e6aff53e754fb5b422eeb4b4c8eba13fdf3b6e9fb5afd8c3650adf94ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_32da9e6aff53e754fb5b422eeb4b4c8eba13fdf3b6e9fb5afd8c3650adf94ede->leave($__internal_32da9e6aff53e754fb5b422eeb4b4c8eba13fdf3b6e9fb5afd8c3650adf94ede_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_bfebeae8ebe3ff20fd4cc1a99f399aa18a006af41c19c076bbf4e85e4aabaf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfebeae8ebe3ff20fd4cc1a99f399aa18a006af41c19c076bbf4e85e4aabaf22->enter($__internal_bfebeae8ebe3ff20fd4cc1a99f399aa18a006af41c19c076bbf4e85e4aabaf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_bfebeae8ebe3ff20fd4cc1a99f399aa18a006af41c19c076bbf4e85e4aabaf22->leave($__internal_bfebeae8ebe3ff20fd4cc1a99f399aa18a006af41c19c076bbf4e85e4aabaf22_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8c41479b8f6359decedd8810ba48d91ea4a4f6a9c826143eb86b861336979ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41479b8f6359decedd8810ba48d91ea4a4f6a9c826143eb86b861336979ae9->enter($__internal_8c41479b8f6359decedd8810ba48d91ea4a4f6a9c826143eb86b861336979ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8c41479b8f6359decedd8810ba48d91ea4a4f6a9c826143eb86b861336979ae9->leave($__internal_8c41479b8f6359decedd8810ba48d91ea4a4f6a9c826143eb86b861336979ae9_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_45235e4f21e6ffd3e83efc0d3c9d1eb461759d4735ede904e60b4ebd32a25f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45235e4f21e6ffd3e83efc0d3c9d1eb461759d4735ede904e60b4ebd32a25f36->enter($__internal_45235e4f21e6ffd3e83efc0d3c9d1eb461759d4735ede904e60b4ebd32a25f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_45235e4f21e6ffd3e83efc0d3c9d1eb461759d4735ede904e60b4ebd32a25f36->leave($__internal_45235e4f21e6ffd3e83efc0d3c9d1eb461759d4735ede904e60b4ebd32a25f36_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_838ba2fd70aa6750981361b7de0e9de30c418f2416a984c3080b33297ceeb168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838ba2fd70aa6750981361b7de0e9de30c418f2416a984c3080b33297ceeb168->enter($__internal_838ba2fd70aa6750981361b7de0e9de30c418f2416a984c3080b33297ceeb168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_838ba2fd70aa6750981361b7de0e9de30c418f2416a984c3080b33297ceeb168->leave($__internal_838ba2fd70aa6750981361b7de0e9de30c418f2416a984c3080b33297ceeb168_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_260c45a193991e7b7de832296c1cef169b5e0c148e9c9befedd0c06c5cd4e909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260c45a193991e7b7de832296c1cef169b5e0c148e9c9befedd0c06c5cd4e909->enter($__internal_260c45a193991e7b7de832296c1cef169b5e0c148e9c9befedd0c06c5cd4e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_260c45a193991e7b7de832296c1cef169b5e0c148e9c9befedd0c06c5cd4e909->leave($__internal_260c45a193991e7b7de832296c1cef169b5e0c148e9c9befedd0c06c5cd4e909_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_f32f94cfc1b6e6b746bcbbe80aa5154715c2ff63e2a2d239458ad23529722e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32f94cfc1b6e6b746bcbbe80aa5154715c2ff63e2a2d239458ad23529722e54->enter($__internal_f32f94cfc1b6e6b746bcbbe80aa5154715c2ff63e2a2d239458ad23529722e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f32f94cfc1b6e6b746bcbbe80aa5154715c2ff63e2a2d239458ad23529722e54->leave($__internal_f32f94cfc1b6e6b746bcbbe80aa5154715c2ff63e2a2d239458ad23529722e54_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_54d14206aec1902bf4563332b45e7829048db0b0c6f072af00472c72bbf4cfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d14206aec1902bf4563332b45e7829048db0b0c6f072af00472c72bbf4cfeb->enter($__internal_54d14206aec1902bf4563332b45e7829048db0b0c6f072af00472c72bbf4cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_54d14206aec1902bf4563332b45e7829048db0b0c6f072af00472c72bbf4cfeb->leave($__internal_54d14206aec1902bf4563332b45e7829048db0b0c6f072af00472c72bbf4cfeb_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_4c6afa8ae0425a2f8d7b6b21c42c68b58579ae9d6f034d5c56d943dd6028980b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6afa8ae0425a2f8d7b6b21c42c68b58579ae9d6f034d5c56d943dd6028980b->enter($__internal_4c6afa8ae0425a2f8d7b6b21c42c68b58579ae9d6f034d5c56d943dd6028980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4c6afa8ae0425a2f8d7b6b21c42c68b58579ae9d6f034d5c56d943dd6028980b->leave($__internal_4c6afa8ae0425a2f8d7b6b21c42c68b58579ae9d6f034d5c56d943dd6028980b_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5e83e47e2fba5cd13ff9ad74a98d53d79a189da7c274e859a0d69787ab2b3e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e83e47e2fba5cd13ff9ad74a98d53d79a189da7c274e859a0d69787ab2b3e7a->enter($__internal_5e83e47e2fba5cd13ff9ad74a98d53d79a189da7c274e859a0d69787ab2b3e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 223
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_5e83e47e2fba5cd13ff9ad74a98d53d79a189da7c274e859a0d69787ab2b3e7a->leave($__internal_5e83e47e2fba5cd13ff9ad74a98d53d79a189da7c274e859a0d69787ab2b3e7a_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_d224d12d57913b35518b4a48c2a7bcc53fd0d87b15ad2f8f793d280ccc082ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d224d12d57913b35518b4a48c2a7bcc53fd0d87b15ad2f8f793d280ccc082ff2->enter($__internal_d224d12d57913b35518b4a48c2a7bcc53fd0d87b15ad2f8f793d280ccc082ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d224d12d57913b35518b4a48c2a7bcc53fd0d87b15ad2f8f793d280ccc082ff2->leave($__internal_d224d12d57913b35518b4a48c2a7bcc53fd0d87b15ad2f8f793d280ccc082ff2_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_84615bca100bb5383c00bd3e89bd19814fb9f0dcf83617027ce83a7bebfbf6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84615bca100bb5383c00bd3e89bd19814fb9f0dcf83617027ce83a7bebfbf6f5->enter($__internal_84615bca100bb5383c00bd3e89bd19814fb9f0dcf83617027ce83a7bebfbf6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_84615bca100bb5383c00bd3e89bd19814fb9f0dcf83617027ce83a7bebfbf6f5->leave($__internal_84615bca100bb5383c00bd3e89bd19814fb9f0dcf83617027ce83a7bebfbf6f5_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_117eda6f6bff199ae7046a54bbef7b81689dc02458f86b5b2577d8cac47672a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117eda6f6bff199ae7046a54bbef7b81689dc02458f86b5b2577d8cac47672a3->enter($__internal_117eda6f6bff199ae7046a54bbef7b81689dc02458f86b5b2577d8cac47672a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 249
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 256
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            if (($context["label_attr"] ?? $this->getContext($context, "label_attr"))) {
                $__internal_fe89cc0ab2aa8fde936e1266254052846d8f1e7b8b335291614de6a92dff940f = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_fe89cc0ab2aa8fde936e1266254052846d8f1e7b8b335291614de6a92dff940f)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_fe89cc0ab2aa8fde936e1266254052846d8f1e7b8b335291614de6a92dff940f);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_117eda6f6bff199ae7046a54bbef7b81689dc02458f86b5b2577d8cac47672a3->leave($__internal_117eda6f6bff199ae7046a54bbef7b81689dc02458f86b5b2577d8cac47672a3_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_5cce359826de4a80ab693eabd3c966cd37bcf8d204cfb4f8144d64e5beefce9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cce359826de4a80ab693eabd3c966cd37bcf8d204cfb4f8144d64e5beefce9e->enter($__internal_5cce359826de4a80ab693eabd3c966cd37bcf8d204cfb4f8144d64e5beefce9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_5cce359826de4a80ab693eabd3c966cd37bcf8d204cfb4f8144d64e5beefce9e->leave($__internal_5cce359826de4a80ab693eabd3c966cd37bcf8d204cfb4f8144d64e5beefce9e_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_4d0b8cae861351e2bdaf2a82379b6396cd383ec380770d1775b4f918d6500ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0b8cae861351e2bdaf2a82379b6396cd383ec380770d1775b4f918d6500ad8->enter($__internal_4d0b8cae861351e2bdaf2a82379b6396cd383ec380770d1775b4f918d6500ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_4d0b8cae861351e2bdaf2a82379b6396cd383ec380770d1775b4f918d6500ad8->leave($__internal_4d0b8cae861351e2bdaf2a82379b6396cd383ec380770d1775b4f918d6500ad8_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c3f3c23ce3b84d16ff082d2da100c524b3a08f6e20b7de49f3eaee309ff5702f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f3c23ce3b84d16ff082d2da100c524b3a08f6e20b7de49f3eaee309ff5702f->enter($__internal_c3f3c23ce3b84d16ff082d2da100c524b3a08f6e20b7de49f3eaee309ff5702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_c3f3c23ce3b84d16ff082d2da100c524b3a08f6e20b7de49f3eaee309ff5702f->leave($__internal_c3f3c23ce3b84d16ff082d2da100c524b3a08f6e20b7de49f3eaee309ff5702f_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f3026a7a48821f86b9ec157fe9020821cf445a10d69adb132bfd17ae143e9713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3026a7a48821f86b9ec157fe9020821cf445a10d69adb132bfd17ae143e9713->enter($__internal_f3026a7a48821f86b9ec157fe9020821cf445a10d69adb132bfd17ae143e9713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_f3026a7a48821f86b9ec157fe9020821cf445a10d69adb132bfd17ae143e9713->leave($__internal_f3026a7a48821f86b9ec157fe9020821cf445a10d69adb132bfd17ae143e9713_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e20b5fc39889b64760fb42dba2b3a58812b0d25366a79d20c9b2d408a31691ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20b5fc39889b64760fb42dba2b3a58812b0d25366a79d20c9b2d408a31691ff->enter($__internal_e20b5fc39889b64760fb42dba2b3a58812b0d25366a79d20c9b2d408a31691ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_e20b5fc39889b64760fb42dba2b3a58812b0d25366a79d20c9b2d408a31691ff->leave($__internal_e20b5fc39889b64760fb42dba2b3a58812b0d25366a79d20c9b2d408a31691ff_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_20098c05592f18f6c9789309e778c551d493d5d568c60c5e8f1d2e176dcd43c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20098c05592f18f6c9789309e778c551d493d5d568c60c5e8f1d2e176dcd43c2->enter($__internal_20098c05592f18f6c9789309e778c551d493d5d568c60c5e8f1d2e176dcd43c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_20098c05592f18f6c9789309e778c551d493d5d568c60c5e8f1d2e176dcd43c2->leave($__internal_20098c05592f18f6c9789309e778c551d493d5d568c60c5e8f1d2e176dcd43c2_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_311a529aa4c093fbc80fa6d1d1e0fde2b060e052f9b4bcb6e747195caa722704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311a529aa4c093fbc80fa6d1d1e0fde2b060e052f9b4bcb6e747195caa722704->enter($__internal_311a529aa4c093fbc80fa6d1d1e0fde2b060e052f9b4bcb6e747195caa722704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 306
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 307
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 308
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 310
            $context["form_method"] = "POST";
        }
        // line 312
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 313
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 314
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_311a529aa4c093fbc80fa6d1d1e0fde2b060e052f9b4bcb6e747195caa722704->leave($__internal_311a529aa4c093fbc80fa6d1d1e0fde2b060e052f9b4bcb6e747195caa722704_prof);

    }

    // line 318
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_fddee62ca88b2b2ed7b05e9b98d6dc5b4b478a3faaadea0c884a4c5fe746901b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddee62ca88b2b2ed7b05e9b98d6dc5b4b478a3faaadea0c884a4c5fe746901b->enter($__internal_fddee62ca88b2b2ed7b05e9b98d6dc5b4b478a3faaadea0c884a4c5fe746901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 319
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 320
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 322
        echo "</form>";
        
        $__internal_fddee62ca88b2b2ed7b05e9b98d6dc5b4b478a3faaadea0c884a4c5fe746901b->leave($__internal_fddee62ca88b2b2ed7b05e9b98d6dc5b4b478a3faaadea0c884a4c5fe746901b_prof);

    }

    // line 325
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3a55e7601144c51ad7655df1564511df61001f8e7f798416df6a2f825dc0c463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a55e7601144c51ad7655df1564511df61001f8e7f798416df6a2f825dc0c463->enter($__internal_3a55e7601144c51ad7655df1564511df61001f8e7f798416df6a2f825dc0c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 326
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 327
            echo "<ul>";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 329
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "</ul>";
        }
        
        $__internal_3a55e7601144c51ad7655df1564511df61001f8e7f798416df6a2f825dc0c463->leave($__internal_3a55e7601144c51ad7655df1564511df61001f8e7f798416df6a2f825dc0c463_prof);

    }

    // line 335
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_7b335ea86fab0fdb6e4d0afb5ee293b07740d93e6d31d65b6638082a810756b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b335ea86fab0fdb6e4d0afb5ee293b07740d93e6d31d65b6638082a810756b0->enter($__internal_7b335ea86fab0fdb6e4d0afb5ee293b07740d93e6d31d65b6638082a810756b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 338
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "
    ";
        // line 342
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && (null === $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())))) {
            // line 343
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 344
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 345
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 346
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 348
                $context["form_method"] = "POST";
            }
            // line 351
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 352
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_7b335ea86fab0fdb6e4d0afb5ee293b07740d93e6d31d65b6638082a810756b0->leave($__internal_7b335ea86fab0fdb6e4d0afb5ee293b07740d93e6d31d65b6638082a810756b0_prof);

    }

    // line 359
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_1f02a777c7bd5a52b6f1a515a7db55c914cb75272d05d38ccec05054d3741ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f02a777c7bd5a52b6f1a515a7db55c914cb75272d05d38ccec05054d3741ff9->enter($__internal_1f02a777c7bd5a52b6f1a515a7db55c914cb75272d05d38ccec05054d3741ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 361
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1f02a777c7bd5a52b6f1a515a7db55c914cb75272d05d38ccec05054d3741ff9->leave($__internal_1f02a777c7bd5a52b6f1a515a7db55c914cb75272d05d38ccec05054d3741ff9_prof);

    }

    // line 365
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_354f419223c15c56f6b7f309797ee602a0af36385abc8ae93d3c7fcef599ab3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354f419223c15c56f6b7f309797ee602a0af36385abc8ae93d3c7fcef599ab3d->enter($__internal_354f419223c15c56f6b7f309797ee602a0af36385abc8ae93d3c7fcef599ab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 367
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 368
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 369
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_354f419223c15c56f6b7f309797ee602a0af36385abc8ae93d3c7fcef599ab3d->leave($__internal_354f419223c15c56f6b7f309797ee602a0af36385abc8ae93d3c7fcef599ab3d_prof);

    }

    // line 372
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_88a659e2705e40a71b5cb0127761fe5811715302d057298d4e9fb5060d1bb25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a659e2705e40a71b5cb0127761fe5811715302d057298d4e9fb5060d1bb25d->enter($__internal_88a659e2705e40a71b5cb0127761fe5811715302d057298d4e9fb5060d1bb25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 373
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 374
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_88a659e2705e40a71b5cb0127761fe5811715302d057298d4e9fb5060d1bb25d->leave($__internal_88a659e2705e40a71b5cb0127761fe5811715302d057298d4e9fb5060d1bb25d_prof);

    }

    // line 377
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_0b4c5e04dc4ed0f471c28cf5c5d656099bf25270b5bf5e345e80d6782902608a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4c5e04dc4ed0f471c28cf5c5d656099bf25270b5bf5e345e80d6782902608a->enter($__internal_0b4c5e04dc4ed0f471c28cf5c5d656099bf25270b5bf5e345e80d6782902608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_0b4c5e04dc4ed0f471c28cf5c5d656099bf25270b5bf5e345e80d6782902608a->leave($__internal_0b4c5e04dc4ed0f471c28cf5c5d656099bf25270b5bf5e345e80d6782902608a_prof);

    }

    // line 382
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_679db03262187503bc0fd418fa63e3030d2cfe34ec021071d1b9afd564f90289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679db03262187503bc0fd418fa63e3030d2cfe34ec021071d1b9afd564f90289->enter($__internal_679db03262187503bc0fd418fa63e3030d2cfe34ec021071d1b9afd564f90289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 384
            echo " ";
            // line 385
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 386
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 387
$context["attrvalue"] === true)) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 389
$context["attrvalue"] === false)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_679db03262187503bc0fd418fa63e3030d2cfe34ec021071d1b9afd564f90289->leave($__internal_679db03262187503bc0fd418fa63e3030d2cfe34ec021071d1b9afd564f90289_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1339 => 390,  1337 => 389,  1332 => 388,  1330 => 387,  1325 => 386,  1323 => 385,  1321 => 384,  1317 => 383,  1311 => 382,  1304 => 379,  1295 => 378,  1289 => 377,  1282 => 374,  1276 => 373,  1270 => 372,  1263 => 369,  1259 => 368,  1255 => 367,  1249 => 366,  1243 => 365,  1232 => 361,  1228 => 360,  1222 => 359,  1211 => 352,  1209 => 351,  1206 => 348,  1203 => 346,  1201 => 345,  1199 => 344,  1197 => 343,  1195 => 342,  1192 => 341,  1185 => 338,  1183 => 337,  1179 => 336,  1173 => 335,  1165 => 331,  1157 => 329,  1153 => 328,  1151 => 327,  1149 => 326,  1143 => 325,  1136 => 322,  1133 => 320,  1131 => 319,  1125 => 318,  1115 => 314,  1113 => 313,  1086 => 312,  1083 => 310,  1080 => 308,  1078 => 307,  1076 => 306,  1074 => 305,  1068 => 304,  1061 => 301,  1059 => 300,  1057 => 299,  1051 => 298,  1044 => 293,  1038 => 292,  1031 => 289,  1029 => 288,  1027 => 287,  1021 => 286,  1014 => 283,  1012 => 282,  1010 => 281,  1008 => 280,  1006 => 279,  1000 => 278,  993 => 275,  987 => 270,  976 => 266,  955 => 262,  951 => 259,  948 => 256,  947 => 255,  946 => 254,  944 => 253,  942 => 252,  939 => 250,  937 => 249,  934 => 247,  932 => 246,  930 => 245,  924 => 244,  917 => 239,  915 => 238,  909 => 237,  902 => 234,  900 => 233,  894 => 232,  881 => 229,  877 => 226,  874 => 223,  873 => 222,  872 => 221,  870 => 220,  868 => 219,  862 => 218,  855 => 215,  853 => 214,  847 => 213,  840 => 210,  838 => 209,  832 => 208,  825 => 205,  823 => 204,  817 => 203,  810 => 200,  808 => 199,  802 => 198,  794 => 195,  792 => 194,  786 => 193,  779 => 190,  777 => 189,  771 => 188,  764 => 185,  762 => 184,  756 => 183,  749 => 180,  743 => 179,  736 => 176,  734 => 175,  728 => 174,  721 => 171,  719 => 170,  713 => 168,  705 => 164,  701 => 163,  697 => 160,  691 => 159,  685 => 158,  679 => 157,  673 => 156,  667 => 155,  661 => 154,  655 => 153,  650 => 149,  644 => 148,  638 => 147,  632 => 146,  626 => 145,  620 => 144,  614 => 143,  608 => 142,  602 => 139,  600 => 138,  596 => 137,  593 => 135,  591 => 134,  585 => 133,  577 => 129,  567 => 128,  562 => 127,  560 => 126,  557 => 124,  555 => 123,  549 => 122,  541 => 118,  539 => 116,  538 => 115,  537 => 114,  536 => 113,  532 => 112,  529 => 110,  527 => 109,  521 => 108,  513 => 104,  511 => 103,  509 => 102,  507 => 101,  505 => 100,  501 => 99,  498 => 97,  496 => 96,  490 => 95,  473 => 92,  467 => 91,  450 => 88,  444 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 382,  153 => 377,  151 => 372,  149 => 365,  147 => 359,  144 => 356,  142 => 335,  140 => 325,  138 => 318,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}

    {% if not form.methodRendered and form.parent is null %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/darkchyper/Documents/www/nao/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
