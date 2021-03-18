<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemCategoryAssignment
 *
 * @ORM\Table(name="item_category_assignment", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="item_category_id", columns={"item_category_id"})})
 * @ORM\Entity
 */
class ItemCategoryAssignment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \ItemCategory
     *
     * @ORM\ManyToOne(targetEntity="ItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_category_id", referencedColumnName="id")
     * })
     */
    private $itemCategory;


}
