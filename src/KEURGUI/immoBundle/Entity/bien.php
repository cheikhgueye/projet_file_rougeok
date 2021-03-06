<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bien.
 *
 * @ORM\Table(name="biens")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\bienRepository")
 */
class bien
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\typebien")
     */
    private $type;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\localite")
     */
    private $localite;
    /**
     * @ORM\ManyToMany(targetEntity="KEURGUI\immoBundle\Entity\image")
     */
    private $image;

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
     * Set nom.
     *
     * @param string $nom
     *
     * @return bien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix.
     *
     * @param string $prix
     *
     * @return bien
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
     * Set etat.
     *
     * @param bool $etat
     *
     * @return bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set type.
     *
     * @param \KEURGUI\immoBundle\Entity\TypeBien $type
     *
     * @return bien
     */
    public function setType(\KEURGUI\immoBundle\Entity\TypeBien $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return \KEURGUI\immoBundle\Entity\TypeBien
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set localite.
     *
     * @param \KEURGUI\immoBundle\Entity\localite $localite
     *
     * @return bien
     */
    public function setLocalite(\KEURGUI\immoBundle\Entity\localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite.
     *
     * @return \KEURGUI\immoBundle\Entity\localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set localites.
     *
     * @param \KEURGUI\immoBundle\Entity\localite $localites
     *
     * @return bien
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
     * Constructor.
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image.
     *
     * @param \KEURGUI\immoBundle\Entity\image $image
     *
     * @return bien
     */
    public function addImage(\KEURGUI\immoBundle\Entity\image $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image.
     *
     * @param \KEURGUI\immoBundle\Entity\image $image
     */
    public function removeImage(\KEURGUI\immoBundle\Entity\image $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    public function __toString()
    {
        return $this->image;
    }
}
