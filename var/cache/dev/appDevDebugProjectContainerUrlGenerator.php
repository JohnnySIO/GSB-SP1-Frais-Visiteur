<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_connexion_visiteur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConnexionController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_deconnexion_visiteur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConnexionController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fichefrais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterFfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_choix_frais_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ChoixController::choixFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraisforfait_formulaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formLffAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/ajout/lignefraisforfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraishorsforfait_formulaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formLfhfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/ajout/lignefraishorsforfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_choix_frais_consulter' => array (  0 =>   array (    0 => 'mois',  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ChoixController::choixConsulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mois',    ),    1 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraisforfait_consulter' => array (  0 =>   array (    0 => 'mois',  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterLffAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lignefraisforfait',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mois',    ),    2 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraisforfait_supprimer' => array (  0 =>   array (    0 => 'mois',    1 => 'id',  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\SupprimerController::supprimerLffAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/lignefraisforfait',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mois',    ),    4 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraishorsforfait_consulter' => array (  0 =>   array (    0 => 'mois',  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterLfhfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lignefraishorsforfait',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mois',    ),    2 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_lignefraishorsforfait_supprimer' => array (  0 =>   array (    0 => 'mois',    1 => 'id',  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\SupprimerController::supprimerLfhfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/lignefraishorsforfait',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mois',    ),    4 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fichefrais_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formFfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visiteur/fichefrais/nouveau',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
