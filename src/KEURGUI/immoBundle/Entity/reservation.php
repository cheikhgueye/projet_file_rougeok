<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation.
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\reservationRepository")
 */
class reservation
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
     * @ORM\Column(name="date", type="string", length=50)
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\bien")
     */
    private $bien;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\client")
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

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
     * Set date.
     *
     * @param string $date
     *
     * @return reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat.
     *
     * @param string $etat
     *
     * @return reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien.
     *
     * @param \KEURGUI\immoBundle\Entity\Bien $bien
     *
     * @return reservation
     */
    public function setBien(\KEURGUI\immoBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \KEURGUI\immoBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set client.
     *
     * @param \KEURGUI\immoBundle\Entity\client $client
     *
     * @return reservation
     */
    public function setClient(\KEURGUI\immoBundle\Entity\client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return \KEURGUI\immoBundle\Entity\client
     */
    public function getClient()
    {
        return $this->client;
    }
}
