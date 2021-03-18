<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamQuestion
 *
 * @ORM\Table(name="exam_question", indexes={@ORM\Index(name="exam_id", columns={"exam_id", "deleted_at", "display_order"}), @ORM\Index(name="IDX_F593067D578D5E91", columns={"exam_id"})})
 * @ORM\Entity
 */
class ExamQuestion
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
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="display_order", type="boolean", nullable=true)
     */
    private $displayOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="copied_from_exam_question_id", type="integer", nullable=true)
     */
    private $copiedFromExamQuestionId;

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
     * @ORM\Column(name="answer_reference", type="string", length=100, nullable=true)
     */
    private $answerReference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \Exam
     *
     * @ORM\ManyToOne(targetEntity="Exam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_id", referencedColumnName="id")
     * })
     */
    private $exam;


}
