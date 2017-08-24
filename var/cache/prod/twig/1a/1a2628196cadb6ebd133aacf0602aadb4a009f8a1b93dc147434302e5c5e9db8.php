<?php

/* participer/forms/_envoi_observation_form.html.twig */
class __TwigTemplate_5d3a094dc7db84584741f3cb22c4844c2cf2847d688196082408df6c2b58b539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27033a9b110a2ed4e02c84c817c09753b8906a3f9c45ee16d669967b2fc54beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27033a9b110a2ed4e02c84c817c09753b8906a3f9c45ee16d669967b2fc54beb->enter($__internal_27033a9b110a2ed4e02c84c817c09753b8906a3f9c45ee16d669967b2fc54beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "participer/forms/_envoi_observation_form.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <div class=\"btn-success\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 11
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 15
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "espece", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "especeTxt", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de l espèce", "data-id" => "especeId", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fn_participer_autocomplete"))));
        // line 26
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "espece", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de l espèce", "hidden" => "hidden", "value" => "")));
        // line 34
        echo "
    </div>

    <div class=\"col-xs-12\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "latitude", array()), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "latitude", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Latitude", "readonly" => "readonly")));
        echo "
    </div>

    <div class=\"col-xs-12\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "longitude", array()), 'errors');
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "longitude", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Longitude", "readonly" => "readonly")));
        echo "
    </div>

    <div id=\"sandbox-container\" class=\"col-xs-12\">
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dobs", array()), 'errors');
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dobs", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Date de l observation")));
        echo "
    </div>

    <div class=\"col-xs-12\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comm_obs", array()), 'errors');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comm_obs", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires")));
        echo "
    </div>

    <br>

    <div class=\"col-xs-12\" style=\"margin-top: 10px; text-align: center\">
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dcree", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Date de l observation", "hidden" => "hidden", "disabled" => "disabled")));
        echo "
    </div>

";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_27033a9b110a2ed4e02c84c817c09753b8906a3f9c45ee16d669967b2fc54beb->leave($__internal_27033a9b110a2ed4e02c84c817c09753b8906a3f9c45ee16d669967b2fc54beb_prof);

    }

    public function getTemplateName()
    {
        return "participer/forms/_envoi_observation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 66,  138 => 65,  132 => 62,  128 => 61,  124 => 60,  115 => 54,  111 => 53,  104 => 49,  100 => 48,  93 => 44,  89 => 43,  82 => 39,  78 => 38,  72 => 34,  70 => 27,  67 => 26,  65 => 18,  61 => 17,  57 => 15,  51 => 12,  48 => 11,  46 => 10,  43 => 9,  33 => 5,  30 => 4,  26 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/forms/_envoi_observation_form.html.twig #}
{{ form_start(form) }}
    {% for message in app.flashes('notice') %}
        <div class=\"btn-success\">
            {{ message }}
        </div>
        <br />
    {% endfor %}

    {% if form_errors(form) %}
        <div class=\"alert alert-danger\">
            {{ form_errors(form) }}
        </div>
    {% endif %}

    <div class=\"col-xs-12\">
        {{ form_errors(form.espece) }}
        {{ form_widget(form.especeTxt, {'attr': {
            'class': 'form-control',
            'placeholder': 'Nom de l espèce',
            'data-id': 'especeId',
            'data-url': path('fn_participer_autocomplete')
        }
        }

        )}}
        {{ form_widget(form.espece, {'attr': {
            'class': 'form-control',
            'placeholder': 'Nom de l espèce',
            'hidden':'hidden',
            'value':''
        } }
        )
        }}
    </div>

    <div class=\"col-xs-12\">
        {{ form_errors(form.latitude) }}
        {{ form_widget(form.latitude, {'attr': {'class': 'form-control', 'placeholder': 'Latitude', 'readonly':'readonly'}}) }}
    </div>

    <div class=\"col-xs-12\">
        {{ form_errors(form.longitude) }}
        {{ form_widget(form.longitude, {'attr': {'class': 'form-control', 'placeholder': 'Longitude', 'readonly':'readonly'}}) }}
    </div>

    <div id=\"sandbox-container\" class=\"col-xs-12\">
        {{ form_errors(form.dobs) }}
        {{ form_widget(form.dobs, {'attr': {'class': 'form-control js-datepicker', 'placeholder': 'Date de l observation'}}) }}
    </div>

    <div class=\"col-xs-12\">
        {{ form_errors(form.comm_obs) }}
        {{ form_widget(form.comm_obs, {'attr': {'class': 'form-control', 'placeholder': 'Informations complémentaires'}}) }}
    </div>

    <br>

    <div class=\"col-xs-12\" style=\"margin-top: 10px; text-align: center\">
        {{ form_widget(form.file,{'attr':{ 'class': 'form-control' }} ) }}
        {{ form_widget(form.envoyer,{'attr':{ 'class': 'btn btn-info' }} ) }}
        {{ form_widget(form.dcree, {'attr': {'class': 'form-control', 'placeholder': 'Date de l observation', 'hidden':'hidden', 'disabled':'disabled'}}) }}
    </div>

{{ form_rest(form) }}
{{ form_end(form) }}
", "participer/forms/_envoi_observation_form.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/participer/forms/_envoi_observation_form.html.twig");
    }
}
