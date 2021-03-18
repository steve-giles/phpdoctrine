<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country", uniqueConstraints={@ORM\UniqueConstraint(name="country_order", columns={"display_order"}), @ORM\UniqueConstraint(name="country_name", columns={"name"})})
 * @ORM\Entity
 */
class Country
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="constant", type="string", length=30, nullable=true)
     */
    private $constant;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=2, nullable=true)
     */
    private $code = '';

    /**
     * @var int
     *
     * @ORM\Column(name="display_order", type="smallint", nullable=false)
     */
    private $displayOrder;

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
     * @var int|null
     *
     * @ORM\Column(name="calling_code", type="smallint", nullable=true)
     */
    private $callingCode;


}
