<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/image')) {
            // image_index
            if ('/image' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_image_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'image_index');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::indexAction',  '_route' => 'image_index',);
            }
            not_image_index:

            // image_new
            if ('/image/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_new;
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::newAction',  '_route' => 'image_new',);
            }
            not_image_new:

            // image_show
            if (preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_image_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::showAction',));
            }
            not_image_show:

            // image_edit
            if (preg_match('#^/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::editAction',));
            }
            not_image_edit:

            // image_delete
            if (preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_image_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::deleteAction',));
            }
            not_image_delete:

        }

        elseif (0 === strpos($pathinfo, '/reservation')) {
            // reservation_index
            if ('/reservation' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'reservation_index');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
            }
            not_reservation_index:

            // reservation_new
            if ('/reservation/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        // rese
        if ('/res' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'rese');
            }

            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::affResAction',  '_route' => 'rese',);
        }

        if (0 === strpos($pathinfo, '/paiement')) {
            // paiement_index
            if ('/paiement' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_paiement_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'paiement_index');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::indexAction',  '_route' => 'paiement_index',);
            }
            not_paiement_index:

            // paiement_new
            if ('/paiement/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_paiement_new;
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::newAction',  '_route' => 'paiement_new',);
            }
            not_paiement_new:

            // paiement_show
            if (preg_match('#^/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_paiement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::showAction',));
            }
            not_paiement_show:

            // paiement_edit
            if (preg_match('#^/paiement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_paiement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::editAction',));
            }
            not_paiement_edit:

            // paiement_delete
            if (preg_match('#^/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_paiement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::deleteAction',));
            }
            not_paiement_delete:

        }

        // keurgu_iimmo_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'keurgu_iimmo_homepage');
            }

            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'keurgu_iimmo_homepage',);
        }

        // fine
        if ('/bien' === $pathinfo) {
            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::searchBienAction',  '_route' => 'fine',);
        }

        if (0 === strpos($pathinfo, '/affiche')) {
            // affiche
            if ('/affiche' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::searchBienAction',  '_route' => 'affiche',);
            }

            // reserver
            if (preg_match('#^/affiche/(?P<id>[^/]++)/(?P<idb>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserver')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::resAction',));
            }

            // reserve
            if ('/affiche' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'reserve');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  '_route' => 'reserve',);
            }

        }

        // log
        if ('/log' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'log');
            }

            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  '_route' => 'log',);
        }

        // contrat
        if (0 === strpos($pathinfo, '/contrat') && preg_match('#^/contrat/(?P<idb>[^/]++)/(?P<idc>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::validResAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
