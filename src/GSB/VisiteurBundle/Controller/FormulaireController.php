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

class FormulaireController extends Controller {

	public function formFfAction(Request $request) {
	//Données de la session
	$session = $request->getSession();
        $idVis = $session->get('id');
	//Mois/année courant
	$transdate = date('m-d-Y', time());
      	$d = date_parse_from_format("m-d-y",$transdate);
    	$moisCours = $d["month"];
	$anneeCours = $d["year"] - 1;

        $ff = new FicheFrais();

	$v = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:Visiteur')->leVisiteur($idVis);

	$e = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:Etat')->lEtat();

        $form = $this->createForm(FicheFraisType::class, $ff);
 	$form->remove('nbJustificatifsFf');
	$form->remove('montantValideFf');
	$form->remove('dateCreationFf');
	$form->remove('moisFf');
	$form->remove('idVis');
	$form->remove('idEtat');

	
        if ($request->isMethod('POST')) {
		$form->handleRequest($request);
			
        }

        
        if ($form->isValid()) {
		dump($form);
		$ff->setMoisFf($moisCours);
		$ff->setIdVis($v);
		$ff->setNbJustificatifsFf(0);
		$ff->setMontantValideFf(0.0);
		$ff->setDateCreationFf(new \DateTime());
		$ff->setIdEtat($e);
		dump($form);
		$em = $this->getDoctrine()->getManager();
		$em->persist($ff);
            
		$em->flush();

		$request->getSession()->getFlashBag()->add('notice', 'Fiche frais enregistré');
            
		return $this->redirectToRoute('gsb_choix_frais_consulter', array('mois'=>$moisCours));
        }
        return $this->render('GSBVisiteurBundle:Form:FicheFrais.html.twig', array('form'=>$form->createView(),'mois'=>$moisCours,'anneeCours'=>$anneeCours));
    }

    public function formLffAction(Request $request) {
	//Données de la session
	$session = $request->getSession();
        $idVis = $session->get('id');
	//Mois courant
	$transdate = date('m-d-Y', time());
      	$d = date_parse_from_format("m-d-y",$transdate);
    	$moisCours = $d["month"];
	
        $lff = new LigneFraisForfait();
        
	$v = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:Visiteur')->leVisiteur($idVis);

	$m = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->leMois($moisCours,$idVis);

	$form = $this->createForm(LigneFraisForfaitType::class, $lff);
	$form->remove('idVis');
	$form->remove('moisFf');

	if ($request->isMethod('POST')) {
		$form->handleRequest($request);

        }


        
        if ($form->isValid()) {
		$lff->setIdVis($v);
		$lff->setMoisFf($m);
		$em = $this->getDoctrine()->getManager();
		$em->persist($lff);
		$em->flush();
            
		$request->getSession()->getFlashBag()->add('notice', 'Ligne Frais Forfait enregistré');
            
		return $this->redirectToRoute('gsb_lignefraisforfait_consulter', array('mois'=>$moisCours));
        }
        return $this->render('GSBVisiteurBundle:Form:LigneFraisForfait.html.twig', array('form'=>$form->createView(),'idVis'=>$idVis,'mois'=>$moisCours));
    }
    
    public function formLfhfAction(Request $request) {
	//Données de la session
	$session = $request->getSession();
        $idVis = $session->get('id');
	//Mois courant
	$transdate = date('m-d-Y', time());
      	$d = date_parse_from_format("m-d-y",$transdate);
    	$moisCours = $d["month"];
	
        $lfhf = new LigneFraisHorsForfait();

	$v = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:Visiteur')->leVisiteur($idVis);

	$m = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->leMois($moisCours,$idVis);
        
        $form = $this->createForm(LigneFraisHorsForfaitType::class, $lfhf);
	$form->remove('idVis');
	$form->remove('moisFf');
	$form->remove('dateLfhf');
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
        }
        
        if ($form->isValid()) {
		$lfhf->setIdVis($v);
		$lfhf->setMoisFf($m);
		$lfhf->setDateLfhf(new \DateTime());
		$em = $this->getDoctrine()->getManager();
		$em->persist($lfhf);
		$em->flush();
            
		$request->getSession()->getFlashBag()->add('notice', 'Ligne Frais Hors Forfait enregistré');
            
		return $this->redirectToRoute('gsb_lignefraishorsforfait_consulter', array('mois' => $moisCours));
        }
        return $this->render('GSBVisiteurBundle:Form:LigneFraisHorsForfait.html.twig', array('form'=>$form->createView(),'dateAjd'=>$transdate));
    }
}
