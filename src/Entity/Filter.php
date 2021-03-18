<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filter
 *
 * @ORM\Table(name="filter", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="filter_set_id", columns={"filter_set_id"}), @ORM\Index(name="filter_set_id_2", columns={"filter_set_id", "type", "deleted_at"})})
 * @ORM\Entity
 */
class Filter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attributes", type="text", length=65535, nullable=true)
     */
    private $attributes;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="inverse", type="boolean", nullable=false)
     */
    private $inverse = '0';

    /**
     * @var \FilterSet
     *
     * @ORM\ManyToOne(targetEntity="FilterSet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filter_set_id", referencedColumnName="id")
     * })
     */
    private $filterSet;


}
