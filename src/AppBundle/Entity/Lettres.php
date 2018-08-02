<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettres
 *
 * @ORM\Table(name="lettres", indexes={@ORM\Index(name="client_id", columns={"client_id"})})
 * @ORM\Entity
 */
class Lettres
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
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;



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
     * @return Lettres
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
     * @return Lettres
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
     * @return Lettres
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
     * @return Lettres
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
     * Set client
     *
     * @param \AppBundle\Entity\Clients $client
     *
     * @return Lettres
     */
    public function setClient(\AppBundle\Entity\Clients $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Clients
     */
    public function getClient()
    {
        return $this->client;
    }
}
