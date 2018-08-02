<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturests
 *
 * @ORM\Table(name="facturests", indexes={@ORM\Index(name="soustraitant_id", columns={"soustraitant_id"})})
 * @ORM\Entity
 */
class Facturests
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
     * @ORM\Column(name="titre", type="string", length=200, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="date", nullable=false)
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=1, nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var float
     *
     * @ORM\Column(name="ttc", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttc;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="string", length=1, nullable=false)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_chantier", type="string", length=200, nullable=true)
     */
    private $adrChantier;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Facturests
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Facturests
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Facturests
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Facturests
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set ttc
     *
     * @param float $ttc
     *
     * @return Facturests
     */
    public function setTtc($ttc)
    {
        $this->ttc = $ttc;

        return $this;
    }

    /**
     * Get ttc
     *
     * @return float
     */
    public function getTtc()
    {
        return $this->ttc;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Facturests
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set adrChantier
     *
     * @param string $adrChantier
     *
     * @return Facturests
     */
    public function setAdrChantier($adrChantier)
    {
        $this->adrChantier = $adrChantier;

        return $this;
    }

    /**
     * Get adrChantier
     *
     * @return string
     */
    public function getAdrChantier()
    {
        return $this->adrChantier;
    }

    /**
     * Set soustraitant
     *
     * @param \AppBundle\Entity\Soustraitants $soustraitant
     *
     * @return Facturests
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
