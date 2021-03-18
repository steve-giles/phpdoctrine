<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StateLicenseTypeReportToCeBroker
 *
 * @ORM\Table(name="state_license_type_report_to_ce_broker", uniqueConstraints={@ORM\UniqueConstraint(name="state_license_type_unique", columns={"state_id", "license_type_id", "deleted_at"})}, indexes={@ORM\Index(name="fk_license_type_id", columns={"license_type_id"}), @ORM\Index(name="IDX_4DACED8B5D83CC1", columns={"state_id"})})
 * @ORM\Entity
 */
class StateLicenseTypeReportToCeBroker
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
     * @var string|null
     *
     * @ORM\Column(name="watermark", type="string", length=100, nullable=true)
     */
    private $watermark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="regular_expression", type="string", length=100, nullable=true)
     */
    private $regularExpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="example_explanation", type="text", length=65535, nullable=true)
     */
    private $exampleExplanation;

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
     * @var \LicenseType
     *
     * @ORM\ManyToOne(targetEntity="LicenseType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license_type_id", referencedColumnName="id")
     * })
     */
    private $licenseType;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
