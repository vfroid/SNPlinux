<?php

namespace VF\SNPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\SNPBundle\Entity\MembreRepository")
 */
class Membre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=60)
     */
    private $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=60)
     */
    private $rue;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="smallint")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=60)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="telpublic", type="string", length=20)
     */
    private $telpublic;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="telsecret", type="string", length=20)
     */
    private $telsecret;

    /**
     * @var string
     *
     * @ORM\Column(name="portable", type="string", length=20)
     */
    private $portable;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=25)
     */
    private $qualite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="garde", type="boolean")
     */
    private $garde;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presidenthonneur", type="boolean")
     */
    private $presidenthonneur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="RSNe", type="boolean")
     */
    private $rSNe;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlanGarde", type="string", length=30)
     */
    private $nomPlanGarde;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Membre
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
     * @return Membre
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
     * Set courriel
     *
     * @param string $courriel
     *
     * @return Membre
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Membre
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
     * @param integer $cp
     *
     * @return Membre
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localite
     *
     * @param string $localite
     *
     * @return Membre
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set telpublic
     *
     * @param string $telpublic
     *
     * @return Membre
     */
    public function setTelpublic($telpublic)
    {
        $this->telpublic = $telpublic;

        return $this;
    }

    /**
     * Get telpublic
     *
     * @return string
     */
    public function getTelpublic()
    {
        return $this->telpublic;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Membre
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
     * Set telsecret
     *
     * @param string $telsecret
     *
     * @return Membre
     */
    public function setTelsecret($telsecret)
    {
        $this->telsecret = $telsecret;

        return $this;
    }

    /**
     * Get telsecret
     *
     * @return string
     */
    public function getTelsecret()
    {
        return $this->telsecret;
    }

    /**
     * Set portable
     *
     * @param string $portable
     *
     * @return Membre
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;

        return $this;
    }

    /**
     * Get portable
     *
     * @return string
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set qualite
     *
     * @param string $qualite
     *
     * @return Membre
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return string
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set garde
     *
     * @param boolean $garde
     *
     * @return Membre
     */
    public function setGarde($garde)
    {
        $this->garde = $garde;

        return $this;
    }

    /**
     * Get garde
     *
     * @return boolean
     */
    public function getGarde()
    {
        return $this->garde;
    }

    /**
     * Set presidenthonneur
     *
     * @param boolean $presidenthonneur
     *
     * @return Membre
     */
    public function setPresidenthonneur($presidenthonneur)
    {
        $this->presidenthonneur = $presidenthonneur;

        return $this;
    }

    /**
     * Get presidenthonneur
     *
     * @return boolean
     */
    public function getPresidenthonneur()
    {
        return $this->presidenthonneur;
    }

    /**
     * Set rSNe
     *
     * @param boolean $rSNe
     *
     * @return Membre
     */
    public function setRSNe($rSNe)
    {
        $this->rSNe = $rSNe;

        return $this;
    }

    /**
     * Get rSNe
     *
     * @return boolean
     */
    public function getRSNe()
    {
        return $this->rSNe;
    }

    /**
     * Set nomPlanGarde
     *
     * @param string $nomPlanGarde
     *
     * @return Membre
     */
    public function setNomPlanGarde($nomPlanGarde)
    {
        $this->nomPlanGarde = $nomPlanGarde;

        return $this;
    }

    /**
     * Get nomPlanGarde
     *
     * @return string
     */
    public function getNomPlanGarde()
    {
        return $this->nomPlanGarde;
    }
}

