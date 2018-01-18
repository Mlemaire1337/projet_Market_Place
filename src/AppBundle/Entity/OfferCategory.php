<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfferCategory
 *
 * @ORM\Table(name="offer_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfferCategoryRepository")
 */
class OfferCategory
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
     * @ORM\Column(name="IDCategory", type="string", length=255)
     */
    private $iDCategory;


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
     * Set iDCategory
     *
     * @param string $iDCategory
     *
     * @return OfferCategory
     */
    public function setIDCategory($iDCategory)
    {
        $this->iDCategory = $iDCategory;

        return $this;
    }

    /**
     * Get iDCategory
     *
     * @return string
     */
    public function getIDCategory()
    {
        return $this->iDCategory;
    }
}
