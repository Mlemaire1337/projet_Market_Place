<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfferBookmark
 *
 * @ORM\Table(name="offer_bookmark")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfferBookmarkRepository")
 */
class OfferBookmark
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
     * @var \DateTime
     *
     * @ORM\Column(name="cratedAt", type="datetime")
     */
    private $cratedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Offer", inversedBy="offerBookmarks")
     */
    private $offer;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="offerBookmarks")
     */
    private $user;

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
     * Set cratedAt
     *
     * @param \DateTime $cratedAt
     *
     * @return OfferBookmark
     */
    public function setCratedAt($cratedAt)
    {
        $this->cratedAt = $cratedAt;

        return $this;
    }

    /**
     * Get cratedAt
     *
     * @return \DateTime
     */
    public function getCratedAt()
    {
        return $this->cratedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OfferBookmark
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
