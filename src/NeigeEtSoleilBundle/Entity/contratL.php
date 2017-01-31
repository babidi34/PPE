<?php

namespace NeigeEtSoleilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contratL
 *
 * @ORM\Table(name="contrat_l")
 * @ORM\Entity(repositoryClass="NeigeEtSoleilBundle\Repository\contratLRepository")
 */
class contratL
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutCL", type="date", nullable=true)
     */
    private $dateDebutCL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinCL", type="date", nullable=true)
     */
    private $dateFinCL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSignatureCL", type="date", nullable=true)
     */
    private $dateSignatureCL;


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
     * Set dateDebutCL
     *
     * @param \DateTime $dateDebutCL
     *
     * @return contratL
     */
    public function setDateDebutCL($dateDebutCL)
    {
        $this->dateDebutCL = $dateDebutCL;

        return $this;
    }

    /**
     * Get dateDebutCL
     *
     * @return \DateTime
     */
    public function getDateDebutCL()
    {
        return $this->dateDebutCL;
    }

    /**
     * Set dateFinCL
     *
     * @param \DateTime $dateFinCL
     *
     * @return contratL
     */
    public function setDateFinCP($dateFinCL)
    {
        $this->dateFinCL = $dateFinCL;

        return $this;
    }

    /**
     * Get dateFinCL
     *
     * @return \DateTime
     */
    public function getDateFinCL()
    {
        return $this->dateFinCL;
    }

    /**
     * Set dateSignatureCL
     *
     * @param \DateTime $dateSignatureCL
     *
     * @return contratL
     */
    public function setDateSignatureCL($dateSignatureCL)
    {
        $this->dateSignatureCL = $dateSignatureCL;

        return $this;
    }

    /**
     * Get dateSignatureCL
     *
     * @return \DateTime
     */
    public function getDateSignatureCL()
    {
        return $this->dateSignatureCL;
    }
}

