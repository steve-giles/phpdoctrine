<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempImport
 *
 * @ORM\Table(name="temp_import")
 * @ORM\Entity
 */
class TempImport
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
     * @var string|null
     *
     * @ORM\Column(name="license_group", type="text", length=65535, nullable=true)
     */
    private $licenseGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="certificate_template", type="text", length=65535, nullable=true)
     */
    private $certificateTemplate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="text", length=65535, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approval_category", type="text", length=65535, nullable=true)
     */
    private $approvalCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approval_status", type="text", length=65535, nullable=true)
     */
    private $approvalStatus;

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
     * @var string|null
     *
     * @ORM\Column(name="accrediting_company", type="text", length=65535, nullable=true)
     */
    private $accreditingCompany;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statement", type="text", length=65535, nullable=true)
     */
    private $statement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activates_on", type="text", length=65535, nullable=true)
     */
    private $activatesOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expires_on", type="text", length=65535, nullable=true)
     */
    private $expiresOn;


}
