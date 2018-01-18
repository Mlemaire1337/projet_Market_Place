<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="CreateDate", type="string", length=255)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IDOffer", type="string", length=255)
     */
    private $iDOffer;

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
     * @var string
     *
     * @ORM\Column(name="Object", type="string", length=255)
     */
    private $object;


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
     * Set createDate
     *
     * @param string $createDate
     *
     * @return Message
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set iDOffer
     *
     * @param string $iDOffer
     *
     * @return Message
     */
    public function setIDOffer($iDOffer)
    {
        $this->iDOffer = $iDOffer;

        return $this;
    }

    /**
     * Get iDOffer
     *
     * @return string
     */
    public function getIDOffer()
    {
        return $this->iDOffer;
    }

    /**
     * Set iDSourceUser
     *
     * @param string $iDSourceUser
     *
     * @return Message
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
     * @return Message
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

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Message
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }
}

