<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamResponseOption
 *
 * @ORM\Table(name="exam_response_option", indexes={@ORM\Index(name="option_question_id", columns={"exam_question_id"}), @ORM\Index(name="option_response_id", columns={"exam_response_id"}), @ORM\Index(name="IDX_B36B06B7DBC6DBC", columns={"exam_question_option_id"})})
 * @ORM\Entity
 */
class ExamResponseOption
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
     * @var \ExamQuestion
     *
     * @ORM\ManyToOne(targetEntity="ExamQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_question_id", referencedColumnName="id")
     * })
     */
    private $examQuestion;

    /**
     * @var \ExamQuestionOption
     *
     * @ORM\ManyToOne(targetEntity="ExamQuestionOption")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_question_option_id", referencedColumnName="id")
     * })
     */
    private $examQuestionOption;

    /**
     * @var \ExamResponse
     *
     * @ORM\ManyToOne(targetEntity="ExamResponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_response_id", referencedColumnName="id")
     * })
     */
    private $examResponse;


}
