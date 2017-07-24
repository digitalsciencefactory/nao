<?php

/* ::menu.html.twig */
class __TwigTemplate_037744e911b17dd8a9bff3ccad471c5f71b5a459f84ec1e221fef1b8990045ef extends Twig_Template
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
        // line 2
        echo "

    <!--  menu -->
    <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#top-navbar-1\">
                    <!-- menu mobile -->
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"\">Flash Nature</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"top-navbar-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a class=\"scroll-link\" href=\"\">Accueil</a></li>
                    <li><a class=\"scroll-link\" href=\"\">Découvrir l'application</a></li>
                    <li><a class=\"scroll-link\" href=\"\">Qui sommes-nous ?</a></li>
                    <li><a class=\"scroll-link\" href=\"\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  /menu -->

";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::menu.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/menu.html.twig");
    }
}
