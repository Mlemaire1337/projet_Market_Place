<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

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
     * @var DateTime
     *
     * @ORM\Column(name="Date", type="string", length=255)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\oneToOne(name="offer", type="integer", targetEntity="Offer")
     */
    private $offer;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="transaction")
     */
    private $srcUser;

    /**
     * @var object
     *
     * @ORM\Column(name="destUser", type="string", length=255, unique=true)
     */
    private $destUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime",)
     */
    private $updatedAt;


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
     * Set srcUser
     *
     * @param string $srcUser
     *
     * @return Transaction
     */
    public function setSrcUser($srcUser)
    {
        $this->srcUser = $srcUser;

        return $this;
    }

    /**
     * Get srcUser
     *
     * @return string
     */
    public function getSrcUser()
    {
        return $this->srcUser;
    }

    /**
     * Set destUser
     *
     * @param string $destUser
     *
     * @return Transaction
     */
    public function setDestUser($destUser)
    {
        $this->destUser = $destUser;

        return $this;
    }

    /**
     * Get destUser
     *
     * @return string
     */
    public function getDestUser()
    {
        return $this->destUser;
    }
}

