<?php

namespace Resto\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buffet
 *
 * @ORM\Table(name="buffet")
 * @ORM\Entity(repositoryClass="Resto\BackendBundle\Repository\BuffetRepository")
 */
class Buffet
{
    /**
     * @var client
     * @ORM\ManyToMany(targetEntity="Resto\BackendBundle\Entity\Client", cascade={"persist"})
     */
    private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlace", type="integer")
     */
    private $nbPlace;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="book", type="boolean", options={"default":false}))
     */
    private $book;


    /**
     * @var boolean
     *
     * @ORM\Column(name="busy", type="boolean", options={"default":false}))
     */
    private $busy;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Buffet
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return Buffet
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Buffet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add client
     *
     * @param \Resto\BackendBundle\Entity\Client $client
     *
     * @return Buffet
     */
    public function addClient(\Resto\BackendBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \Resto\BackendBundle\Entity\Client $client
     */
    public function removeClient(\Resto\BackendBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set book
     *
     * @param boolean $book
     *
     * @return Buffet
     */
    public function setBook($book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return boolean
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set busy
     *
     * @param boolean $busy
     *
     * @return Buffet
     */
    public function setBusy($busy)
    {
        $this->busy = $busy;

        return $this;
    }

    /**
     * Get busy
     *
     * @return boolean
     */
    public function getBusy()
    {
        return $this->busy;
    }
}
