<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testimonial
 *
 * @ORM\Table(name="testimonial", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="is_active", columns={"is_active"})})
 * @ORM\Entity
 */
class Testimonial
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
    private $name = '';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false)
     */
    private $displayOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credential", type="string", length=200, nullable=true)
     */
    private $credential;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured;

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


}
