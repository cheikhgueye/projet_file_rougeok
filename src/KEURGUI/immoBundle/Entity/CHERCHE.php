<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CHERCHE.
 *
 * @ORM\Table(name="c_h_e_r_c_h_e")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\CHERCHERepository")
 */
class CHERCHE
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=50)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=50 ,nullable=true)
     */
    private $prix;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\localite")
     */
    private $localites;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\typebien")
     */
    private $types;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return CHERCHE
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set localite.
     *
     * @param string $localite
     *
     * @return CHERCHE
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite.
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set prix.
     *
     * @param string $prix
     *
     * @return CHERCHE
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set localites.
     *
     * @param \KEURGUI\immoBundle\Entity\localite $localites
     *
     * @return CHERCHE
     */
    public function setLocalites(\KEURGUI\immoBundle\Entity\localite $localites = null)
    {
        $this->localites = $localites;

        return $this;
    }

    /**
     * Get localites.
     *
     * @return \KEURGUI\immoBundle\Entity\localite
     */
    public function getLocalites()
    {
        return $this->localites;
    }

    /**
     * Set types.
     *
     * @param \KEURGUI\immoBundle\Entity\TypeBien $types
     *
     * @return CHERCHE
     */
    public function setTypes(\KEURGUI\immoBundle\Entity\TypeBien $types = null)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * Get types.
     *
     * @return \KEURGUI\immoBundle\Entity\TypeBien
     */
    public function getTypes()
    {
        return $this->types;
    }
}
