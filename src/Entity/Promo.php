<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo", uniqueConstraints={@ORM\UniqueConstraint(name="code_deleted_at", columns={"code", "deleted_at"})}, indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="copied_from_id", columns={"copied_from_id"}), @ORM\Index(name="is_active", columns={"is_active"})})
 * @ORM\Entity
 */
class Promo
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_amount", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $discountAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_type", type="string", length=0, nullable=false, options={"default"="percent"})
     */
    private $discountType = 'percent';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_on", type="date", nullable=true)
     */
    private $startOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ends_on", type="date", nullable=true)
     */
    private $endsOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \Promo
     *
     * @ORM\ManyToOne(targetEntity="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="copied_from_id", referencedColumnName="id")
     * })
     */
    private $copiedFrom;


}
