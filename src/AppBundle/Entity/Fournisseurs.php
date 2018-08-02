<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseurs
 *
 * @ORM\Table(name="fournisseurs")
 * @ORM\Entity
 */
class Fournisseurs
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
     * @ORM\Column(name="societe", type="string", length=60, nullable=false)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_soc", type="string", length=15, nullable=true)
     */
    private $telSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_soc", type="string", length=15, nullable=true)
     */
    private $faxSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=120, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=40, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=1, nullable=false)
     */
    private $civilite = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mob", type="string", length=15, nullable=true)
     */
    private $mob;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;



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
     * Set societe
     *
     * @param string $societe
     *
     * @return Fournisseurs
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set telSoc
     *
     * @param string $telSoc
     *
     * @return Fournisseurs
     */
    public function setTelSoc($telSoc)
    {
        $this->telSoc = $telSoc;

        return $this;
    }

    /**
     * Get telSoc
     *
     * @return string
     */
    public function getTelSoc()
    {
        return $this->telSoc;
    }

    /**
     * Set faxSoc
     *
     * @param string $faxSoc
     *
     * @return Fournisseurs
     */
    public function setFaxSoc($faxSoc)
    {
        $this->faxSoc = $faxSoc;

        return $this;
    }

    /**
     * Get faxSoc
     *
     * @return string
     */
    public function getFaxSoc()
    {
        return $this->faxSoc;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Fournisseurs
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Fournisseurs
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Fournisseurs
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Fournisseurs
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Fournisseurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Fournisseurs
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Fournisseurs
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Fournisseurs
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mob
     *
     * @param string $mob
     *
     * @return Fournisseurs
     */
    public function setMob($mob)
    {
        $this->mob = $mob;

        return $this;
    }

    /**
     * Get mob
     *
     * @return string
     */
    public function getMob()
    {
        return $this->mob;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Fournisseurs
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
