<?php

/* base.html.twig */
class __TwigTemplate_7e63866e23e1d48e990c7284b0740759dfee4d4acbb48eff0660f83a89a7a36e extends Twig_Template
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
        $__internal_4860d7026b99b7c71707238e354e1f632e5ef33d32fa35db63db13f07d54c04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4860d7026b99b7c71707238e354e1f632e5ef33d32fa35db63db13f07d54c04a->enter($__internal_4860d7026b99b7c71707238e354e1f632e5ef33d32fa35db63db13f07d54c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 34
        echo "
</head>

<body>

";
        // line 39
        $this->displayBlock('navbar', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "<input name=\"animation\" type=\"hidden\">
</body>
</html>
";
        
        $__internal_4860d7026b99b7c71707238e354e1f632e5ef33d32fa35db63db13f07d54c04a->leave($__internal_4860d7026b99b7c71707238e354e1f632e5ef33d32fa35db63db13f07d54c04a_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_849617759fdba435e06826715d618ac8e5fc57be7fb6cdf7a8535ee21f259469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849617759fdba435e06826715d618ac8e5fc57be7fb6cdf7a8535ee21f259469->enter($__internal_849617759fdba435e06826715d618ac8e5fc57be7fb6cdf7a8535ee21f259469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Flash Nature !";
        
        $__internal_849617759fdba435e06826715d618ac8e5fc57be7fb6cdf7a8535ee21f259469->leave($__internal_849617759fdba435e06826715d618ac8e5fc57be7fb6cdf7a8535ee21f259469_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a1b105c12646bbef83aaf0c80d0fb20efee0fc131e28b7b4e664183b7413dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1b105c12646bbef83aaf0c80d0fb20efee0fc131e28b7b4e664183b7413dbc->enter($__internal_5a1b105c12646bbef83aaf0c80d0fb20efee0fc131e28b7b4e664183b7413dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-material-design-font/css/material.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/et-line-font-plugin/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/web/assets/mobirise-icons/mobirise-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/tether/tether.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/animate.css/animate.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dataTables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/socicon/css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dropdown/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/theme/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/mobirise3-blocks-plugin/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/mobirise/css/mbr-additional.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/css/fnat.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_5a1b105c12646bbef83aaf0c80d0fb20efee0fc131e28b7b4e664183b7413dbc->leave($__internal_5a1b105c12646bbef83aaf0c80d0fb20efee0fc131e28b7b4e664183b7413dbc_prof);

    }

    // line 39
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_61cfa25d8764df75b803e4af525395771f3605ffe56d1ff3e4bc17839a11e081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cfa25d8764df75b803e4af525395771f3605ffe56d1ff3e4bc17839a11e081->enter($__internal_61cfa25d8764df75b803e4af525395771f3605ffe56d1ff3e4bc17839a11e081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 40
        echo "
    <!--  menu -->
    ";
        // line 42
        echo twig_include($this->env, $context, "menu_front.html.twig");
        echo "

";
        
        $__internal_61cfa25d8764df75b803e4af525395771f3605ffe56d1ff3e4bc17839a11e081->leave($__internal_61cfa25d8764df75b803e4af525395771f3605ffe56d1ff3e4bc17839a11e081_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_a29da5d4c3d3b0502358f2dcfd07934f43151d7ed6e0362f17f4d265b2a23786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29da5d4c3d3b0502358f2dcfd07934f43151d7ed6e0362f17f4d265b2a23786->enter($__internal_a29da5d4c3d3b0502358f2dcfd07934f43151d7ed6e0362f17f4d265b2a23786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
";
        
        $__internal_a29da5d4c3d3b0502358f2dcfd07934f43151d7ed6e0362f17f4d265b2a23786->leave($__internal_a29da5d4c3d3b0502358f2dcfd07934f43151d7ed6e0362f17f4d265b2a23786_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9299b583b9ec63b563a759ef322faea59078fc5ca7975784ec80ccb827c73f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9299b583b9ec63b563a759ef322faea59078fc5ca7975784ec80ccb827c73f40->enter($__internal_9299b583b9ec63b563a759ef322faea59078fc5ca7975784ec80ccb827c73f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "    <footer>
        <div class=\"mbr-small-footer mbr-section mbr-section-nopadding\" id=\"footer1-2\" style=\"background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;\">
            ";
        // line 53
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "                <div class=\"container\">
                    <p class=\"text-xs-center\"><a href=\"/dashboard\" alt=\"administration\">Administration</a></p>
                </div>
            ";
        }
        // line 58
        echo "            <div class=\"container\">
                <p class=\"text-xs-center\">Copyright (c) 2016 Flash Nature - Nao</p>
            </div>
        </div>
    </footer>
";
        
        $__internal_9299b583b9ec63b563a759ef322faea59078fc5ca7975784ec80ccb827c73f40->leave($__internal_9299b583b9ec63b563a759ef322faea59078fc5ca7975784ec80ccb827c73f40_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e54edb197027a581ddd07131c31e79641793b240aad611240c0a78c613fa7f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54edb197027a581ddd07131c31e79641793b240aad611240c0a78c613fa7f84->enter($__internal_e54edb197027a581ddd07131c31e79641793b240aad611240c0a78c613fa7f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/web/assets/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/tether/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/smooth-scroll/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/viewport-checker/jquery.viewportchecker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jarallax/jarallax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dataTables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dropdown/js/script.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/touch-swipe/jquery.touch-swipe.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/theme/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/mobirise3-blocks-plugin/js/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e54edb197027a581ddd07131c31e79641793b240aad611240c0a78c613fa7f84->leave($__internal_e54edb197027a581ddd07131c31e79641793b240aad611240c0a78c613fa7f84_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 78,  281 => 77,  277 => 76,  273 => 75,  269 => 74,  265 => 73,  261 => 72,  257 => 71,  253 => 70,  249 => 69,  245 => 68,  241 => 67,  236 => 66,  230 => 65,  218 => 58,  212 => 54,  210 => 53,  206 => 51,  200 => 50,  192 => 47,  186 => 46,  176 => 42,  172 => 40,  166 => 39,  157 => 32,  153 => 31,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  133 => 26,  129 => 25,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  103 => 16,  97 => 15,  85 => 13,  75 => 81,  73 => 65,  70 => 64,  68 => 50,  65 => 49,  63 => 46,  60 => 45,  58 => 39,  51 => 34,  49 => 15,  44 => 13,  38 => 10,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/base.html.twig #}

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"{{ asset('/assets/images/logo-carr-1400x1400.png') }}\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"\">

    <title>{% block title %}Flash Nature !{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap-material-design-font/css/material.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/et-line-font-plugin/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/tether/tether.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/animate.css/animate.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dataTables/dataTables.bootstrap4.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/socicon/css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/dropdown/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/theme/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/mobirise3-blocks-plugin/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/mobirise/css/mbr-additional.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/fnat/css/fnat.css') }}\">
    {% endblock stylesheets %}

</head>

<body>

{% block navbar %}

    <!--  menu -->
    {{ include('menu_front.html.twig') }}

{% endblock %}

{% block body %}

{% endblock body %}

{% block footer %}
    <footer>
        <div class=\"mbr-small-footer mbr-section mbr-section-nopadding\" id=\"footer1-2\" style=\"background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;\">
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"container\">
                    <p class=\"text-xs-center\"><a href=\"/dashboard\" alt=\"administration\">Administration</a></p>
                </div>
            {% endif %}
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
    <script src=\"{{ asset('assets/dataTables/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dropdown/js/script.min.js') }}\"></script>
    <script src=\"{{ asset('assets/touch-swipe/jquery.touch-swipe.min.js') }}\"></script>
    <script src=\"{{ asset('assets/theme/js/script.js') }}\"></script>
    <script src=\"{{ asset('assets/mobirise3-blocks-plugin/js/script.js') }}\"></script>

{% endblock %}
<input name=\"animation\" type=\"hidden\">
</body>
</html>
", "base.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/base.html.twig");
    }
}
