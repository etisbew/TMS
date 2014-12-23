<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'tms_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tms_user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tms_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tms_user_join_page_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
