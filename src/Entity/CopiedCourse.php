<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CopiedCourse
 *
 * @ORM\Table(name="copied_course")
 * @ORM\Entity
 */
class CopiedCourse
{
    /**
     * @var int
     *
     * @ORM\Column(name="new_course_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newCourseId;

    /**
     * @var int
     *
     * @ORM\Column(name="original_course_id", type="integer", nullable=false)
     */
    private $originalCourseId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';


}
