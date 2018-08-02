<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employes
 *
 * @ORM\Table(name="employes")
 * @ORM\Entity
 */
class Employes
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
     * @ORM\Column(name="civilite", type="string", length=1, nullable=false)
     */
    private $civilite = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
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
     * @ORM\Column(name="tel", type="string", length=10, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mob", type="string", length=15, nullable=true)
     */
    private $mob;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=120, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=60, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="secu", type="string", length=15, nullable=true)
     */
    private $secu;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=1, nullable=false)
     */
    private $situation = 'C';

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=60, nullable=false)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=1, nullable=false)
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrive", type="date", nullable=true)
     */
    private $arrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="depart", type="date", nullable=true)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="string", length=1, nullable=false)
     */
    private $contrat;

    /**
     * @var string
     *
     * @ORM\Column(name="qualif", type="string", length=5, nullable=true)
     */
    private $qualif;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="lastsalaire", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lastsalaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="augmentation", type="date", nullable=true)
     */
    private $augmentation;

    /**
     * @var string
     *
     * @ORM\Column(name="telboulot", type="string", length=10, nullable=true)
     */
    private $telboulot;



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
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Employes
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
     * @return Employes
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
     * @return Employes
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
     * @return Employes
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
     * Set mob
     *
     * @param string $mob
     *
     * @return Employes
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
     * Set rue
     *
     * @param string $rue
     *
     * @return Employes
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
     * @return Employes
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
     * @return Employes
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
     * Set email
     *
     * @param string $email
     *
     * @return Employes
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

    /**
     * Set secu
     *
     * @param string $secu
     *
     * @return Employes
     */
    public function setSecu($secu)
    {
        $this->secu = $secu;

        return $this;
    }

    /**
     * Get secu
     *
     * @return string
     */
    public function getSecu()
    {
        return $this->secu;
    }

    /**
     * Set situation
     *
     * @param string $situation
     *
     * @return Employes
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Employes
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Employes
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set arrive
     *
     * @param \DateTime $arrive
     *
     * @return Employes
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;

        return $this;
    }

    /**
     * Get arrive
     *
     * @return \DateTime
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * Set depart
     *
     * @param \DateTime $depart
     *
     * @return Employes
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return \DateTime
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     *
     * @return Employes
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set qualif
     *
     * @param string $qualif
     *
     * @return Employes
     */
    public function setQualif($qualif)
    {
        $this->qualif = $qualif;

        return $this;
    }

    /**
     * Get qualif
     *
     * @return string
     */
    public function getQualif()
    {
        return $this->qualif;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     *
     * @return Employes
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set lastsalaire
     *
     * @param string $lastsalaire
     *
     * @return Employes
     */
    public function setLastsalaire($lastsalaire)
    {
        $this->lastsalaire = $lastsalaire;

        return $this;
    }

    /**
     * Get lastsalaire
     *
     * @return string
     */
    public function getLastsalaire()
    {
        return $this->lastsalaire;
    }

    /**
     * Set augmentation
     *
     * @param \DateTime $augmentation
     *
     * @return Employes
     */
    public function setAugmentation($augmentation)
    {
        $this->augmentation = $augmentation;

        return $this;
    }

    /**
     * Get augmentation
     *
     * @return \DateTime
     */
    public function getAugmentation()
    {
        return $this->augmentation;
    }

    /**
     * Set telboulot
     *
     * @param string $telboulot
     *
     * @return Employes
     */
    public function setTelboulot($telboulot)
    {
        $this->telboulot = $telboulot;

        return $this;
    }

    /**
     * Get telboulot
     *
     * @return string
     */
    public function getTelboulot()
    {
        return $this->telboulot;
    }
}
