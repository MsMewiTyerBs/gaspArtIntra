<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturefs
 *
 * @ORM\Table(name="facturefs", indexes={@ORM\Index(name="fournisseur_id", columns={"fournisseur_id"})})
 * @ORM\Entity(repositoryClass="FacturefsRepository")
 */
class Facturefs
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
     * @ORM\Column(name="etat", type="string", length=2, nullable=false)
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
     * @ORM\Column(name="adr_chantier", type="string", length=200, nullable=true)
     */
    private $adrChantier;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="string", length=1, nullable=false)
     */
    private $tva;

    /**
     * @var \Fournisseurs
     *
     * @ORM\ManyToOne(targetEntity="Fournisseurs")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
     * })
     */
    private $fournisseur;

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
     * @return Facturefs
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
     * @return Facturefs
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
     * @return Facturefs
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
     * @return Facturefs
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
     * @return Facturefs
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
     * Set adrChantier
     *
     * @param string $adrChantier
     *
     * @return Facturefs
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
     * Set tva
     *
     * @param string $tva
     *
     * @return Facturefs
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
     * Set fournisseur
     *
     * @param \AppBundle\Entity\Fournisseurs $fournisseur
     *
     * @return Facturefs
     */
    public function setFournisseur(Fournisseurs $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \AppBundle\Entity\Fournisseurs
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
}
