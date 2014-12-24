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

        // privacypolicy
        if ($pathinfo === '/privacy_policy') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::PrivacyPolicyAction',  '_route' => 'privacypolicy',);
        }

        // termsconditions
        if ($pathinfo === '/termsconditions') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::TermsConditionsAction',  '_route' => 'termsconditions',);
        }

        // jobopportunities
        if ($pathinfo === '/jobopportunities') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::JobOpportunitiesAction',  '_route' => 'jobopportunities',);
        }

        // invite_a_friend
        if ($pathinfo === '/invite_a_friend') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::InviteAFriendAction',  '_route' => 'invite_a_friend',);
        }

        // contact_us
        if ($pathinfo === '/contact_us') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::ContactUsAction',  '_route' => 'contact_us',);
        }

        // advertise
        if ($pathinfo === '/advertise') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::AdvertiseAction',  '_route' => 'advertise',);
        }

        if (0 === strpos($pathinfo, '/userlogin')) {
            // userlogin
            if ($pathinfo === '/userlogin') {
                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::userloginAction',  '_route' => 'userlogin',);
            }

            // userlogin_check
            if ($pathinfo === '/userlogin_check') {
                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::userloginAction',  '_route' => 'userlogin_check',);
            }

        }

        // tms_user_join_page_forgotpwd
        if ($pathinfo === '/forgotpwd') {
            return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::forgotpwdAction',  '_route' => 'tms_user_join_page_forgotpwd',);
        }

        if (0 === strpos($pathinfo, '/tms_user')) {
            // user
            if (rtrim($pathinfo, '/') === '/tms_user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/tms_user/new') {
                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/tms_user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/tms_user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // tms_user_forgot
            if ($pathinfo === '/tms_user/forgot') {
                return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserController::forgotAction',  '_route' => 'tms_user_forgot',);
            }

        }

        // user_join_page_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_join_page_homepage')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/tms/userjoinpage/user')) {
                if (0 === strpos($pathinfo, '/admin/tms/userjoinpage/usertype')) {
                    // admin_tms_userjoinpage_usertype_list
                    if ($pathinfo === '/admin/tms/userjoinpage/usertype/list') {
                        return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::listAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_list',  '_route' => 'admin_tms_userjoinpage_usertype_list',);
                    }

                    // admin_tms_userjoinpage_usertype_create
                    if ($pathinfo === '/admin/tms/userjoinpage/usertype/create') {
                        return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::createAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_create',  '_route' => 'admin_tms_userjoinpage_usertype_create',);
                    }

                    // admin_tms_userjoinpage_usertype_batch
                    if ($pathinfo === '/admin/tms/userjoinpage/usertype/batch') {
                        return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::batchAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_batch',  '_route' => 'admin_tms_userjoinpage_usertype_batch',);
                    }

                    // admin_tms_userjoinpage_usertype_edit
                    if (preg_match('#^/admin/tms/userjoinpage/usertype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_usertype_edit')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::editAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_edit',));
                    }

                    // admin_tms_userjoinpage_usertype_delete
                    if (preg_match('#^/admin/tms/userjoinpage/usertype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_usertype_delete')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::deleteAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_delete',));
                    }

                    // admin_tms_userjoinpage_usertype_show
                    if (preg_match('#^/admin/tms/userjoinpage/usertype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_usertype_show')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::showAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_show',));
                    }

                    // admin_tms_userjoinpage_usertype_export
                    if ($pathinfo === '/admin/tms/userjoinpage/usertype/export') {
                        return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserTypeAdminController::exportAction',  '_sonata_admin' => 'tms.userjoinpage.admin.usertype',  '_sonata_name' => 'admin_tms_userjoinpage_usertype_export',  '_route' => 'admin_tms_userjoinpage_usertype_export',);
                    }

                }

                // admin_tms_userjoinpage_user_list
                if ($pathinfo === '/admin/tms/userjoinpage/user/list') {
                    return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_list',  '_route' => 'admin_tms_userjoinpage_user_list',);
                }

                // admin_tms_userjoinpage_user_create
                if ($pathinfo === '/admin/tms/userjoinpage/user/create') {
                    return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_create',  '_route' => 'admin_tms_userjoinpage_user_create',);
                }

                // admin_tms_userjoinpage_user_batch
                if ($pathinfo === '/admin/tms/userjoinpage/user/batch') {
                    return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_batch',  '_route' => 'admin_tms_userjoinpage_user_batch',);
                }

                // admin_tms_userjoinpage_user_edit
                if (preg_match('#^/admin/tms/userjoinpage/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_user_edit')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_edit',));
                }

                // admin_tms_userjoinpage_user_delete
                if (preg_match('#^/admin/tms/userjoinpage/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_user_delete')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_delete',));
                }

                // admin_tms_userjoinpage_user_show
                if (preg_match('#^/admin/tms/userjoinpage/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tms_userjoinpage_user_show')), array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_show',));
                }

                // admin_tms_userjoinpage_user_export
                if ($pathinfo === '/admin/tms/userjoinpage/user/export') {
                    return array (  '_controller' => 'TMS\\UserJoinPageBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'tms.userjoinpage.admin.user',  '_sonata_name' => 'admin_tms_userjoinpage_user_export',  '_route' => 'admin_tms_userjoinpage_user_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
