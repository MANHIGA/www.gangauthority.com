<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", uniqueConstraints={@ORM\UniqueConstraint(name="pseudo", columns={"pseudo", "nomGang"})})
 * @ORM\Entity
 */
class Joueur implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCompte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=25, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=32, nullable=false)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointAutorite", type="integer", nullable=false)
     */
    private $pointautorite;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbMorts", type="integer", nullable=false)
     */
    private $nbmorts;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbTues", type="integer", nullable=false)
     */
    private $nbtues;

    /**
     * @var string
     *
     * @ORM\Column(name="argent", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $argent;

    /**
     * @var string
     *
     * @ORM\Column(name="nomGang", type="string", length=25, nullable=false)
     */
    private $nomgang;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joueur", mappedBy="combattrecompteDefenseur")
     */
    private $combattrecompteAttaquant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Signalement", mappedBy="concernercompte")
     */
    private $concernersignalement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Typebatiment", mappedBy="construirecompte")
     */
    private $construiretypebatiment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Typesbire", mappedBy="entrainercompte")
     */
    private $entrainertypesbire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mission", mappedBy="realisercompte")
     */
    private $realisermission;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->combattrecompteAttaquant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->concernersignalement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->construiretypebatiment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->entrainertypesbire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->realisermission = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isActive = true;
        $this->salt = "";
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
        return array('ROLE_USER');
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
    
    /**
     * Get idcompte
     *
     * @return integer 
     */
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Joueur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->pseudo;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Joueur
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
     * Set mdp
     *
     * @param string $mdp
     * @return Joueur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->mdp;
    }
    public function getMdp()
    {
        return $this->mdp;
    }


    /**
     * Set pointautorite
     *
     * @param integer $pointautorite
     * @return Joueur
     */
    public function setPointautorite($pointautorite)
    {
        $this->pointautorite = $pointautorite;

        return $this;
    }

    /**
     * Get pointautorite
     *
     * @return integer 
     */
    public function getPointautorite()
    {
        return $this->pointautorite;
    }

    /**
     * Set nbmorts
     *
     * @param integer $nbmorts
     * @return Joueur
     */
    public function setNbmorts($nbmorts)
    {
        $this->nbmorts = $nbmorts;

        return $this;
    }

    /**
     * Get nbmorts
     *
     * @return integer 
     */
    public function getNbmorts()
    {
        return $this->nbmorts;
    }

    /**
     * Set nbtues
     *
     * @param integer $nbtues
     * @return Joueur
     */
    public function setNbtues($nbtues)
    {
        $this->nbtues = $nbtues;

        return $this;
    }

    /**
     * Get nbtues
     *
     * @return integer 
     */
    public function getNbtues()
    {
        return $this->nbtues;
    }

    /**
     * Set argent
     *
     * @param string $argent
     * @return Joueur
     */
    public function setArgent($argent)
    {
        $this->argent = $argent;

        return $this;
    }

    /**
     * Get argent
     *
     * @return string 
     */
    public function getArgent()
    {
        return $this->argent;
    }

    /**
     * Set nomgang
     *
     * @param string $nomgang
     * @return Joueur
     */
    public function setNomgang($nomgang)
    {
        $this->nomgang = $nomgang;

        return $this;
    }

    /**
     * Get nomgang
     *
     * @return string 
     */
    public function getNomgang()
    {
        return $this->nomgang;
    }

    /**
     * Add combattrecompteAttaquant
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $combattrecompteAttaquant
     * @return Joueur
     */
    public function addCombattrecompteAttaquant(\GangAuthority\UserBundle\Entity\Joueur $combattrecompteAttaquant)
    {
        $this->combattrecompteAttaquant[] = $combattrecompteAttaquant;

        return $this;
    }

    /**
     * Remove combattrecompteAttaquant
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $combattrecompteAttaquant
     */
    public function removeCombattrecompteAttaquant(\GangAuthority\UserBundle\Entity\Joueur $combattrecompteAttaquant)
    {
        $this->combattrecompteAttaquant->removeElement($combattrecompteAttaquant);
    }

    /**
     * Get combattrecompteAttaquant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCombattrecompteAttaquant()
    {
        return $this->combattrecompteAttaquant;
    }

    /**
     * Add concernersignalement
     *
     * @param \GangAuthority\UserBundle\Entity\Signalement $concernersignalement
     * @return Joueur
     */
    public function addConcernersignalement(\GangAuthority\UserBundle\Entity\Signalement $concernersignalement)
    {
        $this->concernersignalement[] = $concernersignalement;

        return $this;
    }

    /**
     * Remove concernersignalement
     *
     * @param \GangAuthority\UserBundle\Entity\Signalement $concernersignalement
     */
    public function removeConcernersignalement(\GangAuthority\UserBundle\Entity\Signalement $concernersignalement)
    {
        $this->concernersignalement->removeElement($concernersignalement);
    }

    /**
     * Get concernersignalement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcernersignalement()
    {
        return $this->concernersignalement;
    }

    /**
     * Add construiretypebatiment
     *
     * @param \GangAuthority\UserBundle\Entity\Typebatiment $construiretypebatiment
     * @return Joueur
     */
    public function addConstruiretypebatiment(\GangAuthority\UserBundle\Entity\Typebatiment $construiretypebatiment)
    {
        $this->construiretypebatiment[] = $construiretypebatiment;

        return $this;
    }

    /**
     * Remove construiretypebatiment
     *
     * @param \GangAuthority\UserBundle\Entity\Typebatiment $construiretypebatiment
     */
    public function removeConstruiretypebatiment(\GangAuthority\UserBundle\Entity\Typebatiment $construiretypebatiment)
    {
        $this->construiretypebatiment->removeElement($construiretypebatiment);
    }

    /**
     * Get construiretypebatiment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConstruiretypebatiment()
    {
        return $this->construiretypebatiment;
    }

    /**
     * Add entrainertypesbire
     *
     * @param \GangAuthority\UserBundle\Entity\Typesbire $entrainertypesbire
     * @return Joueur
     */
    public function addEntrainertypesbire(\GangAuthority\UserBundle\Entity\Typesbire $entrainertypesbire)
    {
        $this->entrainertypesbire[] = $entrainertypesbire;

        return $this;
    }

    /**
     * Remove entrainertypesbire
     *
     * @param \GangAuthority\UserBundle\Entity\Typesbire $entrainertypesbire
     */
    public function removeEntrainertypesbire(\GangAuthority\UserBundle\Entity\Typesbire $entrainertypesbire)
    {
        $this->entrainertypesbire->removeElement($entrainertypesbire);
    }

    /**
     * Get entrainertypesbire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntrainertypesbire()
    {
        return $this->entrainertypesbire;
    }

    /**
     * Add realisermission
     *
     * @param \GangAuthority\UserBundle\Entity\Mission $realisermission
     * @return Joueur
     */
    public function addRealisermission(\GangAuthority\UserBundle\Entity\Mission $realisermission)
    {
        $this->realisermission[] = $realisermission;

        return $this;
    }

    /**
     * Remove realisermission
     *
     * @param \GangAuthority\UserBundle\Entity\Mission $realisermission
     */
    public function removeRealisermission(\GangAuthority\UserBundle\Entity\Mission $realisermission)
    {
        $this->realisermission->removeElement($realisermission);
    }

    /**
     * Get realisermission
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisermission()
    {
        return $this->realisermission;
    }
}
