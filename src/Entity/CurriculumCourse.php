<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurriculumCourse
 *
 * @ORM\Table(name="curriculum_course", indexes={@ORM\Index(name="course_id", columns={"course_id"}), @ORM\Index(name="curriculum_id", columns={"curriculum_id", "course_id"}), @ORM\Index(name="curriculum_course_cover_IDX", columns={"curriculum_id", "available_days", "due_days"}), @ORM\Index(name="IDX_F86B9F585AEA4428", columns={"curriculum_id"})})
 * @ORM\Entity
 */
class CurriculumCourse
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="datetime", nullable=true)
     */
    private $availableDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="available_days", type="integer", nullable=true)
     */
    private $availableDays;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_at", type="datetime", nullable=true)
     */
    private $completedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true, options={"comment"="We might consider putting  default on this column,
                                                                                           leaving NOT NULL constraint for now."})
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true, options={"comment"="We might consider putting  default on this column,
                                                                                           leaving NOT NULL constraint for now."})
     */
    private $updatedBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="due_days", type="integer", nullable=true)
     */
    private $dueDays;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_soft_due_date", type="boolean", nullable=true)
     */
    private $isSoftDueDate = '0';

    /**
     * @var \Curriculum
     *
     * @ORM\ManyToOne(targetEntity="Curriculum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curriculum_id", referencedColumnName="id")
     * })
     */
    private $curriculum;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;


}
