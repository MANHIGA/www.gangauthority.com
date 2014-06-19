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
        'gang_authority_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),),
        'gang_authority_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'gang_authority_user_stats' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::statsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stats',    ),  ),  4 =>   array (  ),),
        'gang_authority_user_telechargement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::telechargementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/telechargement',    ),  ),  4 =>   array (  ),),
        'gang_authority_user_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),),
        'gang_authority_user_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),),
        'gang_authority_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/index',    ),  ),  4 =>   array (  ),),
        'gang_authority_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'gang_authority_admin_voirsignalements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::voirsignalementsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/voirSignalements',    ),  ),  4 =>   array (  ),),
        'gang_authority_admin_bannir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::bannirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/bannir',    ),  ),  4 =>   array (  ),),
        'gang_authority_admin_voirbannir' => array (  0 =>   array (    0 => 'idsignalement',    1 => 'idcompte',  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\AdminController::voirbannirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcompte',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idsignalement',    ),    2 =>     array (      0 => 'text',      1 => '/admin/voirBannir',    ),  ),  4 =>   array (  ),),
        'gang_authority_user_signup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\DefaultController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signup',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GangAuthority\\UserBundle\\Controller\\SecurityController::adminLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),),
        'admin_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),),
        'admin_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
