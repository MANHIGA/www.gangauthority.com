<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GangAuthority\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('GangAuthorityUserBundle:Admin:index.html.twig');
    }
    public function voirSignalementsAction()
    {
    	return $this->render('GangAuthorityUserBundle:Admin:voirsignalements.html.twig');
    }
}

