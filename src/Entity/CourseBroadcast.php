<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseBroadcast
 *
 * @ORM\Table(name="course_broadcast", indexes={@ORM\Index(name="course_id", columns={"course_id", "deleted_at"}), @ORM\Index(name="new_exam_id", columns={"new_exam_id"}), @ORM\Index(name="IDX_19503C59591CC992", columns={"course_id"})})
 * @ORM\Entity
 */
class CourseBroadcast
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
     * @ORM\Column(name="copy_of_course_name", type="string", length=255, nullable=false)
     */
    private $copyOfCourseName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="broadcast_start_time", type="datetime", nullable=false)
     */
    private $broadcastStartTime;

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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="asha_offering_number", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ashaOfferingNumber;

    /**
     * @var \Exam
     *
     * @ORM\ManyToOne(targetEntity="Exam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="new_exam_id", referencedColumnName="id")
     * })
     */
    private $newExam;

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
