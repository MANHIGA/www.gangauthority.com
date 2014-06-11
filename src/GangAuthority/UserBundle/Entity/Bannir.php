<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bannir
 *
 * @ORM\Table(name="bannir", indexes={@ORM\Index(name="FK_bannir_idCompte", columns={"Bannir_idCompte"}), @ORM\Index(name="FK_bannir_idSignalement", columns={"Bannir_idSignalement"}), @ORM\Index(name="IDX_C328F7EB1CCFFFFE", columns={"Bannir_idAdmin"})})
 * @ORM\Entity
 */
class Bannir
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateBannissement", type="date", nullable=false)
     */
    private $datebannissement;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeBannissement", type="integer", nullable=false)
     */
    private $dureebannissement;

    /**
     * @var \Signalement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Signalement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Bannir_idSignalement", referencedColumnName="idSignalement")
     * })
     */
    private $bannirsignalement;

    /**
     * @var \Administrateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Bannir_idAdmin", referencedColumnName="idAdmin")
     * })
     */
    private $banniradmin;

    /**
     * @var \Joueur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Bannir_idCompte", referencedColumnName="idCompte")
     * })
     */
    private $bannircompte;



    /**
     * Set datebannissement
     *
     * @param \DateTime $datebannissement
     * @return Bannir
     */
    public function setDatebannissement($datebannissement)
    {
        $this->datebannissement = $datebannissement;

        return $this;
    }

    /**
     * Get datebannissement
     *
     * @return \DateTime 
     */
    public function getDatebannissement()
    {
        return $this->datebannissement;
    }

    /**
     * Set dureebannissement
     *
     * @param integer $dureebannissement
     * @return Bannir
     */
    public function setDureebannissement($dureebannissement)
    {
        $this->dureebannissement = $dureebannissement;

        return $this;
    }

    /**
     * Get dureebannissement
     *
     * @return integer 
     */
    public function getDureebannissement()
    {
        return $this->dureebannissement;
    }

    /**
     * Set bannirsignalement
     *
     * @param \GangAuthority\UserBundle\Entity\Signalement $bannirsignalement
     * @return Bannir
     */
    public function setBannirsignalement(\GangAuthority\UserBundle\Entity\Signalement $bannirsignalement)
    {
        $this->bannirsignalement = $bannirsignalement;

        return $this;
    }

    /**
     * Get bannirsignalement
     *
     * @return \GangAuthority\UserBundle\Entity\Signalement 
     */
    public function getBannirsignalement()
    {
        return $this->bannirsignalement;
    }

    /**
     * Set banniradmin
     *
     * @param \GangAuthority\UserBundle\Entity\Administrateur $banniradmin
     * @return Bannir
     */
    public function setBanniradmin(\GangAuthority\UserBundle\Entity\Administrateur $banniradmin)
    {
        $this->banniradmin = $banniradmin;

        return $this;
    }

    /**
     * Get banniradmin
     *
     * @return \GangAuthority\UserBundle\Entity\Administrateur 
     */
    public function getBanniradmin()
    {
        return $this->banniradmin;
    }

    /**
     * Set bannircompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $bannircompte
     * @return Bannir
     */
    public function setBannircompte(\GangAuthority\UserBundle\Entity\Joueur $bannircompte)
    {
        $this->bannircompte = $bannircompte;

        return $this;
    }

    /**
     * Get bannircompte
     *
     * @return \GangAuthority\UserBundle\Entity\Joueur 
     */
    public function getBannircompte()
    {
        return $this->bannircompte;
    }
}
