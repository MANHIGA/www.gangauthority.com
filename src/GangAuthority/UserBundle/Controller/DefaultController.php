<?php
// src/Sdz/UserBundle/Controller/DefaultController.php;

namespace GangAuthority\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:index.html.twig');
    }
    public function statsAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:stats.html.twig');
    }
    public function telechargementAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:telechargement.html.twig');
    }
    public function profileAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:profile.html.twig');
    }
}
