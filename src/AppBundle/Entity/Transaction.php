<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 */
class Transaction
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
     * @ORM\Column(name="Date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="IDSourceUser", type="string", length=255, unique=true)
     */
    private $iDSourceUser;

    /**
     * @var string
     *
     * @ORM\Column(name="IDDestUser", type="string", length=255, unique=true)
     */
    private $iDDestUser;


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
     * Set date
     *
     * @param string $date
     *
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set iDSourceUser
     *
     * @param string $iDSourceUser
     *
     * @return Transaction
     */
    public function setIDSourceUser($iDSourceUser)
    {
        $this->iDSourceUser = $iDSourceUser;

        return $this;
    }

    /**
     * Get iDSourceUser
     *
     * @return string
     */
    public function getIDSourceUser()
    {
        return $this->iDSourceUser;
    }

    /**
     * Set iDDestUser
     *
     * @param string $iDDestUser
     *
     * @return Transaction
     */
    public function setIDDestUser($iDDestUser)
    {
        $this->iDDestUser = $iDDestUser;

        return $this;
    }

    /**
     * Get iDDestUser
     *
     * @return string
     */
    public function getIDDestUser()
    {
        return $this->iDDestUser;
    }
}

