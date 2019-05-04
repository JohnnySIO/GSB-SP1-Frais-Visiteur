<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheFrais
 *
 * @ORM\Table(name="fiche_frais")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\FicheFraisRepository")
 */
class FicheFrais
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="mois_ff", type="integer")
     */
    private $moisFf;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="GSB\VisiteurBundle\Entity\Visiteur",inversedBy="visiteur")
     * @ORM\JoinColumn(name="id_vis", referencedColumnName="id")
     */
    private $idVis;
    /**
     * @var int
     *
     * @ORM\Column(name="nbJustificatifs_ff", type="integer", nullable=true)
     */
    private $nbJustificatifsFf;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide_ff", type="decimal", precision=10, scale=2)
     */
    private $montantValideFf;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateCreation_ff", type="date", nullable=true)
     */
    private $dateCreationFf;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\VisiteurBundle\Entity\Etat",inversedBy="etat")
     * @ORM\JoinColumn(name="id_etat", referencedColumnName="id")
     */
    private $idEtat;


    /**
     * Get moisFf
     *
     * @return int
     */
    public function getMoisFf()
    {
        return $this->moisFf;
    }

    /**
     * Set idVis
     *
     * @param integer $idVis
     *
     * @return FicheFrais
     */
    public function setIdVis($idVis)
    {
        $this->idVis = $idVis;

        return $this;
    }

    /**
     * Get idVis
     *
     * @return int
     */
    public function getIdVis()
    {
        return $this->idVis;
    }

    /**
     * Set nbJustificatifsFf
     *
     * @param integer $nbJustificatifsFf
     *
     * @return FicheFrais
     */
    public function setNbJustificatifsFf($nbJustificatifsFf)
    {
        $this->nbJustificatifsFf = $nbJustificatifsFf;

        return $this;
    }

    /**
     * Get nbJustificatifsFf
     *
     * @return int
     */
    public function getNbJustificatifsFf()
    {
        return $this->nbJustificatifsFf;
    }

    /**
     * Set montantValideFf
     *
     * @param string $montantValideFf
     *
     * @return FicheFrais
     */
    public function setMontantValideFf($montantValideFf)
    {
        $this->montantValideFf = $montantValideFf;

        return $this;
    }

    /**
     * Get montantValideFf
     *
     * @return string
     */
    public function getMontantValideFf()
    {
        return $this->montantValideFf;
    }

    

    /**
     * Set idEtat
     *
     * @param integer $idEtat
     *
     * @return FicheFrais
     */
    public function setIdEtat($idEtat)
    {
        $this->idEtat = $idEtat;

        return $this;
    }

    /**
     * Get idEtat
     *
     * @return int
     */
    public function getIdEtat()
    {
        return $this->idEtat;
    }

    /**
     * Set moisFf
     *
     * @param integer $moisFf
     *
     * @return FicheFrais
     */
    public function setMoisFf($moisFf)
    {
        $this->moisFf = $moisFf;

        return $this;
    }


    /**
     * Set dateCreationFf
     *
     * @param \DateTime $dateCreationFf
     *
     * @return FicheFrais
     */
    public function setDateCreationFf($dateCreationFf)
    {
        $this->dateCreationFf = $dateCreationFf;

        return $this;
    }

    /**
     * Get dateCreationFf
     *
     * @return \DateTime
     */
    public function getDateCreationFf()
    {
        return $this->dateCreationFf;
    }
}
