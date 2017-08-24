<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/dashboard')) {
            // fn_dashboard_index
            if ('/dashboard' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::indexAction',  '_route' => 'fn_dashboard_index',);
            }

            // app_dashboard_index
            if ('/dashboard' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_dashboard_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::indexAction',  '_route' => 'app_dashboard_index',);
            }

            if (0 === strpos($pathinfo, '/dashboard/extraction-donnees')) {
                // fn_dashboard_bdd
                if ('/dashboard/extraction-donnees' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::bddAction',  '_route' => 'fn_dashboard_bdd',);
                }

                // app_dashboard_bdd
                if ('/dashboard/extraction-donnees' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::bddAction',  '_route' => 'app_dashboard_bdd',);
                }

            }

            // fn_dashboard_extract
            if (0 === strpos($pathinfo, '/dashboard/extract') && preg_match('#^/dashboard/extract/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_dashboard_extract')), array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::fileAction',));
            }

            // fn_dashboard_naturalistes
            if (0 === strpos($pathinfo, '/dashboard/naturalistes') && preg_match('#^/dashboard/naturalistes(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_dashboard_naturalistes')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\DashBoardController::naturalistesAction',));
            }

            if (0 === strpos($pathinfo, '/dashboard/naturalistes-')) {
                // fn_dashboard_natavalid
                if ('/dashboard/naturalistes-a-valider' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DashBoardController::natEnAttenteAction',  '_route' => 'fn_dashboard_natavalid',);
                }

                // fn_dashboard_natvalid
                if (0 === strpos($pathinfo, '/dashboard/naturalistes-validation') && preg_match('#^/dashboard/naturalistes\\-validation(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_dashboard_natvalid')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\DashBoardController::natValiderAction',));
                }

                // fn_dashboard_natrefus
                if (0 === strpos($pathinfo, '/dashboard/naturalistes-refus') && preg_match('#^/dashboard/naturalistes\\-refus(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_dashboard_natrefus')), array (  'id' => 0,  '_controller' => 'AppBundle\\Controller\\DashBoardController::natRefuserAction',));
                }

            }

        }

        // fn_front_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fn_front_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'fn_front_index',);
        }

        // app_front_index
        if ('/accueil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'app_front_index',);
        }

        // app_inscription_validerinscription
        if ('/activate' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::validerInscriptionAction',  '_route' => 'app_inscription_validerinscription',);
        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fn_front_inscription
            if ('/inscription' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::inscriptionAction',  '_route' => 'fn_front_inscription',);
            }

            // fn_front_inscription_obs
            if ('/inscription-observateur' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::inscriptionObsAction',  '_route' => 'fn_front_inscription_obs',);
            }

            // fn_front_inscription_nat
            if ('/inscription-naturaliste' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::inscriptionNatAction',  '_route' => 'fn_front_inscription_nat',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fn_front_connexion
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::loginAction',  '_route' => 'fn_front_connexion',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // fn_front_about
        if ('/qui-sommes-nous' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::aboutAction',  '_route' => 'fn_front_about',);
        }

        // fn_front_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::contactAction',  '_route' => 'fn_front_contact',);
        }

        // app_inscription_validernewsletter
        if ('/newsletter' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::validerNewsletterAction',  '_route' => 'app_inscription_validernewsletter',);
        }

        // fn_front_kit
        if ('/kit-observation' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::kitObservationAction',  '_route' => 'fn_front_kit',);
        }

        if (0 === strpos($pathinfo, '/participer')) {
            // fn_participer_espace_nat
            if ('/participer/espace-naturaliste' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::espaceNatAction',  '_route' => 'fn_participer_espace_nat',);
            }

            // fn_participer_envoi_obs
            if ('/participer/envoi-observation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::envoiObsAction',  '_route' => 'fn_participer_envoi_obs',);
            }

            // fn_participer_carte_obs
            if ('/participer/carte-des-observations' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::carteObsAction',  '_route' => 'fn_participer_carte_obs',);
            }

            // app_participer_carteobs
            if ('/participer' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::carteObsAction',  '_route' => 'app_participer_carteobs',);
            }

            // fn_fiche_observation
            if (0 === strpos($pathinfo, '/participer/fiche-observation') && preg_match('#^/participer/fiche\\-observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fn_fiche_observation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_fiche_observation')), array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::ficheObsAction',));
            }
            not_fn_fiche_observation:

            // fn_fiche_supprimer
            if (0 === strpos($pathinfo, '/participer/supprimer-fiche') && preg_match('#^/participer/supprimer\\-fiche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fn_fiche_supprimer')), array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::supprimerObsAction',));
            }

            // fn_participer_profil
            if ('/participer/mon-compte' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::profilAction',  '_route' => 'fn_participer_profil',);
            }

            // fn_participer_autocomplete
            if ('/participer/autocomplete' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fn_participer_autocomplete');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ParticiperController::autoCompletionAction',  '_route' => 'fn_participer_autocomplete',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
