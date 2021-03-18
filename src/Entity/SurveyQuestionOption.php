<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestionOption
 *
 * @ORM\Table(name="survey_question_option", indexes={@ORM\Index(name="survey_question_id", columns={"survey_question_id"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class SurveyQuestionOption
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
     * @var int
     *
     * @ORM\Column(name="display_order", type="integer", nullable=false)
     */
    private $displayOrder;

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
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isActive = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \SurveyQuestion
     *
     * @ORM\ManyToOne(targetEntity="SurveyQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_question_id", referencedColumnName="id")
     * })
     */
    private $surveyQuestion;


}
