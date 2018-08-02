<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettrests
 *
 * @ORM\Table(name="lettrests", indexes={@ORM\Index(name="soustraitant_id", columns={"soustraitant_id"})})
 * @ORM\Entity
 */
class Lettrests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=200, nullable=false)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=200, nullable=true)
     */
    private $objet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="date", nullable=false)
     */
    private $dateEnvoi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recommande", type="boolean", nullable=true)
     */
    private $recommande;

    /**
     * @var \Soustraitants
     *
     * @ORM\ManyToOne(targetEntity="Soustraitants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="soustraitant_id", referencedColumnName="id")
     * })
     */
    private $soustraitant;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Lettrests
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Lettrests
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Lettrests
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set recommande
     *
     * @param boolean $recommande
     *
     * @return Lettrests
     */
    public function setRecommande($recommande)
    {
        $this->recommande = $recommande;

        return $this;
    }

    /**
     * Get recommande
     *
     * @return boolean
     */
    public function getRecommande()
    {
        return $this->recommande;
    }

    /**
     * Set soustraitant
     *
     * @param \AppBundle\Entity\Soustraitants $soustraitant
     *
     * @return Lettrests
     */
    public function setSoustraitant(\AppBundle\Entity\Soustraitants $soustraitant = null)
    {
        $this->soustraitant = $soustraitant;

        return $this;
    }

    /**
     * Get soustraitant
     *
     * @return \AppBundle\Entity\Soustraitants
     */
    public function getSoustraitant()
    {
        return $this->soustraitant;
    }
}
