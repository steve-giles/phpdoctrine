<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCertificate
 *
 * @ORM\Table(name="user_certificate", indexes={@ORM\Index(name="FK_888713DF22DEAC6F_idx", columns={"certificate_template_id"}), @ORM\Index(name="order_item_id", columns={"order_item_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserCertificate
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
     * @var string|null
     *
     * @ORM\Column(name="completed_by_incomplete_assignment_manager_information", type="text", length=65535, nullable=true)
     */
    private $completedByIncompleteAssignmentManagerInformation;

    /**
     * @var string
     *
     * @ORM\Column(name="course_name", type="string", length=255, nullable=false)
     */
    private $courseName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approval", type="text", length=65535, nullable=true)
     */
    private $approval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="atc", type="string", length=50, nullable=true)
     */
    private $atc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="license", type="string", length=255, nullable=true)
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="student_name", type="string", length=255, nullable=false)
     */
    private $studentName;

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
     * @var float|null
     *
     * @ORM\Column(name="hours", type="float", precision=10, scale=2, nullable=true)
     */
    private $hours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="supervising_user_id", type="integer", nullable=true)
     */
    private $supervisingUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="method_of_completion", type="text", length=65535, nullable=true)
     */
    private $methodOfCompletion;

    /**
     * @var int
     *
     * @ORM\Column(name="certificate_template_id", type="integer", nullable=false)
     */
    private $certificateTemplateId;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \OrderItem
     *
     * @ORM\ManyToOne(targetEntity="OrderItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_item_id", referencedColumnName="id")
     * })
     */
    private $orderItem;


}
