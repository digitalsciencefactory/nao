<?php

/* baseDashboard.html.twig */
class __TwigTemplate_81f5a9f7934ce976f1c13a832570c5dac3691252d6a5588c0074b207aa649329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_100c2fcad24728f2655b9980eda93ea7181713757c24b9088e9d1f0039b2b830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100c2fcad24728f2655b9980eda93ea7181713757c24b9088e9d1f0039b2b830->enter($__internal_100c2fcad24728f2655b9980eda93ea7181713757c24b9088e9d1f0039b2b830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseDashboard.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/images/logo-carr-1400x1400.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
</head>

<body>

<!--  menu -->
";
        // line 41
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "


";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "<input name=\"animation\" type=\"hidden\">
</body>
</html>
";
        
        $__internal_100c2fcad24728f2655b9980eda93ea7181713757c24b9088e9d1f0039b2b830->leave($__internal_100c2fcad24728f2655b9980eda93ea7181713757c24b9088e9d1f0039b2b830_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_69765156a2f5e6707ffbe048d3281cba8c2751e07dfa81865f0d3e17a93a02aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69765156a2f5e6707ffbe048d3281cba8c2751e07dfa81865f0d3e17a93a02aa->enter($__internal_69765156a2f5e6707ffbe048d3281cba8c2751e07dfa81865f0d3e17a93a02aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ADMINISTRATION Flash Nature !";
        
        $__internal_69765156a2f5e6707ffbe048d3281cba8c2751e07dfa81865f0d3e17a93a02aa->leave($__internal_69765156a2f5e6707ffbe048d3281cba8c2751e07dfa81865f0d3e17a93a02aa_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fc759b1fc2268dff9adb8b7339c189991cfb7f59e29ac831db1922ff37eb4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc759b1fc2268dff9adb8b7339c189991cfb7f59e29ac831db1922ff37eb4df->enter($__internal_6fc759b1fc2268dff9adb8b7339c189991cfb7f59e29ac831db1922ff37eb4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-material-design-font/css/material.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/tether/tether.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dropdown/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/animate.css/animate.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/theme/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/mobirise/css/mbr-additional.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/css/fnat.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dataTables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/socicon/css/styles.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/et-line-font-plugin/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/web/assets/mobirise-icons/mobirise-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/mobirise3-blocks-plugin/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/mobirise/css/mbr-additional.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6fc759b1fc2268dff9adb8b7339c189991cfb7f59e29ac831db1922ff37eb4df->leave($__internal_6fc759b1fc2268dff9adb8b7339c189991cfb7f59e29ac831db1922ff37eb4df_prof);

    }

    // line 41
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_fa9f33779807b71e05246da29563099b9b12fbc88d76d50ebb682e38528bdc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9f33779807b71e05246da29563099b9b12fbc88d76d50ebb682e38528bdc6f->enter($__internal_fa9f33779807b71e05246da29563099b9b12fbc88d76d50ebb682e38528bdc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 42
        echo "
    ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "        ";
            $this->loadTemplate("dashboard/menu/menu-administrateur.html.twig", "baseDashboard.html.twig", 44)->display($context);
            // line 45
            echo "    ";
        } else {
            // line 46
            echo "        ";
            $this->loadTemplate("dashboard/menu/menu-naturaliste.html.twig", "baseDashboard.html.twig", 46)->display($context);
            // line 47
            echo "    ";
        }
        // line 48
        echo "
";
        
        $__internal_fa9f33779807b71e05246da29563099b9b12fbc88d76d50ebb682e38528bdc6f->leave($__internal_fa9f33779807b71e05246da29563099b9b12fbc88d76d50ebb682e38528bdc6f_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_b914afd7eda86286a7570412690e11cb06aef7c320f8d48df3f8763c9f35377e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b914afd7eda86286a7570412690e11cb06aef7c320f8d48df3f8763c9f35377e->enter($__internal_b914afd7eda86286a7570412690e11cb06aef7c320f8d48df3f8763c9f35377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
    ";
        // line 55
        $this->loadTemplate("dashboard/block/_blck_espace_administrateur.html.twig", "baseDashboard.html.twig", 55)->display($context);
        // line 56
        echo "
";
        
        $__internal_b914afd7eda86286a7570412690e11cb06aef7c320f8d48df3f8763c9f35377e->leave($__internal_b914afd7eda86286a7570412690e11cb06aef7c320f8d48df3f8763c9f35377e_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_76844645fc062be96a154c6855c9bf456b10accd4ed116e3467fd63cdb9de95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76844645fc062be96a154c6855c9bf456b10accd4ed116e3467fd63cdb9de95b->enter($__internal_76844645fc062be96a154c6855c9bf456b10accd4ed116e3467fd63cdb9de95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "    <footer>
        <div class=\"mbr-small-footer mbr-section mbr-section-nopadding\" id=\"footer1-2\" style=\"background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;\">

            <div class=\"container\">
                <p class=\"text-xs-center\">Copyright (c) 2016 Flash Nature - Nao</p>
            </div>
        </div>
    </footer>
";
        
        $__internal_76844645fc062be96a154c6855c9bf456b10accd4ed116e3467fd63cdb9de95b->leave($__internal_76844645fc062be96a154c6855c9bf456b10accd4ed116e3467fd63cdb9de95b_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d353deaaeb690f68209757382569026b449b4531d3b3fae3e3a289faf39e625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d353deaaeb690f68209757382569026b449b4531d3b3fae3e3a289faf39e625->enter($__internal_0d353deaaeb690f68209757382569026b449b4531d3b3fae3e3a289faf39e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/web/assets/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/tether/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/smooth-scroll/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/viewport-checker/jquery.viewportchecker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jarallax/jarallax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dropdown/js/script.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/touch-swipe/jquery.touch-swipe.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/theme/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/mobirise3-blocks-plugin/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dashboard/dataTables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0d353deaaeb690f68209757382569026b449b4531d3b3fae3e3a289faf39e625->leave($__internal_0d353deaaeb690f68209757382569026b449b4531d3b3fae3e3a289faf39e625_prof);

    }

    public function getTemplateName()
    {
        return "baseDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 83,  295 => 82,  291 => 81,  287 => 80,  283 => 79,  279 => 78,  275 => 77,  271 => 76,  267 => 75,  263 => 74,  259 => 73,  255 => 72,  250 => 71,  244 => 70,  229 => 60,  223 => 59,  215 => 56,  213 => 55,  210 => 54,  204 => 53,  196 => 48,  193 => 47,  190 => 46,  187 => 45,  184 => 44,  182 => 43,  179 => 42,  173 => 41,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  147 => 28,  143 => 27,  139 => 26,  135 => 25,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  106 => 16,  100 => 15,  88 => 13,  78 => 86,  76 => 70,  73 => 69,  71 => 59,  68 => 58,  66 => 53,  61 => 50,  59 => 41,  51 => 35,  49 => 15,  44 => 13,  38 => 10,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/baseDashboard.html.twig #}

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"{{ asset('/assets/images/logo-carr-1400x1400.png') }}\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"\">

    <title>{% block title %}ADMINISTRATION Flash Nature !{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap-material-design-font/css/material.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/tether/tether.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dropdown/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/animate.css/animate.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/theme/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/mobirise/css/mbr-additional.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/fnat/css/fnat.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dataTables/dataTables.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/socicon/css/styles.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/et-line-font-plugin/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/mobirise3-blocks-plugin/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/mobirise/css/mbr-additional.css') }}\">
    {% endblock stylesheets %}

</head>

<body>

<!--  menu -->
{% block navbar %}

    {% if is_granted('ROLE_ADMIN') %}
        {% include('dashboard/menu/menu-administrateur.html.twig') %}
    {%  else %}
        {% include('dashboard/menu/menu-naturaliste.html.twig') %}
    {% endif %}

{% endblock %}



{% block body %}

    {% include('dashboard/block/_blck_espace_administrateur.html.twig') %}

{% endblock body %}

{% block footer %}
    <footer>
        <div class=\"mbr-small-footer mbr-section mbr-section-nopadding\" id=\"footer1-2\" style=\"background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;\">

            <div class=\"container\">
                <p class=\"text-xs-center\">Copyright (c) 2016 Flash Nature - Nao</p>
            </div>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/web/assets/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/tether/tether.min.js') }}\"></script>
    <script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/smooth-scroll/smooth-scroll.js') }}\"></script>
    <script src=\"{{ asset('assets/viewport-checker/jquery.viewportchecker.js') }}\"></script>
    <script src=\"{{ asset('assets/jarallax/jarallax.js') }}\"></script>
    <script src=\"{{ asset('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') }}\"></script>
    <script src=\"{{ asset('assets/dataTables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dropdown/js/script.min.js') }}\"></script>
    <script src=\"{{ asset('assets/touch-swipe/jquery.touch-swipe.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/theme/js/script.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/mobirise3-blocks-plugin/js/script.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/dataTables/dataTables.bootstrap4.min.js') }}\"></script>

{% endblock %}
<input name=\"animation\" type=\"hidden\">
</body>
</html>
", "baseDashboard.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/baseDashboard.html.twig");
    }
}
