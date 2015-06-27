<?php

namespace VF\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VF\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


     /**
    * @ORM\OneToOne(targetEntity="VF\SNPBundle\Entity\Membre")
	* @ORM\JoinColumn(nullable=false)
  */
  private $membre;

    /**
     * Set idmembre
     *
     * @param integer $idmembre
     *
     * @return User
     */
    public function setMembre($id)
    {
        $this->membre = $id;

        return $this;
    }

    /**
     * Get idmembre
     *
     * @return integer
     */
    public function getMembre()
    {
        return $this->membre;
    }
}
