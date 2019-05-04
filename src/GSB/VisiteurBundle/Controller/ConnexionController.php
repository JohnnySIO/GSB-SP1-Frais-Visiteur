<?php
namespace GSB\VisiteurBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Doctrine\ORM\EntityRepository;
class ConnexionController extends Controller {
	public function connexionAction() {
	
	//Formulaire de connexion
	$formConnect = $this->createFormBuilder()
		->add('loginVis', TextType::class)
		->add('mdpVis', PasswordType::class)
		->add('login', SubmitType::class)
		->getForm();

	$request = Request::createFromGlobals() ;
	$formConnect->handleRequest($request);

	$em = $this->getDoctrine()->getManager();
	$data = $formConnect->getData();

	$em = $this->getDoctrine()->getManager();

	//Requête sélection liste des visiteurs situé dans le repository
	$resultat = $em->getRepository('GSBVisiteurBundle:Visiteur')->trouverVis($data['loginVis'],$data['mdpVis']);
	
	//Ouverture de la session
	$session = new Session();
	foreach ($resultat as $unResultat) {
	    $session->set('id', $unResultat['id']);
	    $session->set('nomVis',$unResultat['nomVis']);
	    $session->set('prenomVis',$unResultat['prenomVis']);
	    $session->set('loginVis',$unResultat['loginVis']);

	return $this->render('GSBVisiteurBundle:Connexion:authVisiteur.html.twig');
		

	}

	return $this->render('GSBVisiteurBundle:Connexion:connexionVisiteur.html.twig',array('form' => $formConnect->createView()));
	}

	public function deconnexionAction(Session $session){
		$session->invalidate();
		return $this->render('GSBVisiteurBundle:Connexion:deconnexionVisiteur.html.twig');
	}

   
}
