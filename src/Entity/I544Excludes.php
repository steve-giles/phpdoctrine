<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * I544Excludes
 *
 * @ORM\Table(name="i544_excludes", indexes={@ORM\Index(name="survey_id", columns={"survey_id"})})
 * @ORM\Entity
 */
class I544Excludes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_id", type="integer", nullable=true)
     */
    private $surveyId;


}
