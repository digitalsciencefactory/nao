<?php

/* dashboard/naturalistes.html.twig */
class __TwigTemplate_efc5db226be5233084794c80c7d9d41c22daede5c417d8fdec6beee1b5b6d963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("baseDashboard.html.twig", "dashboard/naturalistes.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13d1688d91e856237943e600ad74f05b9b41cb831fd559188760cf031c3a68b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d1688d91e856237943e600ad74f05b9b41cb831fd559188760cf031c3a68b9->enter($__internal_13d1688d91e856237943e600ad74f05b9b41cb831fd559188760cf031c3a68b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/naturalistes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d1688d91e856237943e600ad74f05b9b41cb831fd559188760cf031c3a68b9->leave($__internal_13d1688d91e856237943e600ad74f05b9b41cb831fd559188760cf031c3a68b9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47f655b6ae6a35f5057702088564bdb280ec3fe3d3b27a2f7a0ab2c6767cf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47f655b6ae6a35f5057702088564bdb280ec3fe3d3b27a2f7a0ab2c6767cf75->enter($__internal_a47f655b6ae6a35f5057702088564bdb280ec3fe3d3b27a2f7a0ab2c6767cf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Naturalistes en attente de validation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a47f655b6ae6a35f5057702088564bdb280ec3fe3d3b27a2f7a0ab2c6767cf75->leave($__internal_a47f655b6ae6a35f5057702088564bdb280ec3fe3d3b27a2f7a0ab2c6767cf75_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e714d3575d59fa83a426392d65edc66b7f59e07ea11a391ec8767060b935278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e714d3575d59fa83a426392d65edc66b7f59e07ea11a391ec8767060b935278->enter($__internal_6e714d3575d59fa83a426392d65edc66b7f59e07ea11a391ec8767060b935278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .img-responsive{
            max-width: 400px !important;
            max-height: 400px !important;
        }
        .slimbtn {
            padding: .375rem 1.6rem !important;
            font-size: 0.75rem !important;
        }
        .left{
            float: left !important;
        }
        .right{
            float: right !important;
        }
    </style>
";
        
        $__internal_6e714d3575d59fa83a426392d65edc66b7f59e07ea11a391ec8767060b935278->leave($__internal_6e714d3575d59fa83a426392d65edc66b7f59e07ea11a391ec8767060b935278_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_086eeac681e58ff915d45383758f2adca8299b6e99e7d04249c8b76af5674973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086eeac681e58ff915d45383758f2adca8299b6e99e7d04249c8b76af5674973->enter($__internal_086eeac681e58ff915d45383758f2adca8299b6e99e7d04249c8b76af5674973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 34
        echo "    <section class=\"mbr-section\" id=\"content5-n\" style=\"background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;\">

        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Inscrits application Flash Nature&nbsp;</h3>
            <div class=\"lead\">
                <p>
                    <strong>
                        Les comptes &nbsp;ci-dessous sont l'ensemble des naturalistes de l'application Flash Nature. Via ce tableau vous pouvez consulter les cartes professionnelles et également bannir un utilisateur si ce dernier ne respecte pas les conditions d'utilisation de l'application.&nbsp;</strong></p><p><strong>Une fois le compte banni, l'utilisateur n'a plus accès à son compte et ne peut recréer un compte avec l'adresse mail renseignée dans le compte banni.&nbsp;</strong></p><p><strong>En cas de problématique technique : assistance@digitalsciencefactory.com</strong></p></div>
        </div>

    </section>
    ";
        // line 46
        echo "
    ";
        // line 48
        echo "    ";
        $this->loadTemplate("dashboard/block/_blck_tab_naturalistes.html.twig", "dashboard/naturalistes.html.twig", 48)->display($context);
        // line 49
        echo "    ";
        
        $__internal_086eeac681e58ff915d45383758f2adca8299b6e99e7d04249c8b76af5674973->leave($__internal_086eeac681e58ff915d45383758f2adca8299b6e99e7d04249c8b76af5674973_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65ab2cd3aab7683e1ba1f991d03893a11a77f7ba6f1434ba503eda5867611321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ab2cd3aab7683e1ba1f991d03893a11a77f7ba6f1434ba503eda5867611321->enter($__internal_65ab2cd3aab7683e1ba1f991d03893a11a77f7ba6f1434ba503eda5867611321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
        
        $__internal_65ab2cd3aab7683e1ba1f991d03893a11a77f7ba6f1434ba503eda5867611321->leave($__internal_65ab2cd3aab7683e1ba1f991d03893a11a77f7ba6f1434ba503eda5867611321_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/naturalistes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  123 => 52,  116 => 49,  113 => 48,  110 => 46,  97 => 34,  91 => 31,  85 => 30,  59 => 11,  53 => 10,  43 => 7,  37 => 6,  11 => 3,);
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

{% extends \"baseDashboard.html.twig\" %}


{% block title %}
    Naturalistes en attente de validation - {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .img-responsive{
            max-width: 400px !important;
            max-height: 400px !important;
        }
        .slimbtn {
            padding: .375rem 1.6rem !important;
            font-size: 0.75rem !important;
        }
        .left{
            float: left !important;
        }
        .right{
            float: right !important;
        }
    </style>
{% endblock stylesheets %}

{% block body %}
    {{  parent() }}

    {# bloc explications de la page #}
    <section class=\"mbr-section\" id=\"content5-n\" style=\"background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;\">

        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Inscrits application Flash Nature&nbsp;</h3>
            <div class=\"lead\">
                <p>
                    <strong>
                        Les comptes &nbsp;ci-dessous sont l'ensemble des naturalistes de l'application Flash Nature. Via ce tableau vous pouvez consulter les cartes professionnelles et également bannir un utilisateur si ce dernier ne respecte pas les conditions d'utilisation de l'application.&nbsp;</strong></p><p><strong>Une fois le compte banni, l'utilisateur n'a plus accès à son compte et ne peut recréer un compte avec l'adresse mail renseignée dans le compte banni.&nbsp;</strong></p><p><strong>En cas de problématique technique : assistance@digitalsciencefactory.com</strong></p></div>
        </div>

    </section>
    {# fin bloc explications de la page #}

    {# bloc affichage des natularistes en attente #}
    {% include(\"dashboard/block/_blck_tab_naturalistes.html.twig\") %}
    {# fin bloc affichage des naturalistes#}
{% endblock body %}

{% block javascripts %}
    {{ parent() }}


{% endblock javascripts %}
", "dashboard/naturalistes.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/dashboard/naturalistes.html.twig");
    }
}
