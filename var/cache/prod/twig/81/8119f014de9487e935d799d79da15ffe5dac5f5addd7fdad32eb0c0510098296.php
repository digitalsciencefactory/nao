<?php

/* dashboard/block/_blck_tab_naturalistes.html.twig */
class __TwigTemplate_ad523e2783d4857d2b1993eb53d32fc9aa6c49a41605d9ed3c849f06ae86833f extends Twig_Template
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
        $__internal_5cb5e4bbb833e06326938dabb9edd11a43322e1342479337b869757924ade65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb5e4bbb833e06326938dabb9edd11a43322e1342479337b869757924ade65e->enter($__internal_5cb5e4bbb833e06326938dabb9edd11a43322e1342479337b869757924ade65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/block/_blck_tab_naturalistes.html.twig"));

        // line 1
        echo "<section class=\"mbr-section extTable1\" id=\"extTable1-e\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 120px;\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <div class=\"bg-success\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "noticeWarning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"btn-warning\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "noticeError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "        <div class=\"btn-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <div class=\"container table-wrapper\" data-search=\"true\" search-text=\"Rechercher :\" info1-text=\"\" info2-text=\"\" info3-text=\"\" info4-text=\"\">
        <p> Il y a ";
        // line 25
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo " naturaliste(s) validés.</p>
        <div class=\"table-responsive positionne\">
        <table class=\"table\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Date d'inscription</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Code postal</th>
                    <th>Date de naissance</th>
                    <th>Carte naturaliste</th>
                    <th>Bannir</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dcree", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "codePostal", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ddn", array()), "html", null, true);
            echo "</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-lg slimbtn\" data-toggle=\"modal\" data-target=\"#";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "\">Consulter
                        </button>
                        ";
            // line 55
            echo "
                        <div class=\"modal fade\" id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "Label\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Carte professionnelle de ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <img class=\"img-responsive\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("fnat/naturalistes/" . $this->getAttribute($context["user"], "carte", array())) . "")), "html", null, true);
            echo "\" alt=\"Carte professionnelle de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudo", array()), "html", null, true);
            echo "\" />
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
            // line 74
            echo "                    </td>

                    <td>
                        <form class=\"left\" action=\"/dashboard/bannir/";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" method=\"POST\">
                            <button class=\"btn btn-danger slimbtn\" type=\"submit\" value=\"refuser\">Bannir</button>
                        </form>

                    </td>
                </tr>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </tbody>
        </table>



        </div>
        ";
        // line 92
        $this->loadTemplate("dashboard/block/_pagination.html.twig", "dashboard/block/_blck_tab_naturalistes.html.twig", 92)->display($context);
        // line 93
        echo "    </div>
</section>
";
        
        $__internal_5cb5e4bbb833e06326938dabb9edd11a43322e1342479337b869757924ade65e->leave($__internal_5cb5e4bbb833e06326938dabb9edd11a43322e1342479337b869757924ade65e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/block/_blck_tab_naturalistes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 93,  209 => 92,  201 => 86,  186 => 77,  181 => 74,  167 => 64,  161 => 61,  151 => 56,  148 => 55,  143 => 52,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  111 => 43,  107 => 42,  87 => 25,  83 => 23,  73 => 19,  70 => 18,  66 => 17,  63 => 16,  53 => 12,  50 => 11,  46 => 10,  43 => 9,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"mbr-section extTable1\" id=\"extTable1-e\" style=\"background-color: rgb(163, 143, 132); padding-top: 40px; padding-bottom: 120px;\">

    {% for message in app.flashes('notice') %}
        <div class=\"bg-success\">
            {{ message }}
        </div>
        <br />
    {% endfor %}

    {% for message in app.flashes('noticeWarning') %}
        <div class=\"btn-warning\">
            {{ message }}
        </div>
        <br />
    {% endfor %}

    {% for message in app.flashes('noticeError') %}
        <div class=\"btn-danger\">
            {{ message }}
        </div>
        <br />
    {% endfor %}

    <div class=\"container table-wrapper\" data-search=\"true\" search-text=\"Rechercher :\" info1-text=\"\" info2-text=\"\" info3-text=\"\" info4-text=\"\">
        <p> Il y a {{ total }} naturaliste(s) validés.</p>
        <div class=\"table-responsive positionne\">
        <table class=\"table\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Date d'inscription</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Code postal</th>
                    <th>Date de naissance</th>
                    <th>Carte naturaliste</th>
                    <th>Bannir</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                <tr>
                    <td>{{ user.dcree|date(\"d/m/Y H:i:s\") }}</td>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.pseudo }}</td>
                    <td>{{ user.mail }}</td>
                    <td>{{ user.codePostal }}</td>
                    <td>{{ user.ddn }}</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-lg slimbtn\" data-toggle=\"modal\" data-target=\"#{{ user.pseudo }}\">Consulter
                        </button>
                        {# MODAL #}

                        <div class=\"modal fade\" id=\"{{ user.pseudo }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ user.pseudo }}Label\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Carte professionnelle de {{ user.pseudo }}</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <img class=\"img-responsive\" src=\"{{ asset('fnat/naturalistes/' ~ user.carte ~ '') }}\" alt=\"Carte professionnelle de {{ user.pseudo }}\" />
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {# FIN MODAL #}
                    </td>

                    <td>
                        <form class=\"left\" action=\"/dashboard/bannir/{{ user.id }}\" method=\"POST\">
                            <button class=\"btn btn-danger slimbtn\" type=\"submit\" value=\"refuser\">Bannir</button>
                        </form>

                    </td>
                </tr>


                {% endfor %}
            </tbody>
        </table>



        </div>
        {% include(\"dashboard/block/_pagination.html.twig\") %}
    </div>
</section>
", "dashboard/block/_blck_tab_naturalistes.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/dashboard/block/_blck_tab_naturalistes.html.twig");
    }
}
