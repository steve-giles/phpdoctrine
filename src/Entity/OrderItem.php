<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 *
 * @ORM\Table(name="order_item", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="order_id_2", columns={"order_id", "deleted_at", "curriculum_id", "created_at"}), @ORM\Index(name="parent_order_item_id", columns={"parent_order_item_id"}), @ORM\Index(name="exam_id", columns={"exam_id"}), @ORM\Index(name="curriculum_id", columns={"curriculum_id", "item_id"}), @ORM\Index(name="order_id_3", columns={"order_id", "curriculum_id", "completed_on"}), @ORM\Index(name="delivery_type_id", columns={"delivery_type_id"})})
 * @ORM\Entity
 */
class OrderItem
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
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_order_item_id", type="integer", nullable=true)
     */
    private $parentOrderItemId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=true)
     */
    private $surveyId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exam_id", type="integer", nullable=true)
     */
    private $examId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="curriculum_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $curriculumId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="exam_expiration_date", type="date", nullable=true)
     */
    private $examExpirationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="price_override", type="boolean", nullable=true)
     */
    private $priceOverride;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_override_reason", type="string", length=32, nullable=true)
     */
    private $priceOverrideReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $discount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_to_receipt", type="string", length=255, nullable=true)
     */
    private $linkToReceipt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_on", type="date", nullable=true)
     */
    private $completedOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_soft_due_date", type="boolean", nullable=true)
     */
    private $isSoftDueDate = '0';

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
     * @var \DeliveryType
     *
     * @ORM\ManyToOne(targetEntity="DeliveryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_type_id", referencedColumnName="id")
     * })
     */
    private $deliveryType;


}
