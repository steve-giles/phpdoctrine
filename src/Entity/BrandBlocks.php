<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrandBlocks
 *
 * @ORM\Table(name="brand_blocks", indexes={@ORM\Index(name="license_group_id", columns={"license_group_id"})})
 * @ORM\Entity
 */
class BrandBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="brand_block_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $brandBlockId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="effective_date", type="date", nullable=false, options={"comment"="Date brand block is relevant"})
     */
    private $effectiveDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_block", type="text", length=65535, nullable=true, options={"comment"="Brand block text block"})
     */
    private $brandBlock;

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
