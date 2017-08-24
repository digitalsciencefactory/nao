<?php

/* dashboard/block/_pagination.html.twig */
class __TwigTemplate_766d78c5339d34c3324b67159f638c8a2122b070e3f006b60426bbcd976bb1aa extends Twig_Template
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
        $__internal_13b36287b0dcb0b8426c5cce0cd76ea8aa0e09b1544b33d20541bef15c1b9b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b36287b0dcb0b8426c5cce0cd76ea8aa0e09b1544b33d20541bef15c1b9b9c->enter($__internal_13b36287b0dcb0b8426c5cce0cd76ea8aa0e09b1544b33d20541bef15c1b9b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/block/_pagination.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"col-xs-12 col-md-2\">
        ";
        // line 3
        if (((($context["page"] ?? $this->getContext($context, "page")) - 1) > 0)) {
            // line 4
            echo "            <form action=\"/dashboard/naturalistes/";
            echo twig_escape_filter($this->env, (($context["page"] ?? $this->getContext($context, "page")) - 1), "html", null, true);
            echo "\" method=\"POST\">
                <button type=\"submit\" class=\"btn btn-info\">Précédents</button>
            </form>
        ";
        } else {
            // line 8
            echo "            <form action=\"#\" method=\"POST\">
                <button type=\"button\" class=\"btn btn-black\" disabled=\"disabled\">Précédents</button>
            </form>
        ";
        }
        // line 11
        echo "</div>
    <div class=\"hidden-xs col-md-4\">
        &nbsp;
    </div>
    <div class=\"hidden-xs col-md-4\">
        &nbsp;
    </div>
    <div class=\"col-xs-12 col-md-2\">
        ";
        // line 19
        if (((($context["page"] ?? $this->getContext($context, "page")) + 1) <= ($context["pages"] ?? $this->getContext($context, "pages")))) {
            // line 20
            echo "            <form action=\"/dashboard/naturalistes/";
            echo twig_escape_filter($this->env, (($context["page"] ?? $this->getContext($context, "page")) + 1), "html", null, true);
            echo "\" method=\"POST\">
                <button type=\"submit\" class=\"btn btn-info\">Suivants</button>
            </form>
        ";
        } else {
            // line 24
            echo "            <form action=\"#\" method=\"POST\">
                <button type=\"button\" class=\"btn btn-black\" disabled=\"disabled\">Suivants</button>
            </form>
        ";
        }
        
        $__internal_13b36287b0dcb0b8426c5cce0cd76ea8aa0e09b1544b33d20541bef15c1b9b9c->leave($__internal_13b36287b0dcb0b8426c5cce0cd76ea8aa0e09b1544b33d20541bef15c1b9b9c_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/block/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  54 => 20,  52 => 19,  42 => 11,  36 => 8,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"col-xs-12 col-md-2\">
        {% if(page - 1) > 0 %}
            <form action=\"/dashboard/naturalistes/{{ page - 1 }}\" method=\"POST\">
                <button type=\"submit\" class=\"btn btn-info\">Précédents</button>
            </form>
        {% else %}
            <form action=\"#\" method=\"POST\">
                <button type=\"button\" class=\"btn btn-black\" disabled=\"disabled\">Précédents</button>
            </form>
        {% endif %}</div>
    <div class=\"hidden-xs col-md-4\">
        &nbsp;
    </div>
    <div class=\"hidden-xs col-md-4\">
        &nbsp;
    </div>
    <div class=\"col-xs-12 col-md-2\">
        {% if(page + 1) <= pages %}
            <form action=\"/dashboard/naturalistes/{{ page + 1 }}\" method=\"POST\">
                <button type=\"submit\" class=\"btn btn-info\">Suivants</button>
            </form>
        {% else %}
            <form action=\"#\" method=\"POST\">
                <button type=\"button\" class=\"btn btn-black\" disabled=\"disabled\">Suivants</button>
            </form>
        {% endif %}
", "dashboard/block/_pagination.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/dashboard/block/_pagination.html.twig");
    }
}
