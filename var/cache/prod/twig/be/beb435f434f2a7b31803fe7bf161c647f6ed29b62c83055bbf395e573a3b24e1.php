<?php

/* dashboard/accueil.html.twig */
class __TwigTemplate_6c6d8b14ca715d3e5368a00100dd35e36c71d441a3232467dc023834fbd52312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("baseDashboard.html.twig", "dashboard/accueil.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7c49870fc4cf85b56bebaeaec1c8afa0f6a591f68494a6df3ae0b37c0a9139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7c49870fc4cf85b56bebaeaec1c8afa0f6a591f68494a6df3ae0b37c0a9139->enter($__internal_2e7c49870fc4cf85b56bebaeaec1c8afa0f6a591f68494a6df3ae0b37c0a9139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7c49870fc4cf85b56bebaeaec1c8afa0f6a591f68494a6df3ae0b37c0a9139->leave($__internal_2e7c49870fc4cf85b56bebaeaec1c8afa0f6a591f68494a6df3ae0b37c0a9139_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d63b6a99969be5bb6b7814786fac93ae6e3185c226684c6b8884d92bbd0704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d63b6a99969be5bb6b7814786fac93ae6e3185c226684c6b8884d92bbd0704f->enter($__internal_8d63b6a99969be5bb6b7814786fac93ae6e3185c226684c6b8884d92bbd0704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8d63b6a99969be5bb6b7814786fac93ae6e3185c226684c6b8884d92bbd0704f->leave($__internal_8d63b6a99969be5bb6b7814786fac93ae6e3185c226684c6b8884d92bbd0704f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ae677ae11f48ae3ee3e3a2687fae33a89e456069417cbf304e9f1c00e552a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae677ae11f48ae3ee3e3a2687fae33a89e456069417cbf304e9f1c00e552a25->enter($__internal_5ae677ae11f48ae3ee3e3a2687fae33a89e456069417cbf304e9f1c00e552a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <section class=\"mbr-section\" id=\"content5-2\" style=\"background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">

            <div class=\"lead\"><p><strong>Bienvenue sur votre espace Admnistration&nbsp;</strong></p></div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-3\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Compte en attente de validation&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-4\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 40px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"statut-naturaliste-en-attente.html\">Naturaliste en attente de validation&nbsp;</a> <a class=\"btn btn-white-outline btn-white\" href=\"comptes-particuliers_en_attente.html\">Particulier en attente validation&nbsp;</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-5\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Membres inscrits&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-6\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 80px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"inscrits-application.html\">Application</a> <a class=\"btn btn-white-outline btn-white\" href=\"inscrits-news.html\">Newsletter</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-7\" style=\"background-color: rgb(163, 143, 132); padding-top: 0px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Comptes bannis</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-8\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 80px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a>
                    </div>

                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a> <a class=\"btn btn-white-outline btn-white\" href=\"https://mobirise.com/mobirise-free-mac.zip\"></a></div>

                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-9\" style=\"background-color: rgb(163, 143, 132); padding-top: 0px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Base de données observations&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-a\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 40px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a>
                    </div>
=======
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a> <a class=\"btn btn-white-outline btn-white\" href=\"paticulier_a_valider.html\"></a></div>
>>>>>>> début de la partie admin #28
=======
                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a>
                    </div>
>>>>>>> #28 modification du menu en fonction du role, modification partie espace naturaliste du menu normal
                </div>
            </div>
        </div>

    </section>

";
        
        $__internal_5ae677ae11f48ae3ee3e3a2687fae33a89e456069417cbf304e9f1c00e552a25->leave($__internal_5ae677ae11f48ae3ee3e3a2687fae33a89e456069417cbf304e9f1c00e552a25_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  51 => 11,  41 => 7,  35 => 6,  11 => 3,);
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
    Accueil - {{ parent() }}
{% endblock %}


{% block body %}
{{  parent() }}
    <section class=\"mbr-section\" id=\"content5-2\" style=\"background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">

            <div class=\"lead\"><p><strong>Bienvenue sur votre espace Admnistration&nbsp;</strong></p></div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-3\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Compte en attente de validation&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-4\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 40px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"statut-naturaliste-en-attente.html\">Naturaliste en attente de validation&nbsp;</a> <a class=\"btn btn-white-outline btn-white\" href=\"comptes-particuliers_en_attente.html\">Particulier en attente validation&nbsp;</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-5\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Membres inscrits&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-6\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 80px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"inscrits-application.html\">Application</a> <a class=\"btn btn-white-outline btn-white\" href=\"inscrits-news.html\">Newsletter</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-7\" style=\"background-color: rgb(163, 143, 132); padding-top: 0px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Comptes bannis</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-8\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 80px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a>
                    </div>

                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a> <a class=\"btn btn-white-outline btn-white\" href=\"https://mobirise.com/mobirise-free-mac.zip\"></a></div>

                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"comptes-bannis.html\">Comptes bannis</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class=\"mbr-section\" id=\"content5-9\" style=\"background-color: rgb(163, 143, 132); padding-top: 0px; padding-bottom: 0px;\">



        <div class=\"container\">
            <h3 class=\"mbr-section-title display-2\">Base de données observations&nbsp;</h3>

        </div>

    </section>

    <section class=\"mbr-section mbr-section__container\" id=\"buttons1-a\" style=\"background-color: rgb(163, 143, 132); padding-top: 20px; padding-bottom: 40px;\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a>
                    </div>
=======
                    <div class=\"text-xs-center\"><a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a> <a class=\"btn btn-white-outline btn-white\" href=\"paticulier_a_valider.html\"></a></div>
>>>>>>> début de la partie admin #28
=======
                    <div class=\"text-xs-center\">
                        <a class=\"btn btn-white\" href=\"base-donnees-observations.html\">Accéder à la BDD</a>
                    </div>
>>>>>>> #28 modification du menu en fonction du role, modification partie espace naturaliste du menu normal
                </div>
            </div>
        </div>

    </section>

{% endblock body %}
", "dashboard/accueil.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/dashboard/accueil.html.twig");
    }
}
