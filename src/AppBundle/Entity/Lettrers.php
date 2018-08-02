<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettrers
 *
 * @ORM\Table(name="lettrers", indexes={@ORM\Index(name="relation_id", columns={"relation_id"})})
 * @ORM\Entity
 */
class Lettrers
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
     * @var \Relations
     *
     * @ORM\ManyToOne(targetEntity="Relations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_id", referencedColumnName="id")
     * })
     */
    private $relation;



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
     * @return Lettrers
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
     * @return Lettrers
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
     * @return Lettrers
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
     * @return Lettrers
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
     * Set relation
     *
     * @param \AppBundle\Entity\Relations $relation
     *
     * @return Lettrers
     */
    public function setRelation(\AppBundle\Entity\Relations $relation = null)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return \AppBundle\Entity\Relations
     */
    public function getRelation()
    {
        return $this->relation;
    }
}
