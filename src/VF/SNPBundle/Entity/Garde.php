<?php

namespace VF\SNPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garde
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\SNPBundle\Entity\GardeRepository")
 */
class Garde
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
     * @ORM\Column(name="special", type="string", length=25)
     */
    private $special;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ferie", type="boolean")
     */
    private $ferie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", length=12)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=20)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="haut", type="string", length=50)
     */
    private $haut;

    /**
     * @var string
     *
     * @ORM\Column(name="bas", type="string", length=50)
     */
    private $bas;


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
     * Set special
     *
     * @param string $special
     *
     * @return Garde
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set ferie
     *
     * @param boolean $ferie
     *
     * @return Garde
     */
    public function setFerie($ferie)
    {
        $this->ferie = $ferie;

        return $this;
    }

    /**
     * Get ferie
     *
     * @return boolean
     */
    public function getFerie()
    {
        return $this->ferie;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Garde
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set jour
     *
     * @param string $jour
     *
     * @return Garde
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set haut
     *
     * @param string $haut
     *
     * @return Garde
     */
    public function setHaut($haut)
    {
        $this->haut = $haut;

        return $this;
    }

    /**
     * Get haut
     *
     * @return string
     */
    public function getHaut()
    {
        return $this->haut;
    }

    /**
     * Set bas
     *
     * @param string $bas
     *
     * @return Garde
     */
    public function setBas($bas)
    {
        $this->bas = $bas;

        return $this;
    }

    /**
     * Get bas
     *
     * @return string
     */
    public function getBas()
    {
        return $this->bas;
    }
}

