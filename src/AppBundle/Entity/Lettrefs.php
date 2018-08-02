<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettrefs
 *
 * @ORM\Table(name="lettrefs", indexes={@ORM\Index(name="fournisseur_id", columns={"fournisseur_id"})})
 * @ORM\Entity
 */
class Lettrefs
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
     * @var \Fournisseurs
     *
     * @ORM\ManyToOne(targetEntity="Fournisseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
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
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Lettrefs
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
     * @return Lettrefs
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
     * @return Lettrefs
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
     * @return Lettrefs
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
     * Set fournisseur
     *
     * @param \AppBundle\Entity\Fournisseurs $fournisseur
     *
     * @return Lettrefs
     */
    public function setFournisseur(\AppBundle\Entity\Fournisseurs $fournisseur = null)
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
