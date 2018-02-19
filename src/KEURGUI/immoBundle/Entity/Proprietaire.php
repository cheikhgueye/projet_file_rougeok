<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire.
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
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
     * @ORM\Column(name="numpiece", type="string", length=50, unique=true)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcomplet", type="string", length=50)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="comptebancaire", type="string", length=50, nullable=true)
     */
    private $comptebancaire;
    /**
     * @var int
     *
     * @ORM\Column(name="prixPropritaire", type="integer")
     */
    private $prixPropritaire;

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
     * Set numpiece.
     *
     * @param string $numpiece
     *
     * @return Proprietaire
     */
    public function setNumpiece($numpiece)
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    /**
     * Get numpiece.
     *
     * @return string
     */
    public function getNumpiece()
    {
        return $this->numpiece;
    }

    /**
     * Set nomcomplet.
     *
     * @param string $nomcomplet
     *
     * @return Proprietaire
     */
    public function setNomcomplet($nomcomplet)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get nomcomplet.
     *
     * @return string
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Proprietaire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel.
     *
     * @param string $tel
     *
     * @return Proprietaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set comptebancaire.
     *
     * @param string $comptebancaire
     *
     * @return Proprietaire
     */
    public function setComptebancaire($comptebancaire)
    {
        $this->comptebancaire = $comptebancaire;

        return $this;
    }

    /**
     * Get comptebancaire.
     *
     * @return string
     */
    public function getComptebancaire()
    {
        return $this->comptebancaire;
    }

    /**
     * Get prixPropritaire.
     *
     * @return int
     */
    public function getPrixPropritaire()
    {
        return $this->prixPropritaire;
    }

    /**
     * Set prixPropritaire.
     *
     * @param int $prixPropritaire
     *
     * @return Bien
     */
    public function setPrixPropritaire($prixPropritaire)
    {
        $this->prixPropritaire = $prixPropritaire;

        return $this;
    }
}
