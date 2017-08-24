<?php

/* front/blocks/_adresse.html.twig */
class __TwigTemplate_068e28df8b80a1eeed817450b82ae9513ce01f2ff99beca5fcc02bb15a0b10b9 extends Twig_Template
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
        $__internal_fbfb4122aa75e8beefd9db1ecfa1c51ea2c95ca92bb503fa6d15d55297f0d1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfb4122aa75e8beefd9db1ecfa1c51ea2c95ca92bb503fa6d15d55297f0d1aa->enter($__internal_fbfb4122aa75e8beefd9db1ecfa1c51ea2c95ca92bb503fa6d15d55297f0d1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/blocks/_adresse.html.twig"));

        // line 1
        echo "<!--  adresse  -->
<section class=\"mbr-section mbr-section-md-padding mbr-footer footer1\" id=\"contacts1-w\" style=\"background-color: rgb(204, 187, 163); padding-top: 90px; padding-bottom: 90px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <div>
                    <a href=\"/\">
                        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-rectangle-185x128.png"), "html", null, true);
        echo "\">
                    </a>
                </div>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        Adresse
                    </strong>
                    <br>
                    7 cité du Paradis
                    <br>
                    75 010 Paris
                    <br>
                    France
                </p>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        <a href=\"/contact\">
                            Contact
                        </a>
                    </strong>
                    <br>
                    Email: info@nao.fr
                    <br>
                    Phone: 01 40 00 00 01
                    <br>
                </p>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        Partenaires
                    </strong>

                    <br>

                    <a href=\"http://www.mnhn.fr/fr/\" target=\"_blank\" class=\"text-white\">
                        MNHN
                    </a>

                    <br>

                    <a href=\"https://europa.eu/european-union/index_fr\" target=\"_blank\" class=\"text-white\">
                        Union européenne
                    </a>

                    <br>
                    <br>
                </p>
                <p>

                </p>
            </div>

        </div>
    </div>
</section>
";
        
        $__internal_fbfb4122aa75e8beefd9db1ecfa1c51ea2c95ca92bb503fa6d15d55297f0d1aa->leave($__internal_fbfb4122aa75e8beefd9db1ecfa1c51ea2c95ca92bb503fa6d15d55297f0d1aa_prof);

    }

    public function getTemplateName()
    {
        return "front/blocks/_adresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--  adresse  -->
<section class=\"mbr-section mbr-section-md-padding mbr-footer footer1\" id=\"contacts1-w\" style=\"background-color: rgb(204, 187, 163); padding-top: 90px; padding-bottom: 90px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <div>
                    <a href=\"/\">
                        <img src=\"{{ asset('assets/images/logo-rectangle-185x128.png') }}\">
                    </a>
                </div>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        Adresse
                    </strong>
                    <br>
                    7 cité du Paradis
                    <br>
                    75 010 Paris
                    <br>
                    France
                </p>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        <a href=\"/contact\">
                            Contact
                        </a>
                    </strong>
                    <br>
                    Email: info@nao.fr
                    <br>
                    Phone: 01 40 00 00 01
                    <br>
                </p>
            </div>

            <div class=\"mbr-footer-content col-xs-12 col-md-3\">
                <p>
                    <strong>
                        Partenaires
                    </strong>

                    <br>

                    <a href=\"http://www.mnhn.fr/fr/\" target=\"_blank\" class=\"text-white\">
                        MNHN
                    </a>

                    <br>

                    <a href=\"https://europa.eu/european-union/index_fr\" target=\"_blank\" class=\"text-white\">
                        Union européenne
                    </a>

                    <br>
                    <br>
                </p>
                <p>

                </p>
            </div>

        </div>
    </div>
</section>
", "front/blocks/_adresse.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/front/blocks/_adresse.html.twig");
    }
}
