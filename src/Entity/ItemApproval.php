<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemApproval
 *
 * @ORM\Table(name="item_approval", indexes={@ORM\Index(name="state_id", columns={"state_id"}), @ORM\Index(name="item_id", columns={"item_id", "state_id", "license_group_id", "activates_on", "media_completion_required"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="activates_on", columns={"activates_on"}), @ORM\Index(name="approval_category_id", columns={"approval_category_id"}), @ORM\Index(name="updated_at", columns={"updated_at", "item_id"}), @ORM\Index(name="IDX_7AED5DE017F5095C", columns={"accrediting_company_id"}), @ORM\Index(name="item_id_deleted_at", columns={"item_id", "deleted_at"}), @ORM\Index(name="license_group_id", columns={"license_group_id", "item_id", "deleted_at"}), @ORM\Index(name="approval_status_id", columns={"approval_status_id"}), @ORM\Index(name="expires_on", columns={"expires_on"}), @ORM\Index(name="certificate_template_id", columns={"certificate_template_id"}), @ORM\Index(name="IDX_7AED5DE0126F525E", columns={"item_id"}), @ORM\Index(name="IDX_7AED5DE02044870", columns={"license_group_id"})})
 * @ORM\Entity
 */
class ItemApproval
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
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var float|null
     *
     * @ORM\Column(name="accreditation_hours", type="float", precision=15, scale=2, nullable=true)
     */
    private $accreditationHours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statement", type="text", length=65535, nullable=true)
     */
    private $statement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activates_on", type="date", nullable=true)
     */
    private $activatesOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_on", type="date", nullable=true)
     */
    private $expiresOn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="infinite", type="boolean", nullable=true)
     */
    private $infinite = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="package_name_override", type="string", length=200, nullable=true)
     */
    private $packageNameOverride;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="asha_course_number", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ashaCourseNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ce_broker_publishing_number", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ceBrokerPublishingNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ce_broker_course_number", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ceBrokerCourseNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="media_completion_required", type="boolean", nullable=false, options={"comment"="Flag indicating whether course media must be viewed before an exam can be taken"})
     */
    private $mediaCompletionRequired = '0';

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
     *   @ORM\JoinColumn(name="accrediting_company_id", referencedColumnName="id")
     * })
     */
    private $accreditingCompany;

    /**
     * @var \CertificateTemplate
     *
     * @ORM\ManyToOne(targetEntity="CertificateTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certificate_template_id", referencedColumnName="id")
     * })
     */
    private $certificateTemplate;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * @var \ApprovalCategory
     *
     * @ORM\ManyToOne(targetEntity="ApprovalCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="approval_category_id", referencedColumnName="id")
     * })
     */
    private $approvalCategory;

    /**
     * @var \ApprovalStatus
     *
     * @ORM\ManyToOne(targetEntity="ApprovalStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="approval_status_id", referencedColumnName="id")
     * })
     */
    private $approvalStatus;

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
