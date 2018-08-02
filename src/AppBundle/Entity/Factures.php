<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factures
 *
 * @ORM\Table(name="factures")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturesRepository")
 */
class Factures
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
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=200, nullable=false)
     */
    private $chemin;



    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=200, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="date", nullable=true)
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
     * @ORM\Column(name="tva", type="string", length=1, nullable=false)
     */
    private $tva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paye", type="date", nullable=true)
     */
    private $datePaye;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_chantier", type="string", length=200, nullable=false)
     */
    private $adrChantier;

    /**
     * @var integer
     *
     * @ORM\Column(name="relance", type="integer", nullable=false)
     */
    private $relance = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="devi_id", type="integer", nullable=false)
     */
    private $deviId = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $clientId;

    // In despite of $client
    // Supprimer @var \Clients

    //Tester ensuite avec inversedBy


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
     * @return Factures
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Factures
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
     * @return Factures
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
     * @return Factures
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
     * @return Factures
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
     * @return Factures
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
     * @return Factures
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
     * Set datePaye
     *
     * @param \DateTime $datePaye
     *
     * @return Factures
     */
    public function setDatePaye($datePaye)
    {
        $this->datePaye = $datePaye;

        return $this;
    }

    /**
     * Get datePaye
     *
     * @return \DateTime
     */
    public function getDatePaye()
    {
        return $this->datePaye;
    }

    /**
     * Set adrChantier
     *
     * @param string $adrChantier
     *
     * @return Factures
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
     * Set relance
     *
     * @param integer $relance
     *
     * @return Factures
     */
    public function setRelance($relance)
    {
        $this->relance = $relance;

        return $this;
    }

    /**
     * Get relance
     *
     * @return integer
     */
    public function getRelance()
    {
        return $this->relance;
    }

    /**
     * Set deviId
     *
     * @param integer $deviId
     *
     * @return Factures
     */
    public function setDeviId($deviId)
    {
        $this->deviId = $deviId;

        return $this;
    }

    /**
     * Get deviId
     *
     * @return integer
     */
    public function getDeviId()
    {
        return $this->deviId;
    }

//    /**
//     * Set client
//     *
//     * @param \AppBundle\Entity\Clients $client
//     *
//     * @return Factures
//     */
//    public function setClient(\AppBundle\Entity\Clients $client = null)
//    {
//        $this->client = $client;
//
//        return $this;
//    }
//
//    /**
//     * Get client
//     *
//     * @return \AppBundle\Entity\Clients
//     */
//    public function getClient()
//    {
//        return $this->client;
//    }


    /**
     * Set clientId
     *
     * @param $clientId
     * @return Factures
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;

      return $this;
    }

    /**
     * Get clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->ClientId;

    }

    public function __construct()
    {





    }


}

