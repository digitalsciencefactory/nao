<?php

/* participer/envoi_observation.html.twig */
class __TwigTemplate_4e9a34577fd203869d58556242830f0b089d514673c45fba66dc846b617de221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("participer/observation_base.html.twig", "participer/envoi_observation.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "participer/observation_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd9ce816fb43f9002bc5724007037f51d85fde8a028c9321538ebc541e18015f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9ce816fb43f9002bc5724007037f51d85fde8a028c9321538ebc541e18015f->enter($__internal_fd9ce816fb43f9002bc5724007037f51d85fde8a028c9321538ebc541e18015f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "participer/envoi_observation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9ce816fb43f9002bc5724007037f51d85fde8a028c9321538ebc541e18015f->leave($__internal_fd9ce816fb43f9002bc5724007037f51d85fde8a028c9321538ebc541e18015f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12a465ff7ead291c8d6dbc973a56099541f906b9c06c67c363113f685fa1f6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a465ff7ead291c8d6dbc973a56099541f906b9c06c67c363113f685fa1f6ba->enter($__internal_12a465ff7ead291c8d6dbc973a56099541f906b9c06c67c363113f685fa1f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Envoi Observation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_12a465ff7ead291c8d6dbc973a56099541f906b9c06c67c363113f685fa1f6ba->leave($__internal_12a465ff7ead291c8d6dbc973a56099541f906b9c06c67c363113f685fa1f6ba_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1359c4555f76bab4a9a8141a924bfad2f63c9a060587e37e25c4674f05428fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1359c4555f76bab4a9a8141a924bfad2f63c9a060587e37e25c4674f05428fb6->enter($__internal_1359c4555f76bab4a9a8141a924bfad2f63c9a060587e37e25c4674f05428fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
    <style>
        #envoieObservationMap {
            height: 100%;
        }
    </style>
";
        
        $__internal_1359c4555f76bab4a9a8141a924bfad2f63c9a060587e37e25c4674f05428fb6->leave($__internal_1359c4555f76bab4a9a8141a924bfad2f63c9a060587e37e25c4674f05428fb6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd82347e19062354c0716b26732d63c0e7ce282a189268985e3063496e822741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd82347e19062354c0716b26732d63c0e7ce282a189268985e3063496e822741->enter($__internal_cd82347e19062354c0716b26732d63c0e7ce282a189268985e3063496e822741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <section class=\"mbr-section mbr-after-navbar\" id=\"content5-34\" style=\"background-color: rgb(105, 176, 171); padding-top: 120px; padding-bottom: 0px;\">
        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">
                Participer
            </h3>
            <div class=\"lead\">
                <p>Grâce au formulaire ci-dessous, vous pouvez nous envoyer votre observations sur le terrain.</p>
                <p>Ce formulaire est strictement réservé aux observations concernant les oiseaux.</p>
                <p>Merci de remplir un formulaire pour chaque spécimen aperçu.</p>
            </div>
        </div>
    </section>

    <section class=\"mbr-section-no-padding extForm4\" id=\"extForm4-35\" style=\"background-color: rgb(255, 255, 255);\">
        <div class=\"mbr-table mbr-table-full\">
            <div class=\"mbr-table-cell\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"mbr-table-md-up\">
                            <div class=\"mbr-table-cell col-md-6 text-xs-center text-md-left inverse\">
                                <div class=\"wrapper\">
                                    <h2 class=\"display-2 h-black\">
                                        Formulaire <br>
                                        envoi observation
                                    </h2>

                                    <div class=\"row text-center\">
                                        <div class=\"col-md-12 parentInverse\">
                                            <div class=\"col-md-12 col-lg-12 inverse-content\">
                                                <div class=\"intro-box right\">
                                                    <div class=\"contentInverse\">
                                                        <h5 class=\"subtitle\">
                                                            Si vous nʼêtes pas certain du nom de lʼespèce, joindre une photo facilitera la validation par un naturaliste
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-12\" style=\"padding-left: 0px; padding-right: 0px;\">

                                        ";
        // line 62
        echo twig_include($this->env, $context, "participer/forms/_envoi_observation_form.html.twig");
        echo "

                                    </div>
                                </div>
                            </div>

                            <div class=\"mbr-table mbr-valign-top col-md-6\">
                                <div class=\"mbr-map\">
                                    <div id=\"envoieObservationMap\"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 81
        echo twig_include($this->env, $context, "front/blocks/_follow.html.twig");
        echo "

    ";
        // line 83
        echo twig_include($this->env, $context, "front/blocks/_adresse.html.twig");
        echo "

";
        
        $__internal_cd82347e19062354c0716b26732d63c0e7ce282a189268985e3063496e822741->leave($__internal_cd82347e19062354c0716b26732d63c0e7ce282a189268985e3063496e822741_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ea176b4dc44246ad390fe167f286b5960d6b8e2d353b04e771eb473c26f0b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea176b4dc44246ad390fe167f286b5960d6b8e2d353b04e771eb473c26f0b2e->enter($__internal_6ea176b4dc44246ad390fe167f286b5960d6b8e2d353b04e771eb473c26f0b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>

    <script>
        \$('#sandbox-container input').datepicker({
            format: \"dd/mm/yyyy\",
            weekStart: 1,
            endDate: \"Today\",
            language: \"fr\",
            daysOfWeekHighlighted: \"0\",
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true
        });
    </script>

    <!-- google maps -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/js/googlemaps_envoie_observation.js"), "html", null, true);
        echo "\" ></script>

";
        
        $__internal_6ea176b4dc44246ad390fe167f286b5960d6b8e2d353b04e771eb473c26f0b2e->leave($__internal_6ea176b4dc44246ad390fe167f286b5960d6b8e2d353b04e771eb473c26f0b2e_prof);

    }

    public function getTemplateName()
    {
        return "participer/envoi_observation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 106,  168 => 88,  162 => 87,  152 => 83,  147 => 81,  125 => 62,  81 => 20,  75 => 19,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/front/accueil.html.twig #}

{% extends \"participer/observation_base.html.twig\" %}

{% block title %}
    Envoi Observation - {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
    <style>
        #envoieObservationMap {
            height: 100%;
        }
    </style>
{% endblock stylesheets %}

{% block body %}
    <section class=\"mbr-section mbr-after-navbar\" id=\"content5-34\" style=\"background-color: rgb(105, 176, 171); padding-top: 120px; padding-bottom: 0px;\">
        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">
                Participer
            </h3>
            <div class=\"lead\">
                <p>Grâce au formulaire ci-dessous, vous pouvez nous envoyer votre observations sur le terrain.</p>
                <p>Ce formulaire est strictement réservé aux observations concernant les oiseaux.</p>
                <p>Merci de remplir un formulaire pour chaque spécimen aperçu.</p>
            </div>
        </div>
    </section>

    <section class=\"mbr-section-no-padding extForm4\" id=\"extForm4-35\" style=\"background-color: rgb(255, 255, 255);\">
        <div class=\"mbr-table mbr-table-full\">
            <div class=\"mbr-table-cell\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"mbr-table-md-up\">
                            <div class=\"mbr-table-cell col-md-6 text-xs-center text-md-left inverse\">
                                <div class=\"wrapper\">
                                    <h2 class=\"display-2 h-black\">
                                        Formulaire <br>
                                        envoi observation
                                    </h2>

                                    <div class=\"row text-center\">
                                        <div class=\"col-md-12 parentInverse\">
                                            <div class=\"col-md-12 col-lg-12 inverse-content\">
                                                <div class=\"intro-box right\">
                                                    <div class=\"contentInverse\">
                                                        <h5 class=\"subtitle\">
                                                            Si vous nʼêtes pas certain du nom de lʼespèce, joindre une photo facilitera la validation par un naturaliste
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-12\" style=\"padding-left: 0px; padding-right: 0px;\">

                                        {{ include('participer/forms/_envoi_observation_form.html.twig') }}

                                    </div>
                                </div>
                            </div>

                            <div class=\"mbr-table mbr-valign-top col-md-6\">
                                <div class=\"mbr-map\">
                                    <div id=\"envoieObservationMap\"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{ include('front/blocks/_follow.html.twig') }}

    {{ include('front/blocks/_adresse.html.twig') }}

{% endblock body %}

{% block javascripts %}
    {{ parent() }}
    <!-- Date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js\"></script>

    <script>
        \$('#sandbox-container input').datepicker({
            format: \"dd/mm/yyyy\",
            weekStart: 1,
            endDate: \"Today\",
            language: \"fr\",
            daysOfWeekHighlighted: \"0\",
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true
        });
    </script>

    <!-- google maps -->
    <script src=\"{{ asset('assets/fnat/js/googlemaps_envoie_observation.js') }}\" ></script>

{% endblock javascripts %}
", "participer/envoi_observation.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/participer/envoi_observation.html.twig");
    }
}
