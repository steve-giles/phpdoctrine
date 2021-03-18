<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLicenseGroup
 *
 * @ORM\Table(name="item_license_group", indexes={@ORM\Index(name="license_group_id", columns={"license_group_id"}), @ORM\Index(name="item_id", columns={"item_id", "license_group_id", "deleted_at"}), @ORM\Index(name="IDX_5584295126F525E", columns={"item_id"})})
 * @ORM\Entity
 */
class ItemLicenseGroup
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
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
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \LicenseGroup
     *
     * @ORM\ManyToOne(targetEntity="LicenseGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license_group_id", referencedColumnName="id")
     * })
     */
    private $licenseGroup;


}
