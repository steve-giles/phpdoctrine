<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curriculum
 *
 * @ORM\Table(name="curriculum", uniqueConstraints={@ORM\UniqueConstraint(name="unique_name", columns={"company_id", "name"})}, indexes={@ORM\Index(name="IDX_7BE2A7C3979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class Curriculum
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prior_completion_threshold", type="integer", nullable=true)
     */
    private $priorCompletionThreshold;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="send_course_reminder", type="boolean", nullable=true)
     */
    private $sendCourseReminder = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="needs_processing", type="boolean", nullable=true)
     */
    private $needsProcessing;

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
     * @var bool|null
     *
     * @ORM\Column(name="use_absolute_dates", type="boolean", nullable=true)
     */
    private $useAbsoluteDates;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deactivation_date", type="date", nullable=true)
     */
    private $deactivationDate;

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
