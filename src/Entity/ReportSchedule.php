<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportSchedule
 *
 * @ORM\Table(name="report_schedule", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class ReportSchedule
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
     * @var int
     *
     * @ORM\Column(name="corp_admin_report_id", type="integer", nullable=false)
     */
    private $corpAdminReportId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_custom_report_id", type="integer", nullable=true)
     */
    private $userCustomReportId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recurrence_rule_id", type="integer", nullable=true)
     */
    private $recurrenceRuleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recipients", type="text", length=65535, nullable=true)
     */
    private $recipients;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="next_occurrence", type="date", nullable=true)
     */
    private $nextOccurrence;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

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


}
