<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyResponseOption
 *
 * @ORM\Table(name="survey_response_option", indexes={@ORM\Index(name="FK_9929F5AB430BF745", columns={"survey_response_id"}), @ORM\Index(name="FK_9929F5ABA6DF29BA", columns={"survey_question_id"}), @ORM\Index(name="IDX_9929F5ABBFC3A540", columns={"survey_question_option_id"})})
 * @ORM\Entity
 */
class SurveyResponseOption
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
     * @ORM\Column(name="text", type="text", length=0, nullable=false)
     */
    private $text;

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
     * @var \SurveyResponse
     *
     * @ORM\ManyToOne(targetEntity="SurveyResponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_response_id", referencedColumnName="id")
     * })
     */
    private $surveyResponse;

    /**
     * @var \SurveyQuestion
     *
     * @ORM\ManyToOne(targetEntity="SurveyQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_question_id", referencedColumnName="id")
     * })
     */
    private $surveyQuestion;

    /**
     * @var \SurveyQuestionOption
     *
     * @ORM\ManyToOne(targetEntity="SurveyQuestionOption")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_question_option_id", referencedColumnName="id")
     * })
     */
    private $surveyQuestionOption;


}
