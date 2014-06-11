<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typebatiment
 *
 * @ORM\Table(name="typebatiment", indexes={@ORM\Index(name="FK_TypeBatiment_idTypeSbire", columns={"TypeBatiment_idTypeSbire"})})
 * @ORM\Entity
 */
class Typebatiment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeBatiment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypebatiment;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeBatiment", type="string", length=25, nullable=false)
     */
    private $libelletypebatiment;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsCreationBatiment", type="integer", nullable=false)
     */
    private $tempscreationbatiment;

    /**
     * @var \Typesbire
     *
     * @ORM\ManyToOne(targetEntity="Typesbire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeBatiment_idTypeSbire", referencedColumnName="idTypeSbire")
     * })
     */
    private $typebatimenttypesbire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joueur", mappedBy="construiretypebatiment")
     */
    private $construirecompte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->construirecompte = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idtypebatiment
     *
     * @return integer 
     */
    public function getIdtypebatiment()
    {
        return $this->idtypebatiment;
    }

    /**
     * Set libelletypebatiment
     *
     * @param string $libelletypebatiment
     * @return Typebatiment
     */
    public function setLibelletypebatiment($libelletypebatiment)
    {
        $this->libelletypebatiment = $libelletypebatiment;

        return $this;
    }

    /**
     * Get libelletypebatiment
     *
     * @return string 
     */
    public function getLibelletypebatiment()
    {
        return $this->libelletypebatiment;
    }

    /**
     * Set tempscreationbatiment
     *
     * @param integer $tempscreationbatiment
     * @return Typebatiment
     */
    public function setTempscreationbatiment($tempscreationbatiment)
    {
        $this->tempscreationbatiment = $tempscreationbatiment;

        return $this;
    }

    /**
     * Get tempscreationbatiment
     *
     * @return integer 
     */
    public function getTempscreationbatiment()
    {
        return $this->tempscreationbatiment;
    }

    /**
     * Set typebatimenttypesbire
     *
     * @param \GangAuthority\UserBundle\Entity\Typesbire $typebatimenttypesbire
     * @return Typebatiment
     */
    public function setTypebatimenttypesbire(\GangAuthority\UserBundle\Entity\Typesbire $typebatimenttypesbire = null)
    {
        $this->typebatimenttypesbire = $typebatimenttypesbire;

        return $this;
    }

    /**
     * Get typebatimenttypesbire
     *
     * @return \GangAuthority\UserBundle\Entity\Typesbire 
     */
    public function getTypebatimenttypesbire()
    {
        return $this->typebatimenttypesbire;
    }

    /**
     * Add construirecompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $construirecompte
     * @return Typebatiment
     */
    public function addConstruirecompte(\GangAuthority\UserBundle\Entity\Joueur $construirecompte)
    {
        $this->construirecompte[] = $construirecompte;

        return $this;
    }

    /**
     * Remove construirecompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $construirecompte
     */
    public function removeConstruirecompte(\GangAuthority\UserBundle\Entity\Joueur $construirecompte)
    {
        $this->construirecompte->removeElement($construirecompte);
    }

    /**
     * Get construirecompte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConstruirecompte()
    {
        return $this->construirecompte;
    }
}
