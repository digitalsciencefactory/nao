<?php

/* dashboard/menu/menu-administrateur.html.twig */
class __TwigTemplate_953bab0ff2c0ffa934a181f52729b8f34cb26074d38a9af10be44a9e91cf4d6d extends Twig_Template
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
        $__internal_390ee446e49e320aa9d99c2e5d2e4de447beee5cff16328883d807b9c504be0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390ee446e49e320aa9d99c2e5d2e4de447beee5cff16328883d807b9c504be0b->enter($__internal_390ee446e49e320aa9d99c2e5d2e4de447beee5cff16328883d807b9c504be0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/menu/menu-administrateur.html.twig"));

        // line 1
        echo "<section id=\"menu-0\">

    <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">

            <div class=\"mbr-table\">
                <div class=\"mbr-table-cell\">

                    <div class=\"navbar-brand\">
                        <a href=\"index.html\" class=\"navbar-logo\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-rectangle-185x128-13.png"), "html", null, true);
        echo "\" alt=\"Mobirise\"></a>
                        <a class=\"navbar-caption text-primary\" href=\"/dashboard\">Administration</a>
                    </div>

                </div>
                <div class=\"mbr-table-cell\">

                    <button class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"hamburger-icon\"></div>
                    </button>

                    <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\">

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"/dashboard/\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Membres en attente</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/dashboard/naturalistes-a-valider\">Naturalistes</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/observateurs/avalider\">Particuliers</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" data-toggle=\"dropdown-submenu\" href=\"/dashboard/\" aria-expanded=\"false\">Inscrits</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/dashboard/observateurs/1\">Particuliers</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/naturalistes/1\">Naturalistes</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/news/1\">Newletters</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link\" href=\"comptes-bannis.html\" aria-expanded=\"false\">Comptes bannis</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link link\" href=\"/dashboard/extraction-donnees\" aria-expanded=\"false\">Base de données</a>
                        </li>

                        <li class=\"nav-item nav-btn\">
                            <a class=\"nav-link btn btn-primary-outline btn-primary\" href=\"/\">Accéder au site</a>
                        </li>

                        <li class=\"nav-item nav-btn\">
                            <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo " </span>
                            <a class=\"nav-link link boutonlogout\" href=\"/logout\" aria-expanded=\"false\">
                                <img src=\" ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fnat/icon/bouton_deconnexion.png"), "html", null, true);
        echo "\" id=\"boutonLogOut\" />
                            </a>
                        </li>

                    </ul>

                    <button hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"close-icon\"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
";
        
        $__internal_390ee446e49e320aa9d99c2e5d2e4de447beee5cff16328883d807b9c504be0b->leave($__internal_390ee446e49e320aa9d99c2e5d2e4de447beee5cff16328883d807b9c504be0b_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/menu/menu-administrateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 55,  79 => 53,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"menu-0\">

    <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">

            <div class=\"mbr-table\">
                <div class=\"mbr-table-cell\">

                    <div class=\"navbar-brand\">
                        <a href=\"index.html\" class=\"navbar-logo\"><img src=\"{{  asset('assets/images/logo-rectangle-185x128-13.png') }}\" alt=\"Mobirise\"></a>
                        <a class=\"navbar-caption text-primary\" href=\"/dashboard\">Administration</a>
                    </div>

                </div>
                <div class=\"mbr-table-cell\">

                    <button class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"hamburger-icon\"></div>
                    </button>

                    <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\">

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" href=\"/dashboard/\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">Membres en attente</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/dashboard/naturalistes-a-valider\">Naturalistes</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/observateurs/avalider\">Particuliers</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link dropdown-toggle\" data-toggle=\"dropdown-submenu\" href=\"/dashboard/\" aria-expanded=\"false\">Inscrits</a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"/dashboard/observateurs/1\">Particuliers</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/naturalistes/1\">Naturalistes</a>
                                <a class=\"dropdown-item\" href=\"/dashboard/news/1\">Newletters</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link link\" href=\"comptes-bannis.html\" aria-expanded=\"false\">Comptes bannis</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link link\" href=\"/dashboard/extraction-donnees\" aria-expanded=\"false\">Base de données</a>
                        </li>

                        <li class=\"nav-item nav-btn\">
                            <a class=\"nav-link btn btn-primary-outline btn-primary\" href=\"/\">Accéder au site</a>
                        </li>

                        <li class=\"nav-item nav-btn\">
                            <span>{{ app.user.pseudo }} </span>
                            <a class=\"nav-link link boutonlogout\" href=\"/logout\" aria-expanded=\"false\">
                                <img src=\" {{ asset('assets/fnat/icon/bouton_deconnexion.png') }}\" id=\"boutonLogOut\" />
                            </a>
                        </li>

                    </ul>

                    <button hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <div class=\"close-icon\"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
", "dashboard/menu/menu-administrateur.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/dashboard/menu/menu-administrateur.html.twig");
    }
}
