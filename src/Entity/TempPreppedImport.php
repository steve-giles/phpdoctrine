<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempPreppedImport
 *
 * @ORM\Table(name="temp_prepped_import")
 * @ORM\Entity
 */
class TempPreppedImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_name", type="text", length=65535, nullable=true)
     */
    private $courseName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_format", type="text", length=65535, nullable=true)
     */
    private $itemFormat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="license_group_id", type="integer", nullable=true)
     */
    private $licenseGroupId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="certificate_template_id", type="integer", nullable=true)
     */
    private $certificateTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state_id", type="integer", nullable=true)
     */
    private $stateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="approval_category_id", type="integer", nullable=true)
     */
    private $approvalCategoryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="approval_status_id", type="integer", nullable=true)
     */
    private $approvalStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accreditation_hours", type="integer", nullable=true)
     */
    private $accreditationHours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asha_course_number", type="text", length=65535, nullable=true)
     */
    private $ashaCourseNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accrediting_company_id", type="integer", nullable=true)
     */
    private $accreditingCompanyId;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;


}
