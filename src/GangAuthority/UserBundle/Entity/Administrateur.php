<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 */
class Administrateur implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoAdmin", type="string", length=25, nullable=false)
     */
    private $pseudoadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="emailAdmin", type="string", length=25, nullable=false)
     */
    private $emailadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpAdmin", type="string", length=32, nullable=false)
     */
    private $mdpadmin;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;



    /**
     * Get idadmin
     *
     * @return integer 
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * Set pseudoadmin
     *
     * @param string $pseudoadmin
     * @return Administrateur
     */
    public function setPseudoadmin($pseudoadmin)
    {
        $this->pseudoadmin = $pseudoadmin;

        return $this;
    }

    /**
     * Get pseudoadmin
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->pseudoadmin;
    }

    /**
     * Set emailadmin
     *
     * @param string $emailadmin
     * @return Administrateur
     */
    public function setEmailadmin($emailadmin)
    {
        $this->emailadmin = $emailadmin;

        return $this;
    }

    /**
     * Get emailadmin
     *
     * @return string 
     */
    public function getEmailadmin()
    {
        return $this->emailadmin;
    }

    /**
     * Set mdpadmin
     *
     * @param string $mdpadmin
     * @return Administrateur
     */
    public function setMdpadmin($mdpadmin)
    {
        $this->mdpadmin = $mdpadmin;

        return $this;
    }

    /**
     * Get mdpadmin
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->mdpadmin;
    }
    
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }
    
     /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
}
