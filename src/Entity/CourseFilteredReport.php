<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseFilteredReport
 *
 * @ORM\Table(name="course_filtered_report")
 * @ORM\Entity
 */
class CourseFilteredReport
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
     * @ORM\Column(name="filtered_report_id", type="integer", nullable=false)
     */
    private $filteredReportId;

    /**
     * @var int
     *
     * @ORM\Column(name="course_id", type="integer", nullable=false)
     */
    private $courseId;


}
