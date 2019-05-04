<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LigneFraisHorsForfait
 *
 * @ORM\Table(name="ligne_frais_hors_forfait")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\LigneFraisHorsForfaitRepository")
 */
class LigneFraisHorsForfait
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
     * @ORM\ManyToOne(targetEntity="GSB\VisiteurBundle\Entity\Visiteur")
     * @ORM\JoinColumn(name="id_vis", referencedColumnName="id")
     */
    private $idVis;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\VisiteurBundle\Entity\FicheFrais")
     * @ORM\JoinColumn(name="mois_ff", referencedColumnName="mois_ff")
     */
    private $moisFf;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_lfhf", type="string", length=100)
     */
    private $libelleLfhf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_lfhf", type="date")
     */
    private $dateLfhf;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_lfhf", type="decimal", precision=10, scale=2)
     * @Assert\GreaterThan(0)
     */
    private $montantLfhf;


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
     * Set idVis
     *
     * @param integer $idVis
     *
     * @return LigneFraisHorsForfait
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
     * Set moisFf
     *
     * @param integer $moisFf
     *
     * @return LigneFraisForfait
     */
    public function setMoisFf($moisFf)
    {
        $this->moisFf = $moisFf;

        return $this;
    }

    /**
     * Get moisFf
     *
     * @return integer
     */
    public function getMoisFf()
    {
        return $this->moisFf;
    }
    /**
     * Set libelleLfhf
     *
     * @param string $libelleLfhf
     *
     * @return LigneFraisHorsForfait
     */
    public function setLibelleLfhf($libelleLfhf)
    {
        $this->libelleLfhf = $libelleLfhf;

        return $this;
    }

    /**
     * Get libelleLfhf
     *
     * @return string
     */
    public function getLibelleLfhf()
    {
        return $this->libelleLfhf;
    }

    /**
     * Set dateLfhf
     *
     * @param \DateTime $dateLfhf
     *
     * @return LigneFraisHorsForfait
     */
    public function setDateLfhf($dateLfhf)
    {
        $this->dateLfhf = $dateLfhf;

        return $this;
    }

    /**
     * Get dateLfhf
     *
     * @return \DateTime
     */
    public function getDateLfhf()
    {
        return $this->dateLfhf;
    }

    /**
     * Set montantLfhf
     *
     * @param string $montantLfhf
     *
     * @return LigneFraisHorsForfait
     */
    public function setMontantLfhf($montantLfhf)
    {
        $this->montantLfhf = $montantLfhf;

        return $this;
    }

    /**
     * Get montantLfhf
     *
     * @return string
     */
    public function getMontantLfhf()
    {
        return $this->montantLfhf;
    }
}
