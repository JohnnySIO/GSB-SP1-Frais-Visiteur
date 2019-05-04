<?php

namespace GSB\VisiteurBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityRepository;
class ConsulterController extends Controller
{
	public function consulterFfAction(Request $request){
		//Données de la session
		$session = $request->getSession();
		$id = $session->get('id');
		$ff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->getFf($id);
		//Mois/année courant
	  	$transdate = date('m-d-Y', time());
	      	$d = date_parse_from_format("m-d-y",$transdate);
	    	$moisCours = $d["month"];
		$anneeCours = $d["year"] - 1;	

		$estAjd = 0;
		$listeMois = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->getListeMois($id);
		foreach($listeMois as $unListeMois){
			foreach($unListeMois as $unMois){
				if($unMois == 5){
					$estAjd = 1;
				}
			}
		}

		$nbJFf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisHorsForfait')->getNbJFf($id,$moisCours);
		$ffMois = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisForfait')->getMontantValide($id,$moisCours);
		$montantValide = 0;

		foreach($ffMois as $unFfMois){
			$montantValide = $montantValide + $unFfMois["quantiteLff"] * $unFfMois["montantFrais"];
		}
		$this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->majFf($id,$moisCours,$nbJFf[1],$montantValide);
		
		return $this->render('GSBVisiteurBundle:Consulter:FicheFrais.html.twig', array('ff'=>$ff,'mois'=>$moisCours,'anneeCours'=>$anneeCours,'estAjd'=>$estAjd));
    	}

	public function consulterLffAction(Request $request,$mois){
		//Données de la session
		$session = $request->getSession();
		$id = $session->get('id');
		//Mois/année courant
	  	$transdate = date('m-d-Y', time());
	      	$d = date_parse_from_format("m-d-y",$transdate);
	    	$moisCours = $d["month"];
		$anneeCours = $d["year"] - 1;	
		
		$lff = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisForfait')->getLff($id,$mois);
		$estAjd = 0;
		
		$nbJFf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisHorsForfait')->getNbJFf($id,$moisCours);
		$ffMois = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisForfait')->getMontantValide($id,$moisCours);
		$montantValide = 0;

		foreach($ffMois as $unFfMois){
			$montantValide = $montantValide + $unFfMois["quantiteLff"] * $unFfMois["montantFrais"];
		}
		$this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->majFf($id,$moisCours,$nbJFf[1],$montantValide);

		return $this->render('GSBVisiteurBundle:Consulter:LigneFraisForfait.html.twig', array('lff'=>$lff,'mois'=>$mois,'moisCours'=>$moisCours,'anneeCours'=>$anneeCours));
    	}

	public function consulterLfhfAction(Request $request,$mois){
		//Données de la session
		$session = $request->getSession();
		$id = $session->get('id');
		//Mois/année courant
	  	$transdate = date('m-d-Y', time());
	      	$d = date_parse_from_format("m-d-y",$transdate);
	    	$moisCours = $d["month"];
		$anneeCours = $d["year"] - 1;
		
		$lfhf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisHorsForfait')->getLfhf($id,$mois);
		
		$nbJFf = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisHorsForfait')->getNbJFf($id,$moisCours);
		$ffMois = $this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:LigneFraisForfait')->getMontantValide($id,$moisCours);
		$montantValide = 0;

		foreach($ffMois as $unFfMois){
			$montantValide = $montantValide + $unFfMois["quantiteLff"] * $unFfMois["montantFrais"];
		}
		$this->getDoctrine()->getManager()->getRepository('GSBVisiteurBundle:FicheFrais')->majFf($id,$moisCours,$nbJFf[1],$montantValide);

		return $this->render('GSBVisiteurBundle:Consulter:LigneFraisHorsForfait.html.twig', array('lfhf'=>$lfhf,'mois'=>$mois,'moisCours'=>$moisCours,'anneeCours'=>$anneeCours));
    	} 
}
