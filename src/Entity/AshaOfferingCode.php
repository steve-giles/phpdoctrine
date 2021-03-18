<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AshaOfferingCode
 *
 * @ORM\Table(name="asha_offering_code", indexes={@ORM\Index(name="course_id", columns={"course_id"})})
 * @ORM\Entity
 */
class AshaOfferingCode
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
     * @ORM\Column(name="course_id", type="integer", nullable=false)
     */
    private $courseId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var int
     *
     * @ORM\Column(name="offering_code", type="smallint", nullable=false)
     */
    private $offeringCode;


}
