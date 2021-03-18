<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseClinicalTopic
 *
 * @ORM\Table(name="course_clinical_topic", indexes={@ORM\Index(name="clinical_topic_id", columns={"clinical_topic_id"}), @ORM\Index(name="course_id", columns={"course_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class CourseClinicalTopic
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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

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
     * @var \ClinicalTopic
     *
     * @ORM\ManyToOne(targetEntity="ClinicalTopic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clinical_topic_id", referencedColumnName="id")
     * })
     */
    private $clinicalTopic;


}
