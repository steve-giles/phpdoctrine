<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseMedia
 *
 * @ORM\Table(name="course_media", indexes={@ORM\Index(name="course_id", columns={"course_id"}), @ORM\Index(name="course_media_type_id", columns={"course_media_type_id"}), @ORM\Index(name="updated_at", columns={"updated_at", "course_id"}), @ORM\Index(name="delivery_type_id", columns={"delivery_type_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class CourseMedia
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
     * @ORM\Column(name="name", type="string", length=500, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="run_time", type="integer", nullable=true)
     */
    private $runTime;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

    /**
     * @var \DeliveryType
     *
     * @ORM\ManyToOne(targetEntity="DeliveryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_type_id", referencedColumnName="id")
     * })
     */
    private $deliveryType;

    /**
     * @var \CourseMediaType
     *
     * @ORM\ManyToOne(targetEntity="CourseMediaType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_media_type_id", referencedColumnName="id")
     * })
     */
    private $courseMediaType;


}
