<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartements
 *
 * @ORM\Table(name="appartements")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\AppartementsRepository")
 */
class Appartements
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
     * @ORM\ManyToOne(targetEntity="NeigeEtSoleilBundle\Entity\TypeAppartement", inversedBy="appartements")
     */
    private $typeAppartement;

    /**
     * @var string
     *
     * @ORM\Column(name="nomImmeubleA", type="string", length=50, nullable=true)
     */
    private $nomImmeubleA;

    /**
     * @var string
     *
     * @ORM\Column(name="numVoieA", type="string", length=50, nullable=true)
     */
    private $numVoieA;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRueA", type="string", length=50, nullable=true)
     */
    private $nomRueA;

    /**
     * @var string
     *
     * @ORM\Column(name="villeA", type="string", length=50, nullable=true)
     */
    private $villeA;

    /**
     * @var int
     *
     * @ORM\Column(name="cpA", type="integer", nullable=true)
     */
    private $cpA;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie", type="float", nullable=true)
     */
    private $superficie;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=true)
     */
    private $disponible;


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
     * Set nomImmeubleA
     *
     * @param string $nomImmeubleA
     *
     * @return Appartements
     */
    public function setNomImmeubleA($nomImmeubleA)
    {
        $this->nomImmeubleA = $nomImmeubleA;

        return $this;
    }

    /**
     * Get nomImmeubleA
     *
     * @return string
     */
    public function getNomImmeubleA()
    {
        return $this->nomImmeubleA;
    }

    /**
     * Set numVoieA
     *
     * @param string $numVoieA
     *
     * @return Appartements
     */
    public function setNumVoieA($numVoieA)
    {
        $this->numVoieA = $numVoieA;

        return $this;
    }

    /**
     * Get numVoieA
     *
     * @return string
     */
    public function getNumVoieA()
    {
        return $this->numVoieA;
    }

    /**
     * Set nomRueA
     *
     * @param string $nomRueA
     *
     * @return Appartements
     */
    public function setNomRueA($nomRueA)
    {
        $this->nomRueA = $nomRueA;

        return $this;
    }

    /**
     * Get nomRueA
     *
     * @return string
     */
    public function getNomRueA()
    {
        return $this->nomRueA;
    }

    /**
     * Set villeA
     *
     * @param string $villeA
     *
     * @return Appartements
     */
    public function setVilleA($villeA)
    {
        $this->villeA = $villeA;

        return $this;
    }

    /**
     * Get villeA
     *
     * @return string
     */
    public function getVilleA()
    {
        return $this->villeA;
    }

    /**
     * Set cpA
     *
     * @param integer $cpA
     *
     * @return Appartements
     */
    public function setCpA($cpA)
    {
        $this->cpA = $cpA;

        return $this;
    }

    /**
     * Get cpA
     *
     * @return int
     */
    public function getCpA()
    {
        return $this->cpA;
    }

    /**
     * Set superficie
     *
     * @param float $superficie
     *
     * @return Appartements
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return float
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Appartements
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Appartements
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set typeAppartement
     *
     * @param \NeigeEtSoleilBundle\Entity\TypeAppartement $typeAppartement
     *
     * @return Appartements
     */
    public function setTypeAppartement(\NeigeEtSoleilBundle\Entity\TypeAppartement $typeAppartement = null)
    {
        $this->typeAppartement = $typeAppartement;

        return $this;
    }

    /**
     * Get typeAppartement
     *
     * @return \NeigeEtSoleilBundle\Entity\TypeAppartement
     */
    public function getTypeAppartement()
    {
        return $this->typeAppartement;
    }
}
