<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AshaP1ParticipantsTemp
 *
 * @ORM\Table(name="asha_p1_participants_temp", indexes={@ORM\Index(name="CourseNumber", columns={"CourseNumber", "course_offering", "report_to_asha", "completed_on"})})
 * @ORM\Entity
 */
class AshaP1ParticipantsTemp
{
    /**
     * @var string
     *
     * @ORM\Column(name="form_type", type="string", length=2, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Provider_code", type="string", length=4, nullable=true, options={"fixed"=true})
     */
    private $providerCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CourseNumber", type="string", length=7, nullable=true, options={"fixed"=true})
     */
    private $coursenumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_id", type="integer", nullable=true)
     */
    private $itemId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="course_offering", type="date", nullable=true)
     */
    private $courseOffering;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_on", type="date", nullable=true)
     */
    private $completedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Customer_Name", type="string", length=64, nullable=true)
     */
    private $customerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SSN", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $ssn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ASHA_ID", type="string", length=8, nullable=true, options={"fixed"=true})
     */
    private $ashaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Units", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $units;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Provider_RefNum", type="integer", nullable=true)
     */
    private $providerRefnum;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="report_to_asha", type="boolean", nullable=true)
     */
    private $reportToAsha;


}
