<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'fn_dashboard_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_dashboard_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_bdd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::bddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/extraction-donnees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_dashboard_bdd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::bddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/extraction-donnees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_extract' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::fileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/extract',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_naturalistes' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\DashBoardController::naturalistesAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/naturalistes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_natavalid' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DashBoardController::natEnAttenteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard/naturalistes-a-valider',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_natvalid' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\DashBoardController::natValiderAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/naturalistes-validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_natrefus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\DashBoardController::natRefuserAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/naturalistes-refus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_dashboard_bannir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => 0,    '_controller' => 'AppBundle\\Controller\\DashBoardController::bannirAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dashboard/bannir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_front_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FrontController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/qui-sommes-nous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_inscription_obs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::inscriptionObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription-observateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_inscription_nat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::inscriptionNatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription-naturaliste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_inscription_validerinscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::validerInscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_inscription_validernewsletter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::validerNewsletterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_front_kit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\InscriptionController::kitObservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/kit-observation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_participer_espace_nat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::espaceNatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer/espace-naturaliste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_participer_envoi_obs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::envoiObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer/envoi-observation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_participer_carte_obs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::carteObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer/carte-des-observations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_participer_carteobs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::carteObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_fiche_observation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::ficheObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/participer/fiche-observation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_fiche_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::supprimerObsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/participer/supprimer-fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_participer_profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer/mon-compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fn_participer_autocomplete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ParticiperController::autoCompletionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer/autocomplete/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
