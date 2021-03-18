<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamResponse
 *
 * @ORM\Table(name="exam_response", indexes={@ORM\Index(name="user_id", columns={"user_id", "order_item_id", "grade", "passing_grade"}), @ORM\Index(name="order_item_id", columns={"order_item_id", "grade", "passing_grade"}), @ORM\Index(name="exam_id", columns={"exam_id"}), @ORM\Index(name="IDX_7D1F44C8A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_7D1F44C8E415FB15", columns={"order_item_id"})})
 * @ORM\Entity
 */
class ExamResponse
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
     * @ORM\Column(name="passing_grade", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $passingGrade;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $grade;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

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
     * @var bool|null
     *
     * @ORM\Column(name="report_to_asha", type="boolean", nullable=true)
     */
    private $reportToAsha = '0';

    /**
     * @var \Exam
     *
     * @ORM\ManyToOne(targetEntity="Exam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_id", referencedColumnName="id")
     * })
     */
    private $exam;

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
