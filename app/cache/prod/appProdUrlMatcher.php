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

        // gang_authority_user_homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gang_authority_user_homepage',);
        }

        // gang_authority_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gang_authority_homepage');
            }

            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gang_authority_homepage',);
        }

        // gang_authority_user_stats
        if ($pathinfo === '/stats') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::statsAction',  '_route' => 'gang_authority_user_stats',);
        }

        // gang_authority_user_telechargement
        if ($pathinfo === '/telechargement') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::telechargementAction',  '_route' => 'gang_authority_user_telechargement',);
        }

        // gang_authority_user_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::profileAction',  '_route' => 'gang_authority_user_profile',);
        }

        // gang_authority_user_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'gang_authority_user_connexion',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // gang_authority_admin_homepage
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'gang_authority_admin_homepage',);
            }

            // gang_authority_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gang_authority_admin');
                }

                return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'gang_authority_admin',);
            }

            // gang_authority_admin_voirsignalements
            if ($pathinfo === '/admin/voirSignalements') {
                return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::voirsignalementsAction',  '_route' => 'gang_authority_admin_voirsignalements',);
            }

            // gang_authority_admin_bannir
            if ($pathinfo === '/admin/bannir') {
                return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::bannirAction',  '_route' => 'gang_authority_admin_bannir',);
            }

            // gang_authority_admin_voirbannir
            if (0 === strpos($pathinfo, '/admin/voirBannir') && preg_match('#^/admin/voirBannir/(?P<idsignalement>[^/]++)/(?P<idcompte>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gang_authority_admin_voirbannir')), array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::voirbannirAction',));
            }

        }

        // gang_authority_user_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::signupAction',  '_route' => 'gang_authority_user_signup',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // admin_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'GangAuthority\\UserBundle\\Controller\\SecurityController::adminLoginAction',  '_route' => 'admin_login',);
                }

                // admin_login_check
                if ($pathinfo === '/admin/login_check') {
                    return array('_route' => 'admin_login_check');
                }

            }

            // admin_logout
            if ($pathinfo === '/admin/logout') {
                return array('_route' => 'admin_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
