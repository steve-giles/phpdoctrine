<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyQuestion
 *
 * @ORM\Table(name="survey_question", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="FK_survey_question_survey_id", columns={"survey_id"})})
 * @ORM\Entity
 */
class SurveyQuestion
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
     * @var bool
     *
     * @ORM\Column(name="display_order", type="boolean", nullable=false)
     */
    private $displayOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="question_type", type="string", length=0, nullable=false, options={"default"="multiple_choice"})
     */
    private $questionType = 'multiple_choice';

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
     * @var \Survey
     *
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     * })
     */
    private $survey;


}
