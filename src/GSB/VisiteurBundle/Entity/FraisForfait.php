<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FraisForfait
 *
 * @ORM\Table(name="frais_forfait")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\FraisForfaitRepository")
 */
class FraisForfait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_frais", type="string", length=20)
     */
    private $libelleFrais;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_frais", type="decimal", precision=5, scale=2)
     */
    private $montantFrais;


   
  





    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleFrais
     *
     * @param string $libelleFrais
     *
     * @return FraisForfait
     */
    public function setLibelleFrais($libelleFrais)
    {
        $this->libelleFrais = $libelleFrais;

        return $this;
    }

    /**
     * Get libelleFrais
     *
     * @return string
     */
    public function getLibelleFrais()
    {
        return $this->libelleFrais;
    }

    /**
     * Set montantFrais
     *
     * @param string $montantFrais
     *
     * @return FraisForfait
     */
    public function setMontantFrais($montantFrais)
    {
        $this->montantFrais = $montantFrais;

        return $this;
    }

    /**
     * Get montantFrais
     *
     * @return string
     */
    public function getMontantFrais()
    {
        return $this->montantFrais;
    }

    /**
     * Set idFf
     *
     * @param \GSB\VisiteurBundle\Entity\FicheFrais $idFf
     *
     * @return FraisForfait
     */
    public function setIdFf(\GSB\VisiteurBundle\Entity\FicheFrais $idFf = null)
    {
        $this->idFf = $idFf;

        return $this;
    }

    /**
     * Get idFf
     *
     * @return \GSB\VisiteurBundle\Entity\FicheFrais
     */
    public function getIdFf()
    {
        return $this->idFf;
    }
}
