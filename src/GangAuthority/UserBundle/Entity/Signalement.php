<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalement
 *
 * @ORM\Table(name="signalement", indexes={@ORM\Index(name="FK_Signalement_idCompte", columns={"Signalement_idCompte"})})
 * @ORM\Entity
 */
class Signalement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSignalement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsignalement;

    /**
     * @var string
     *
     * @ORM\Column(name="justification", type="text", nullable=false)
     */
    private $justification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSignalement", type="date", nullable=false)
     */
    private $datesignalement;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Signalement_idCompte", referencedColumnName="idCompte")
     * })
     */
    private $signalementcompte;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joueur", inversedBy="concernersignalement")
     * @ORM\JoinTable(name="concerner",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Concerner_idSignalement", referencedColumnName="idSignalement")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Concerner_idCompte", referencedColumnName="idCompte")
     *   }
     * )
     */
    private $concernercompte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->concernercompte = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idsignalement
     *
     * @return integer 
     */
    public function getIdsignalement()
    {
        return $this->idsignalement;
    }

    /**
     * Set justification
     *
     * @param string $justification
     * @return Signalement
     */
    public function setJustification($justification)
    {
        $this->justification = $justification;

        return $this;
    }

    /**
     * Get justification
     *
     * @return string 
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Set datesignalement
     *
     * @param \DateTime $datesignalement
     * @return Signalement
     */
    public function setDatesignalement($datesignalement)
    {
        $this->datesignalement = $datesignalement;

        return $this;
    }

    /**
     * Get datesignalement
     *
     * @return \DateTime 
     */
    public function getDatesignalement()
    {
        return $this->datesignalement;
    }

    /**
     * Set signalementcompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $signalementcompte
     * @return Signalement
     */
    public function setSignalementcompte(\GangAuthority\UserBundle\Entity\Joueur $signalementcompte = null)
    {
        $this->signalementcompte = $signalementcompte;

        return $this;
    }

    /**
     * Get signalementcompte
     *
     * @return \GangAuthority\UserBundle\Entity\Joueur 
     */
    public function getSignalementcompte()
    {
        return $this->signalementcompte;
    }

    /**
     * Add concernercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $concernercompte
     * @return Signalement
     */
    public function addConcernercompte(\GangAuthority\UserBundle\Entity\Joueur $concernercompte)
    {
        $this->concernercompte[] = $concernercompte;

        return $this;
    }

    /**
     * Remove concernercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $concernercompte
     */
    public function removeConcernercompte(\GangAuthority\UserBundle\Entity\Joueur $concernercompte)
    {
        $this->concernercompte->removeElement($concernercompte);
    }

    /**
     * Get concernercompte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcernercompte()
    {
        return $this->concernercompte;
    }
}
