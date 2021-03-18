<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurriculumFilterSet
 *
 * @ORM\Table(name="curriculum_filter_set", indexes={@ORM\Index(name="curriculum_id", columns={"curriculum_id", "filter_set_id"})})
 * @ORM\Entity
 */
class CurriculumFilterSet
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
     * @var int
     *
     * @ORM\Column(name="filter_set_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filterSetId;

    /**
     * @var int
     *
     * @ORM\Column(name="curriculum_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $curriculumId;


}
