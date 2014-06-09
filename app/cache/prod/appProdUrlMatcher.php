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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
