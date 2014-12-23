<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/tms_user')) {
            // tms_user
            if (rtrim($pathinfo, '/') === '/tms_user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tms_user');
                }

                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::indexAction',  '_route' => 'tms_user',);
            }

            // tms_user_show
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tms_user_show')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::showAction',));
            }

            // tms_user_new
            if ($pathinfo === '/tms_user/new') {
                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::newAction',  '_route' => 'tms_user_new',);
            }

            // tms_user_create
            if ($pathinfo === '/tms_user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tms_user_create;
                }

                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::createAction',  '_route' => 'tms_user_create',);
            }
            not_tms_user_create:

            // tms_user_edit
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tms_user_edit')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::editAction',));
            }

            // tms_user_update
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tms_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tms_user_update')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::updateAction',));
            }
            not_tms_user_update:

            // tms_user_delete
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tms_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tms_user_delete')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::deleteAction',));
            }
            not_tms_user_delete:

        }

        // tms_user_join_page_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tms_user_join_page_homepage')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
