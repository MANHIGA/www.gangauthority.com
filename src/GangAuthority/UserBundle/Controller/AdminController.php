<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GangAuthority\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\SecurityContext;

use GangAuthority\UserBundle\Entity\Bannir;

use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('GangAuthorityUserBundle:Admin:index.html.twig');
    }
    public function voirSignalementsAction()
    {
    	$signalements = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Signalement')
        ->findAll();
    	return $this->render('GangAuthorityUserBundle:Admin:voirsignalements.html.twig', array(
    		'signalements' => $signalements,
		));
    }
    public function voirBannirAction($idcompte, $idsignalement, Request $request)
    {
        $signalement = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Signalement')
        ->find($idsignalement);

        $joueur = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Joueur')
        ->find($idcompte);

        $user = $this->get('security.context')->getToken()->getUser();
        $idadmin = $user->getIdadmin();

        $admin = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Administrateur')
        ->find($idadmin);

        $bannir = new Bannir();
        $bannir->setDatebannissement(new \DateTime('today'));
        $bannir->setBannirsignalement($signalement);
        $bannir->setBannircompte($joueur);
        $bannir->setBanniradmin($admin);

        $form = $this->createFormBuilder($bannir)
            ->add('dureebannissement', 'integer')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($bannir);
            $em->flush();
            return $this->redirect($this->generateUrl('gang_authority_admin'));
        }
        return $this->render('GangAuthorityUserBundle:Admin:voirbannir.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
