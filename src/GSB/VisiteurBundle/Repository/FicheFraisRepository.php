<?php

namespace GSB\VisiteurBundle\Repository;

/**
 * FicheFraisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FicheFraisRepository extends \Doctrine\ORM\EntityRepository
{
	public function getFf($id){
		$queryBuilder = $this->_em->createQueryBuilder('ff');
        
		$queryBuilder
			->select('ff.moisFf','ff.nbJustificatifsFf','ff.montantValideFf','ff.dateCreationFf','e.libelleEtat')
			->from('GSBVisiteurBundle:FicheFrais','ff')
			->innerJoin('GSBVisiteurBundle:Etat','e')
			->where('ff.idEtat=e.id')
			->andWhere('ff.idVis =:id')
			->setParameter('id', $id);
			return $queryBuilder->getQuery()->getArrayResult();
	}

	public function getListeMois($id){
		$queryBuilder = $this->_em->createQueryBuilder('ff');
        
		$queryBuilder
			->select('ff.moisFf')
			->from('GSBVisiteurBundle:FicheFrais','ff')
			->where('ff.idVis =:id')
			->setParameter('id', $id);
			return $queryBuilder->getQuery()->getArrayResult();
	}
	
	public function leMois($mois,$id){
		$queryBuilder = $this->_em->createQueryBuilder('ff');

		$queryBuilder
			->select('ff')
			->from('GSBVisiteurBundle:FicheFrais','ff')
			->where('ff.moisFf = :mois')
			->andWhere('ff.idVis =:id')
			->setParameter('mois',$mois)
			->setParameter('id', $id);

			return $queryBuilder->getQuery()->getSingleResult();
	}

	public function majFf($id,$mois,$nbJFf,$montantValide){

		$query = $this->_em->createQuery("update GSBVisiteurBundle:FicheFrais ff 
					set ff.nbJustificatifsFf = ".$nbJFf." 
					where ff.idVis = ".$id." 
					and ff.moisFf = ".$mois);

		$query->execute();
		
		$query = $this->_em->createQuery("update GSBVisiteurBundle:FicheFrais ff 
					set ff.montantValideFf = ".$montantValide." 
					where ff.idVis = ".$id." 
					and ff.moisFf = ".$mois);

		$query->execute();

	}
	
}
