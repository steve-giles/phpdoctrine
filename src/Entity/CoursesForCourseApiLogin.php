<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoursesForCourseApiLogin
 *
 * @ORM\Table(name="courses_for_course_api_login")
 * @ORM\Entity
 */
class CoursesForCourseApiLogin
{
    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false, options={"comment"="Company id for update"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false, options={"comment"="Last update time for wordpress"})
     */
    private $lastLogin;


}
