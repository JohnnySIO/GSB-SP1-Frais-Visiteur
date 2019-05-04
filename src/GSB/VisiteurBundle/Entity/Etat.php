<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\EtatRepository")
 */
class Etat
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_etat", type="string", length=30, unique=true)
     */
    private $libelleEtat;


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
     * Set libelleEtat
     *
     * @param string $libelleEtat
     *
     * @return Etat
     */
    public function setLibelleEtat($libelleEtat)
    {
        $this->libelleEtat = $libelleEtat;

        return $this;
    }

    /**
     * Get libelleEtat
     *
     * @return string
     */
    public function getLibelleEtat()
    {
        return $this->libelleEtat;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Etat
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
