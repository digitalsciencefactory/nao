<?php

/* Front/accueil.html.twig */
class __TwigTemplate_b65af43b01cac6382998a354486b729cd539ec0fec88b5505e6bb1bb1ae43987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Front/accueil.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Block 2 Banner -->
    <div class=\"block-2-container green-background\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 block-2-box block-2-left block-2-media wow fadeInLeft\">
                    <div class=\"block-2-img-container\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/famille_fnat_480x480.jpg"), "html", null, true);
        echo "\" alt=\"Flash Nature\" data-at2x=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/famille_fnat_480x480.jpg"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"col-sm-6 block-2-box block-2-right wow fadeInUp\">
                    <h4 class=\"white-text\">Vous êtes sensible à l'environnement et vous souhaitez participer à sa préservation ?</h4>
                    <br>
                    <p class=\"white-text\">
                        Inscrivez-vous à Flash Nature pour contribuer à lʼétude des modifications climatiques en rejoignant une action solidaire.
                    </p>
                    <br>
                    <div class=\"pricing-2-table-button\">
                        <a class=\"big-link-1 btn\" href=\"#\">En savoir +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Séparation-->
    <div class=\"container\">
        <br>
    </div>

    <!-- Block 3 Naturaliste -->
    <div class=\"block-3-container section-container gradient-background \" >
        <div class=\"container\" >
            <div class=\"row\" >
                <div class=\"col-sm-12 block-3 section-description wow fadeIn\">
                    <h2 class=\"brown-text\">Naturaliste ?</h2>
                    <p class=\"brown-text text-center\">
                        Accédez à votre espace réservé.
                    </p>
                    <div class=\"pricing-2-table-button\">
                        <a class=\"big-link-1 btn white-background brown-text\" href=\"#\">Espace Naturaliste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Séparation -->
    <div class=\"container white-background\">
        <br>
    </div>

    <!-- Block 2 Actualités -->
    <div class=\"block-2-container white-background\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 block-2-box block-2-left wow fadeInLeft\">
                    <div>
                        <h3 class=\"green-text\">Dernières observations publiées</h3>
                    </div>
                    <div class=\"shadow green-text\">
                        <p>observation à insérer</p>
                        <hr>
                        <p>observation à insérer</p>
                        <hr>
                        <p>observation à insérer</p>
                        <hr>
                        <p>observation à insérer</p>
                        <hr>
                    </div>
                    <div class=\"pricing-2-table-button\">
                        <a class=\"big-link-1 btn\" href=\"#\">Connectez-vous pour voir plus de détails</a>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <h3 class=\"green-text\">Actualités</h3>
                    <br>
                    <div class=\"shadow green-text\">
                        <h4>Dernières publications Facebook</h4>
                        <p>
                            Jeu concours<br>
                            Tentez de remporter un appareil photo Canon ! Pour participer ..
                        </p>
                        <div class=\"pricing-2-table-button\">
                            <a class=\"big-link-1 btn\" href=\"#\">Lire la suite</a>
                        </div>
                    </div>

                    <h3 class=\"green-text\">Suivez notre actualité</h3>
                    <a href=\"\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/ico/logog%20fb.jpeg"), "html", null, true);
        echo "\" alt=\"Flash Nature sur Facebook\"></a>
                    <a href=\"\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/ico/instagram.jpeg"), "html", null, true);
        echo "\" alt=\"Flash Nature sur Instagram\"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Séparation -->
    <div class=\"container white-background\">
        <br>
    </div>

    <!-- Block 2 Kit observations -->
    <div class=\"block-2-container green-background\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 block-2-box block-2-left block-2-media wow fadeInLeft\">
                    <div class=\"block-2-img-container\">
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/homepage/kit_observation.png"), "html", null, true);
        echo "\" alt=\"Kit Observation Flash Nature\" data-at2x=\"assets/img/homepage/kit_observation.png\">
                    </div>
                </div>
                <!-- Contact us (block 2) -->
                <div class=\"col-sm-6 block-2-box block-2-right wow fadeInUp\">
                    <div class=\"block-2-container section-container contact-container\">
                        <h3 class=\"white-text text-center\">KIT Observation</h3>
                        <div class=\"container text-center\">

                            <div class=\"row brown-text\">
                                <div class=\"col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft\">
                                    <form role=\"form\" action=\"\" method=\"post\">
                                        <p>
                                            Téléchargez le Kit complet et gratuit pour obtenir les fiches conseils et pratiques.
                                        </p>
                                        <div class=\"form-group centered\">
                                            <div class=\"form-group\">
                                                <label for=\"first-name\">Votre nom (*)</label>
                                                <input type=\"text\" name=\"first-name\" class=\"contact-subject form-control\" id=\"first-name\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"last-name\">Votre prénom (*)</label>
                                                <input type=\"text\" name=\"last-name\" class=\"contact-subject form-control\" id=\"last-name\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"postcode\">Votre code postal (*)</label>
                                                <input type=\"text\" name=\"postcode\" class=\"contact-subject form-control\" id=\"postcode\">
                                            </div>

                                            <div class=\"form-group\">
                                                <label for=\"email\">Votre e-mail (*)</label>
                                                <input type=\"text\" name=\"email\" class=\"contact-email form-control\" id=\"email\">
                                            </div>

                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" value=\"\"> Je m'inscris à la newsletter
                                                </label>
                                            </div>
                                        </div>

                                        <p>
                                            (*) informations obligatoires
                                        </p>
                                        <button type=\"submit\" class=\"big-link-1 brown-background white-text\">Télécharger le kit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Séparation -->
    <div class=\"container white-background\">
        <br>
    </div>

    <!-- Block 3 NAO -->
    <div class=\"block-3-container section-container\" >
        <div class=\"container\" >
            <div class=\"row\" >
                <div class=\"col-sm-12 block-3 section-description wow fadeIn green-text text-center\">
                    <h2  class=\"green-text\">Association «Nos Amis les Oiseaux» (NAO) </h2>
                    <p>
                        Flash Nature est une plateforme collaborative créée par l’association NAO (Nos Amis les Oiseaux).
                    </p>
                    <p>
                        NAO est une association loi 1901 créée en 2014 par Monsieur Dujardin, pasionné d’ornithologie.
                    </p>
                </div>
                <div class=\"pricing-2-table-button\">
                    <a class=\"big-link-1 btn green-background white-text\" href=\"#\">En savoir +</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Block 2 partenaires -->
    <div class=\"block-2-container white-background\">
        <div class=\"container centered\">
            <div class=\"row centered\">
                <div class=\"col-sm-6 block-2-box block-2-left block-2-media wow fadeInLeft\">
                    <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/MNHN2_logo.png"), "html", null, true);
        echo "\" alt=\"MNHN\" data-at2x=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/MNHN2_logo.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-sm-6 block-2-box block-2-right block-2-media wow fadeInLeft\">
                    <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/union_européenne_drapeau.png"), "html", null, true);
        echo "\" alt=\"UE\" data-at2x=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/AppBundle/img/homepage/union_européenne_drapeau.png"), "html", null, true);
        echo "\">
                </div>

            </div>
        </div>
    </div>

    <div class=\"block-3-container section-container\" >
        <div class=\"container\" >
            <div class=\"row\" >
                <div class=\"col-sm-12 block-3 section-description wow fadeIn text-center\">
                    <h3  class=\"brown-text\">
                        L’application Flash Nature est réalisée en étroite collaboration avec le Muséum National d’Histoire Naturelle et l’Union Européenne. </h3>
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Front/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 207,  253 => 204,  161 => 115,  141 => 98,  137 => 97,  50 => 15,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Front/accueil.html.twig", "/Users/darkchyper/Documents/www/nao/app/Resources/views/Front/accueil.html.twig");
    }
}
