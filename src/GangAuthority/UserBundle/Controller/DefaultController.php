<?php

namespace GangAuthority\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
<<<<<<< HEAD
use GangAuthority\UserBundle\Entity\Joueur;
=======

>>>>>>> 28c7a3e175ce7a0327206ff1480d6522167ee133
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:index.html.twig');
    }
<<<<<<< HEAD
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
=======
>>>>>>> 28c7a3e175ce7a0327206ff1480d6522167ee133
}
