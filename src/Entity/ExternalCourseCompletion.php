<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExternalCourseCompletion
 *
 * @ORM\Table(name="external_course_completion", indexes={@ORM\Index(name="IDX_FC2E945B4AF38FD1", columns={"deleted_at"}), @ORM\Index(name="IDX_FC2E945BA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_FC2E945BDE12AB56", columns={"created_by"}), @ORM\Index(name="IDX_FC2E945B16FE72E1", columns={"updated_by"})})
 * @ORM\Entity
 */
class ExternalCourseCompletion
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
     * @var string
     *
     * @ORM\Column(name="course_name", type="string", length=255, nullable=false)
     */
    private $courseName;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var float|null
     *
     * @ORM\Column(name="hours", type="float", precision=6, scale=2, nullable=true)
     */
    private $hours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cert_date", type="date", nullable=false)
     */
    private $certDate;

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

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
