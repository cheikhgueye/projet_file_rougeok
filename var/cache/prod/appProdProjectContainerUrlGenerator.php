<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'image_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/image/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'image_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/image/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'image_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'image_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'image_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paiement_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paiement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paiement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paiement/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paiement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/paiement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paiement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/paiement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paiement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/paiement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'keurgu_iimmo_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fine' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::searchBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bien',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::searchBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserver' => array (  0 =>   array (    0 => 'id',    1 => 'idb',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::resAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idb',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/affiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rese' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::affResAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/res/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/log/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat' => array (  0 =>   array (    0 => 'idb',    1 => 'idc',  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::validResAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idc',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idb',    ),    2 =>     array (      0 => 'text',      1 => '/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
