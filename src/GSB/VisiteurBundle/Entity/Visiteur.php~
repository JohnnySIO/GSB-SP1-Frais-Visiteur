<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\VisiteurRepository")
 */
class Visiteur
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
     * @ORM\Column(name="login_vis", type="string", length=20, unique=true)
     */
    private $loginVis;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_vis", type="string", length=20, nullable=true)
     */
    private $mdpVis;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vis", type="string", length=30, nullable=true)
     */
    private $nomVis;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_vis", type="string", length=30, nullable=true)
     */
    private $prenomVis;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_vis", type="string", length=30, nullable=true)
     */
    private $adresseVis;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_vis", type="string", length=5, nullable=true)
     */
    private $cpVis;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_vis", type="string", length=30, nullable=true)
     */
    private $villeVis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbauche_vis", type="date")
     */
    private $dateEmbaucheVis;

    /**
     * Set id
     *
     * @param int $id
     *
     * @return Visiteur
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set loginVis
     *
     * @param string $loginVis
     *
     * @return Visiteur
     */
    public function setLoginVis($loginVis)
    {
        $this->loginVis = $loginVis;

        return $this;
    }

    /**
     * Get loginVis
     *
     * @return string
     */
    public function getLoginVis()
    {
        return $this->loginVis;
    }

    /**
     * Set mdpVis
     *
     * @param string $mdpVis
     *
     * @return Visiteur
     */
    public function setMdpVis($mdpVis)
    {
        $this->mdpVis = $mdpVis;

        return $this;
    }

    /**
     * Get mdpVis
     *
     * @return string
     */
    public function getMdpVis()
    {
        return $this->mdpVis;
    }

    /**
     * Set nomVis
     *
     * @param string $nomVis
     *
     * @return Visiteur
     */
    public function setNomVis($nomVis)
    {
        $this->nomVis = $nomVis;

        return $this;
    }

    /**
     * Get nomVis
     *
     * @return string
     */
    public function getNomVis()
    {
        return $this->nomVis;
    }

    /**
     * Set prenomVis
     *
     * @param string $prenomVis
     *
     * @return Visiteur
     */
    public function setPrenomVis($prenomVis)
    {
        $this->prenomVis = $prenomVis;

        return $this;
    }

    /**
     * Get prenomVis
     *
     * @return string
     */
    public function getPrenomVis()
    {
        return $this->prenomVis;
    }

    /**
     * Set adresseVis
     *
     * @param string $adresseVis
     *
     * @return Visiteur
     */
    public function setAdresseVis($adresseVis)
    {
        $this->adresseVis = $adresseVis;

        return $this;
    }

    /**
     * Get adresseVis
     *
     * @return string
     */
    public function getAdresseVis()
    {
        return $this->adresseVis;
    }

    /**
     * Set cpVis
     *
     * @param string $cpVis
     *
     * @return Visiteur
     */
    public function setCpVis($cpVis)
    {
        $this->cpVis = $cpVis;

        return $this;
    }

    /**
     * Get cpVis
     *
     * @return string
     */
    public function getCpVis()
    {
        return $this->cpVis;
    }

    /**
     * Set dateEmbaucheVis
     *
     * @param \DateTime $dateEmbaucheVis
     *
     * @return Visiteur
     */
    public function setDateEmbaucheVis($dateEmbaucheVis)
    {
        $this->dateEmbaucheVis = $dateEmbaucheVis;

        return $this;
    }

    /**
     * Get dateEmbaucheVis
     *
     * @return \DateTime
     */
    public function getDateEmbaucheVis()
    {
        return $this->dateEmbaucheVis;
    }

    /**
     * Set villeVis
     *
     * @param string $villeVis
     *
     * @return Visiteur
     */
    public function setVilleVis($villeVis)
    {
        $this->villeVis = $villeVis;

        return $this;
    }

    /**
     * Get villeVis
     *
     * @return string
     */
    public function getVilleVis()
    {
        return $this->villeVis;
    }
}
