<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/visiteur')) {
            // gsb_connexion_visiteur
            if ('/visiteur' === $pathinfo) {
                return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConnexionController::connexionAction',  '_route' => 'gsb_connexion_visiteur',);
            }

            // gsb_deconnexion_visiteur
            if ('/visiteur/deconnexion' === $pathinfo) {
                return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConnexionController::deconnexionAction',  '_route' => 'gsb_deconnexion_visiteur',);
            }

            if (0 === strpos($pathinfo, '/visiteur/fichefrais')) {
                // gsb_fichefrais
                if ('/visiteur/fichefrais' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterFfAction',  '_route' => 'gsb_fichefrais',);
                }

                if (0 === strpos($pathinfo, '/visiteur/fichefrais/ajout')) {
                    // gsb_choix_frais_form
                    if ('/visiteur/fichefrais/ajout' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ChoixController::choixFormAction',  '_route' => 'gsb_choix_frais_form',);
                    }

                    // gsb_lignefraisforfait_formulaire
                    if ('/visiteur/fichefrais/ajout/lignefraisforfait' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formLffAction',  '_route' => 'gsb_lignefraisforfait_formulaire',);
                    }

                    // gsb_lignefraishorsforfait_formulaire
                    if ('/visiteur/fichefrais/ajout/lignefraishorsforfait' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formLfhfAction',  '_route' => 'gsb_lignefraishorsforfait_formulaire',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/visiteur/fichefrais/consulter')) {
                    // gsb_choix_frais_consulter
                    if (preg_match('#^/visiteur/fichefrais/consulter/(?P<mois>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_choix_frais_consulter')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ChoixController::choixConsulterAction',));
                    }

                    // gsb_lignefraisforfait_consulter
                    if (preg_match('#^/visiteur/fichefrais/consulter/(?P<mois>[^/]++)/lignefraisforfait$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_lignefraisforfait_consulter')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterLffAction',));
                    }

                    // gsb_lignefraisforfait_supprimer
                    if (preg_match('#^/visiteur/fichefrais/consulter/(?P<mois>[^/]++)/lignefraisforfait/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_lignefraisforfait_supprimer')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\SupprimerController::supprimerLffAction',));
                    }

                    // gsb_lignefraishorsforfait_consulter
                    if (preg_match('#^/visiteur/fichefrais/consulter/(?P<mois>[^/]++)/lignefraishorsforfait$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_lignefraishorsforfait_consulter')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\ConsulterController::consulterLfhfAction',));
                    }

                    // gsb_lignefraishorsforfait_supprimer
                    if (preg_match('#^/visiteur/fichefrais/consulter/(?P<mois>[^/]++)/lignefraishorsforfait/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_lignefraishorsforfait_supprimer')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\SupprimerController::supprimerLfhfAction',));
                    }

                }

                // gsb_fichefrais_form
                if ('/visiteur/fichefrais/nouveau' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FormulaireController::formFfAction',  '_route' => 'gsb_fichefrais_form',);
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
