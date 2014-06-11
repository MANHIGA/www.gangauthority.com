<?php

namespace GangAuthority\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typesbire
 *
 * @ORM\Table(name="typesbire", indexes={@ORM\Index(name="FK_TypeSbire_idTypeBatiment", columns={"TypeSbire_idTypeBatiment"})})
 * @ORM\Entity
 */
class Typesbire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTypeSbire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypesbire;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeSbire", type="string", length=25, nullable=false)
     */
    private $libelletypesbire;

    /**
     * @var string
     *
     * @ORM\Column(name="cout", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $cout;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsApparition", type="integer", nullable=false)
     */
    private $tempsapparition;

    /**
     * @var \Typebatiment
     *
     * @ORM\ManyToOne(targetEntity="Typebatiment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeSbire_idTypeBatiment", referencedColumnName="idTypeBatiment")
     * })
     */
    private $typesbiretypebatiment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Joueur", mappedBy="entrainertypesbire")
     */
    private $entrainercompte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entrainercompte = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idtypesbire
     *
     * @return integer 
     */
    public function getIdtypesbire()
    {
        return $this->idtypesbire;
    }

    /**
     * Set libelletypesbire
     *
     * @param string $libelletypesbire
     * @return Typesbire
     */
    public function setLibelletypesbire($libelletypesbire)
    {
        $this->libelletypesbire = $libelletypesbire;

        return $this;
    }

    /**
     * Get libelletypesbire
     *
     * @return string 
     */
    public function getLibelletypesbire()
    {
        return $this->libelletypesbire;
    }

    /**
     * Set cout
     *
     * @param string $cout
     * @return Typesbire
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set tempsapparition
     *
     * @param integer $tempsapparition
     * @return Typesbire
     */
    public function setTempsapparition($tempsapparition)
    {
        $this->tempsapparition = $tempsapparition;

        return $this;
    }

    /**
     * Get tempsapparition
     *
     * @return integer 
     */
    public function getTempsapparition()
    {
        return $this->tempsapparition;
    }

    /**
     * Set typesbiretypebatiment
     *
     * @param \GangAuthority\UserBundle\Entity\Typebatiment $typesbiretypebatiment
     * @return Typesbire
     */
    public function setTypesbiretypebatiment(\GangAuthority\UserBundle\Entity\Typebatiment $typesbiretypebatiment = null)
    {
        $this->typesbiretypebatiment = $typesbiretypebatiment;

        return $this;
    }

    /**
     * Get typesbiretypebatiment
     *
     * @return \GangAuthority\UserBundle\Entity\Typebatiment 
     */
    public function getTypesbiretypebatiment()
    {
        return $this->typesbiretypebatiment;
    }

    /**
     * Add entrainercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $entrainercompte
     * @return Typesbire
     */
    public function addEntrainercompte(\GangAuthority\UserBundle\Entity\Joueur $entrainercompte)
    {
        $this->entrainercompte[] = $entrainercompte;

        return $this;
    }

    /**
     * Remove entrainercompte
     *
     * @param \GangAuthority\UserBundle\Entity\Joueur $entrainercompte
     */
    public function removeEntrainercompte(\GangAuthority\UserBundle\Entity\Joueur $entrainercompte)
    {
        $this->entrainercompte->removeElement($entrainercompte);
    }

    /**
     * Get entrainercompte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntrainercompte()
    {
        return $this->entrainercompte;
    }
}
