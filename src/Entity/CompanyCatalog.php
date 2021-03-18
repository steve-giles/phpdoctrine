<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCatalog
 *
 * @ORM\Table(name="company_catalog", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="company_id", columns={"company_id"}), @ORM\Index(name="item_id_company_id_deleted_at", columns={"item_id", "company_id", "deleted_at"}), @ORM\Index(name="IDX_3B7E2890126F525E", columns={"item_id"})})
 * @ORM\Entity
 */
class CompanyCatalog
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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_searchable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isSearchable = true;

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
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
