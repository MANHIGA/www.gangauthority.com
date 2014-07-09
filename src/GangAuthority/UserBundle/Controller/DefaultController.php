<?php
// src/Sdz/UserBundle/Controller/DefaultController.php;

namespace GangAuthority\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GangAuthority\UserBundle\Entity\Joueur;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GangAuthorityUserBundle:Default:index.html.twig');
    }
    public function oubliMdpAction(Request $request)
    {
        $joueur = new Joueur();
        $joueur->setPointautorite(0);
        $joueur->setNbmorts(0);
        $joueur->setNbtues(0);
        $joueur->setArgent(0);
        $joueur->setNomgang('-');

        $form = $this->createFormBuilder($joueur)
        ->add('pseudo', 'text')
        ->add('save', 'submit')
        ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery('SELECT j FROM GangAuthorityUserBundle:Joueur j WHERE j.pseudo = :pseudo')->setParameter('pseudo', $joueur->getPseudo());
            
            $message = \Swift_Message::newInstance()
                ->setSubject('Récupération mot de passe')
                ->setFrom('gangauthority@gmail.com')
                ->setTo($query->getSingleResult()->getEmail())
                ->setBody($query->getSingleResult()->getMdp());
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('gang_authority_user_homepage'));
        }

        return $this->render('GangAuthorityUserBundle:Default:oublimdp.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    public function signupAction(Request $request)
    {
        $joueur = new Joueur();
        $joueur->setPointautorite(0);
        $joueur->setNbmorts(0);
        $joueur->setNbtues(0);
        $joueur->setArgent(15000);

        $form = $this->createFormBuilder($joueur)
            ->add('pseudo', 'text')
            ->add('email', 'email')
            ->add('mdp', 'password')
            ->add('nomgang', 'text')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();
            return $this->redirect($this->generateUrl('gang_authority_user_homepage'));
        }

        return $this->render('GangAuthorityUserBundle:Default:signup.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    public function statsAction()
    {
        $repository = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Joueur');

        $querynbtues = $repository->createQueryBuilder('j')
        ->orderBy('j.nbtues', 'DESC')
        ->getQuery();

        $querynbmorts = $repository->createQueryBuilder('j')
        ->orderBy('j.nbmorts', 'asc')
        ->getQuery();

        $queryargent = $repository->createQueryBuilder('j')
        ->orderBy('j.argent', 'DESC')
        ->getQuery();

        $querypoints = $repository->createQueryBuilder('j')
        ->orderBy('j.pointautorite', 'DESC')
        ->getQuery();

        return $this->render('GangAuthorityUserBundle:Default:stats.html.twig', array(
            'joueursnbtues' => $querynbtues->getResult(),
            'joueursnbmorts' => $querynbmorts->getResult(),
            'joueursargent' => $queryargent->getResult(),
            'joueurspoints' => $querypoints->getResult(),
            ));
    }
    public function telechargementAction()
    {
        $fichier = "ga.sql";
        $chemin = "C:\wamp\www\www.gangauthority.com\web\bundles\gangauthorityuser\\"; // emplacement de votre fichier .pdf
         
        $response = new Response();
        $response->setContent(file_get_contents($chemin.$fichier));
        $response->headers->set('Content-Type', 'application/download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename='. $fichier);
         
   return $response;
    }
    public function profileAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getIdcompte();

        $joueur = $this->getDoctrine()
        ->getRepository('GangAuthorityUserBundle:Joueur')
        ->find($id);

        $form = $this->createFormBuilder($joueur)
            ->add('email', 'email')
            ->add('mdp', 'password')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();
            return $this->redirect($this->generateUrl('gang_authority_user_profile'));
        }

        return $this->render('GangAuthorityUserBundle:Default:profile.html.twig', array(
            'form' => $form->createView(),
            ));
    }
}
