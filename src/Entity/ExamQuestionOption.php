<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamQuestionOption
 *
 * @ORM\Table(name="exam_question_option", indexes={@ORM\Index(name="exam_question_id", columns={"exam_question_id", "deleted_at", "display_order"}), @ORM\Index(name="IDX_DF4D0E905345BBE", columns={"exam_question_id"})})
 * @ORM\Entity
 */
class ExamQuestionOption
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="copied_from_exam_option_id", type="integer", nullable=true)
     */
    private $copiedFromExamOptionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

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
     * @var bool
     *
     * @ORM\Column(name="is_correct", type="boolean", nullable=false)
     */
    private $isCorrect;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \ExamQuestion
     *
     * @ORM\ManyToOne(targetEntity="ExamQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_question_id", referencedColumnName="id")
     * })
     */
    private $examQuestion;


}
