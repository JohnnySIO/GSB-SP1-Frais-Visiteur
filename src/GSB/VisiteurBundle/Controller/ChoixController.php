<?php
namespace GSB\VisiteurBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;

class ChoixController extends Controller {
	public function choixFormAction() {
		//Année courante
		$transdate = date('m-d-Y', time());
	      	$d = date_parse_from_format("m-d-y",$transdate);
		$moisCours = $d["month"];
		$anneeCours = $d["year"] - 1;	
		
		return $this->render('GSBVisiteurBundle:ChoixFrais:ChoixForm.html.twig',array('moisCours'=>$moisCours,'anneeCours'=>$anneeCours));
        }

	public function choixConsulterAction($mois) {
		//Année courante
		$transdate = date('m-d-Y', time());
	      	$d = date_parse_from_format("m-d-y",$transdate);
		$anneeCours = $d["year"] - 1;
	
		return $this->render('GSBVisiteurBundle:ChoixFrais:ChoixConsulter.html.twig', array('mois'=>$mois,'anneeCours'=>$anneeCours));
        }
}
