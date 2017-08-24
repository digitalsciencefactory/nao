<?php

/* participer/observation_base.html.twig */
class __TwigTemplate_6239b7b5743966892f10cea6510bf545791e1860f0044646ff5199826ca370ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "participer/observation_base.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ead1586deaecef0abe68c23103a267e6b0f7676eaada6f8bf5223718f69ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ead1586deaecef0abe68c23103a267e6b0f7676eaada6f8bf5223718f69ca9->enter($__internal_76ead1586deaecef0abe68c23103a267e6b0f7676eaada6f8bf5223718f69ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "participer/observation_base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ead1586deaecef0abe68c23103a267e6b0f7676eaada6f8bf5223718f69ca9->leave($__internal_76ead1586deaecef0abe68c23103a267e6b0f7676eaada6f8bf5223718f69ca9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d82c791f27a43b1fa105976864f9366980c42b2bb5d0665e3d848df175cbc498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82c791f27a43b1fa105976864f9366980c42b2bb5d0665e3d848df175cbc498->enter($__internal_d82c791f27a43b1fa105976864f9366980c42b2bb5d0665e3d848df175cbc498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/css/autocomplete.css"), "html", null, true);
        echo "\" />

    <style>
        #carteObservationMap{
            height: 100%;
        }
    </style>
";
        
        $__internal_d82c791f27a43b1fa105976864f9366980c42b2bb5d0665e3d848df175cbc498->leave($__internal_d82c791f27a43b1fa105976864f9366980c42b2bb5d0665e3d848df175cbc498_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8de38d45ab5abe7bc80e741657aa3cea9d425066db65cf3821bae9fe8240233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8de38d45ab5abe7bc80e741657aa3cea9d425066db65cf3821bae9fe8240233->enter($__internal_c8de38d45ab5abe7bc80e741657aa3cea9d425066db65cf3821bae9fe8240233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JqueryUI -->
    <script
            src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"
            integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"
            crossorigin=\"anonymous\">

    </script>

    <!-- autocomplete -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/js/autocomplete.js"), "html", null, true);
        echo "\">
    </script>

    <!-- google maps -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcsMzqFeJRWLogNkUPgC8GNrHYkgzk7XA&callback=initMap\">
    </script>

";
        
        $__internal_c8de38d45ab5abe7bc80e741657aa3cea9d425066db65cf3821bae9fe8240233->leave($__internal_c8de38d45ab5abe7bc80e741657aa3cea9d425066db65cf3821bae9fe8240233_prof);

    }

    public function getTemplateName()
    {
        return "participer/observation_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  68 => 20,  62 => 19,  47 => 8,  41 => 6,  35 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Participer/observation_base.html.twig #}
{% extends \"base.html.twig\" %}


{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/fnat/css/autocomplete.css') }}\" />

    <style>
        #carteObservationMap{
            height: 100%;
        }
    </style>
{% endblock stylesheets %}



{% block javascripts %}
    {{ parent() }}

    <!-- JqueryUI -->
    <script
            src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\"
            integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\"
            crossorigin=\"anonymous\">

    </script>

    <!-- autocomplete -->
    <script src=\"{{ asset('assets/fnat/js/autocomplete.js') }}\">
    </script>

    <!-- google maps -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcsMzqFeJRWLogNkUPgC8GNrHYkgzk7XA&callback=initMap\">
    </script>

{% endblock javascripts %}
", "participer/observation_base.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/participer/observation_base.html.twig");
    }
}
