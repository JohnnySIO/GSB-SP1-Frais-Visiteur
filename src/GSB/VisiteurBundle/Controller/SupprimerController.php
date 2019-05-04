<?php

namespace GSB\VisiteurBundle\Controller;

use GSB\VisiteurBundle\Entity;

use GSB\VisiteurBundle\Entity\Visiteur;
use GSB\VisiteurBundle\Form\VisiteurType;

use GSB\VisiteurBundle\Entity\Etat;
use GSB\VisiteurBundle\Form\EtatType;

use GSB\VisiteurBundle\Entity\FicheFrais;
use GSB\VisiteurBundle\Form\FicheFraisType;

use GSB\VisiteurBundle\Entity\FraisForfait;
use GSB\VisiteurBundle\Form\FraisForfaitType;

use GSB\VisiteurBundle\Entity\LigneFraisForfait;
use GSB\VisiteurBundle\Form\LigneFraisForfaitType;

use GSB\VisiteurBundle\Entity\LigneFraisHorsForfait;
use GSB\VisiteurBundle\Form\LigneFraisHorsForfaitType;

use GSB\VisiteurBundle\Repository\FicheFraisRepository;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sension\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SupprimerController extends Controller {

    public function supprimerLffAction(Request $request,$mois,$id) {
	//Données de la session
	$session = $request->getSession();
        $idVis = $session->get('id');

	$this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisForfait')->supprimerLff($idVis,$mois,$id);

        return $this->render('GSBVisiteurBundle:Supprimer:LigneFraisForfait.html.twig', array('mois'=>$mois));
    }
    
    public function supprimerLfhfAction(Request $request,$mois,$id) {
	//Données de la session
	$session = $request->getSession();
        $idVis = $session->get('id');
	
	$this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisHorsForfait')->supprimerLfhf($idVis,$mois,$id);
	
        return $this->render('GSBVisiteurBundle:Supprimer:LigneFraisHorsForfait.html.twig', array('mois'=>$mois));
    }
}
