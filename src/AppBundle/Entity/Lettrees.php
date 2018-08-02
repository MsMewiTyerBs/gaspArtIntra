<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettrees
 *
 * @ORM\Table(name="lettrees", indexes={@ORM\Index(name="employe_id", columns={"employe_id"})})
 * @ORM\Entity
 */
class Lettrees
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
     * @var \Employes
     *
     * @ORM\ManyToOne(targetEntity="Employes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employe_id", referencedColumnName="id")
     * })
     */
    private $employe;



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
     * @return Lettrees
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
     * @return Lettrees
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
     * @return Lettrees
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
     * @return Lettrees
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
     * Set employe
     *
     * @param \AppBundle\Entity\Employes $employe
     *
     * @return Lettrees
     */
    public function setEmploye(\AppBundle\Entity\Employes $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \AppBundle\Entity\Employes
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
