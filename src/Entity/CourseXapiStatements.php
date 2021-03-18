<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseXapiStatements
 *
 * @ORM\Table(name="course_xapi_statements", uniqueConstraints={@ORM\UniqueConstraint(name="course_id_UNIQUE", columns={"course_id"})})
 * @ORM\Entity
 */
class CourseXapiStatements
{
    /**
     * @var string
     *
     * @ORM\Column(name="xapi_activity_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xapiActivityId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

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
