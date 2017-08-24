<?php

/* menu_front.html.twig */
class __TwigTemplate_ec36f4d16f2a54e8b290ed609e7b4a8dae30d44567e6d6165081cca56ab554d9 extends Twig_Template
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
        $__internal_42645c6e17a4166ea551a38185f59c8c9fa2ffe0620de3b2bd06386448a1fa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42645c6e17a4166ea551a38185f59c8c9fa2ffe0620de3b2bd06386448a1fa74->enter($__internal_42645c6e17a4166ea551a38185f59c8c9fa2ffe0620de3b2bd06386448a1fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu_front.html.twig"));

        // line 2
        echo "<div id=\"menu-3f\">
    <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">

            <div class=\"mbr-table\">
                <div class=\"mbr-table-cell\">
                    <div class=\"navbar-brand\">
                        <a href=\"/\" class=\"navbar-logo\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-rectangle-185x128.png"), "html", null, true);
        echo "\" alt=\"Flash Nature\"/>
                        </a>
                        <a class=\"navbar-caption\" href=\"/\"></a>
                    </div>
                </div>

                <div class=\"mbr-table-cell\">

                    <div class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"hamburger-icon\"></div>
                    </div>

                    <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\">

                        <li class=\"nav-item\">
                            <a class=\"nav-link link\" href=\"/\">Accueil</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link\" href=\"/inscription\">L'application</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Participer</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/participer/envoi-observation\">Envoi d'observation</a>
                                <a class=\"dropdown-item\" href=\"/participer/carte-des-observations\">Carte des observations</a>
                            </div>
                        </li>

                        ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_NATURALISTE")) {
            // line 41
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">
                                    Espace Naturaliste
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"/participer/espace-naturaliste\">
                                        Les observations</a>
                                    <a class=\"dropdown-item\" href=\"/dashboard/extraction-donnees\">
                                        Base de données
                                    </a>
                                </div>

                            </li>
                        ";
        }
        // line 55
        echo "
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Infos pratiques</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/kit-observation\">Kit Observation</a>
                                <a class=\"dropdown-item\" href=\"/qui-sommes-nous\">Qui sommes nous ?</a>
                                <a class=\"dropdown-item\" href=\"/contact\">Contact</a>
                            </div>
                        </li>

                        ";
        // line 65
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 66
            echo "                            <li class=\"nav-item nav-btn\">
                                <a class=\"nav-link btn btn-secondary-outline btn-secondary\" href=\"/login\">Se connecter</a>
                            </li>
                            <li class=\"nav-item nav-btn\">
                                <a class=\"nav-link btn btn-secondary-outline btn-secondary\" href=\"/inscription\">S'inscrire</a>
                            </li>
                        ";
        } else {
            // line 73
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link link\" href=\"/participer/mon-compte\">Mon compte</a>
                            </li>
                            <li class=\"nav-item nav-btn\">
                                <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo " </span>
                                <a class=\"nav-link link boutonlogout\" href=\"/logout\">
                                    <img src=\" ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/icon/bouton_deconnexion.png"), "html", null, true);
            echo "\" id=\"boutonLogOut\" />
                                </a>
                            </li>
                        ";
        }
        // line 83
        echo "
                    </ul>

                    <div hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"close-icon\"></div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</div>
";
        
        $__internal_42645c6e17a4166ea551a38185f59c8c9fa2ffe0620de3b2bd06386448a1fa74->leave($__internal_42645c6e17a4166ea551a38185f59c8c9fa2ffe0620de3b2bd06386448a1fa74_prof);

    }

    public function getTemplateName()
    {
        return "menu_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 83,  117 => 79,  112 => 77,  106 => 73,  97 => 66,  95 => 65,  83 => 55,  67 => 41,  65 => 40,  32 => 10,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/menu_front.html.twig #}
<div id=\"menu-3f\">
    <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">

            <div class=\"mbr-table\">
                <div class=\"mbr-table-cell\">
                    <div class=\"navbar-brand\">
                        <a href=\"/\" class=\"navbar-logo\">
                            <img src=\"{{ asset('assets/images/logo-rectangle-185x128.png')}}\" alt=\"Flash Nature\"/>
                        </a>
                        <a class=\"navbar-caption\" href=\"/\"></a>
                    </div>
                </div>

                <div class=\"mbr-table-cell\">

                    <div class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"hamburger-icon\"></div>
                    </div>

                    <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\">

                        <li class=\"nav-item\">
                            <a class=\"nav-link link\" href=\"/\">Accueil</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link\" href=\"/inscription\">L'application</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Participer</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/participer/envoi-observation\">Envoi d'observation</a>
                                <a class=\"dropdown-item\" href=\"/participer/carte-des-observations\">Carte des observations</a>
                            </div>
                        </li>

                        {% if is_granted('ROLE_NATURALISTE') %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">
                                    Espace Naturaliste
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"/participer/espace-naturaliste\">
                                        Les observations</a>
                                    <a class=\"dropdown-item\" href=\"/dashboard/extraction-donnees\">
                                        Base de données
                                    </a>
                                </div>

                            </li>
                        {% endif %}

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Infos pratiques</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/kit-observation\">Kit Observation</a>
                                <a class=\"dropdown-item\" href=\"/qui-sommes-nous\">Qui sommes nous ?</a>
                                <a class=\"dropdown-item\" href=\"/contact\">Contact</a>
                            </div>
                        </li>

                        {% if app.user == null %}
                            <li class=\"nav-item nav-btn\">
                                <a class=\"nav-link btn btn-secondary-outline btn-secondary\" href=\"/login\">Se connecter</a>
                            </li>
                            <li class=\"nav-item nav-btn\">
                                <a class=\"nav-link btn btn-secondary-outline btn-secondary\" href=\"/inscription\">S'inscrire</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link link\" href=\"/participer/mon-compte\">Mon compte</a>
                            </li>
                            <li class=\"nav-item nav-btn\">
                                <span>{{ app.user.pseudo }} </span>
                                <a class=\"nav-link link boutonlogout\" href=\"/logout\">
                                    <img src=\" {{ asset('assets/fnat/icon/bouton_deconnexion.png') }}\" id=\"boutonLogOut\" />
                                </a>
                            </li>
                        {% endif %}

                    </ul>

                    <div hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"close-icon\"></div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</div>
", "menu_front.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/menu_front.html.twig");
    }
}
