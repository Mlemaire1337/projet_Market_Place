<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOfferBookmark
 *
 * @ORM\Table(name="user_offer_bookmark")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserOfferBookmarkRepository")
 */
class UserOfferBookmark
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
     * @ORM\Column(name="IDBookmark", type="string", length=255)
     */
    private $iDBookmark;

    /**
     * @var string
     *
     * @ORM\Column(name="IDUser", type="string", length=255, unique=true)
     */
    private $iDUser;

    /**
     * @var string
     *
     * @ORM\Column(name="IDOffer", type="string", length=255)
     */
    private $iDOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="CreateDate", type="string", length=255)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="UpdateDate", type="string", length=255)
     */
    private $updateDate;


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
     * Set iDBookmark
     *
     * @param string $iDBookmark
     *
     * @return UserOfferBookmark
     */
    public function setIDBookmark($iDBookmark)
    {
        $this->iDBookmark = $iDBookmark;

        return $this;
    }

    /**
     * Get iDBookmark
     *
     * @return string
     */
    public function getIDBookmark()
    {
        return $this->iDBookmark;
    }

    /**
     * Set iDUser
     *
     * @param string $iDUser
     *
     * @return UserOfferBookmark
     */
    public function setIDUser($iDUser)
    {
        $this->iDUser = $iDUser;

        return $this;
    }

    /**
     * Get iDUser
     *
     * @return string
     */
    public function getIDUser()
    {
        return $this->iDUser;
    }

    /**
     * Set iDOffer
     *
     * @param string $iDOffer
     *
     * @return UserOfferBookmark
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
     * Set createDate
     *
     * @param string $createDate
     *
     * @return UserOfferBookmark
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
     * Set updateDate
     *
     * @param string $updateDate
     *
     * @return UserOfferBookmark
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
}

