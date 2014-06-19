<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission", indexes={@ORM\Index(name="FK_Mission_idTypeSbire", columns={"Mission_idTypeSbire"})})
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmission;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeMission", type="integer", nullable=false)
     */
    private $dureemission;

    /**
     * @var string
     *
     * @ORM\Column(name="recompenseArgent", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $recompenseargent;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=25, nullable=false)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="recompensePointAutorite", type="integer", nullable=false)
     */
    private $recompensepointautorite;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsReapparitionBase", type="integer", nullable=false)
     */
    private $tempsreapparitionbase;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbMiniSbiresRequis", type="integer", nullable=false)
     */
    private $nbminisbiresrequis;

    /**
     * @var \Typesbire
     *
     * @ORM\ManyToOne(targetEntity="Typesbire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Mission_idTypeSbire", referencedColumnName="idTypeSbire")
     * })
     */
    private $missiontypesbire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joueur", mappedBy="realisermission")
     */
    private $realisercompte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->realisercompte = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idmission
     *
     * @return integer 
     */
    public function getIdmission()
    {
        return $this->idmission;
    }

    /**
     * Set dureemission
     *
     * @param \DateTime $dureemission
     * @return Mission
     */
    public function setDureemission($dureemission)
    {
        $this->dureemission = $dureemission;

        return $this;
    }

    /**
     * Get dureemission
     *
     * @return \DateTime 
     */
    public function getDureemission()
    {
        return $this->dureemission;
    }

    /**
     * Set recompenseargent
     *
     * @param string $recompenseargent
     * @return Mission
     */
    public function setRecompenseargent($recompenseargent)
    {
        $this->recompenseargent = $recompenseargent;

        return $this;
    }

    /**
     * Get recompenseargent
     *
     * @return string 
     */
    public function getRecompenseargent()
    {
        return $this->recompenseargent;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     * @return Mission
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string 
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set recompensepointautorite
     *
     * @param integer $recompensepointautorite
     * @return Mission
     */
    public function setRecompensepointautorite($recompensepointautorite)
    {
        $this->recompensepointautorite = $recompensepointautorite;

        return $this;
    }

    /**
     * Get recompensepointautorite
     *
     * @return integer 
     */
    public function getRecompensepointautorite()
    {
        return $this->recompensepointautorite;
    }

    /**
     * Set tempsreapparitionbase
     *
     * @param integer $tempsreapparitionbase
     * @return Mission
     */
    public function setTempsreapparitionbase($tempsreapparitionbase)
    {
        $this->tempsreapparitionbase = $tempsreapparitionbase;

        return $this;
    }

    /**
     * Get tempsreapparitionbase
     *
     * @return integer 
     */
    public function getTempsreapparitionbase()
    {
        return $this->tempsreapparitionbase;
    }

    /**
     * Set nbminisbiresrequis
     *
     * @param integer $nbminisbiresrequis
     * @return Mission
     */
    public function setNbminisbiresrequis($nbminisbiresrequis)
    {
        $this->nbminisbiresrequis = $nbminisbiresrequis;

        return $this;
    }

    /**
     * Get nbminisbiresrequis
     *
     * @return integer 
     */
    public function getNbminisbiresrequis()
    {
        return $this->nbminisbiresrequis;
    }

    /**
     * Set missiontypesbire
     *
     * @param \GangAuthority\UserBundle\Entity\Typesbire $missiontypesbire
     * @return Mission
     */
    public function setMissiontypesbire(\GangAuthority\UserBundle\Entity\Typesbire $missiontypesbire = null)
    {
        $this->missiontypesbire = $missiontypesbire;

        return $this;
    }

    /**
     * Get missiontypesbire
     *
     * @return \GangAuthority\UserBundle\Entity\Typesbire 
     */
    public function getMissiontypesbire()
    {
        return $this->missiontypesbire;
    }

    /**
     * Add realisercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $realisercompte
     * @return Mission
     */
    public function addRealisercompte(\GangAuthority\UserBundle\Entity\Joueur $realisercompte)
    {
        $this->realisercompte[] = $realisercompte;

        return $this;
    }

    /**
     * Remove realisercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $realisercompte
     */
    public function removeRealisercompte(\GangAuthority\UserBundle\Entity\Joueur $realisercompte)
    {
        $this->realisercompte->removeElement($realisercompte);
    }

    /**
     * Get realisercompte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisercompte()
    {
        return $this->realisercompte;
    }
}
