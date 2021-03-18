<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurriculumUser
 *
 * @ORM\Table(name="curriculum_user", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_2", columns={"user_id", "curriculum_id"})}, indexes={@ORM\Index(name="is_active_idx", columns={"curriculum_id", "is_active"}), @ORM\Index(name="user_id", columns={"user_id", "is_active", "curriculum_id"}), @ORM\Index(name="IDX_C812B116A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_C812B1165AEA4428", columns={"curriculum_id"})})
 * @ORM\Entity
 */
class CurriculumUser
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
     * @var bool|null
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="percent_complete_to_date", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentCompleteToDate = '0.00';

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
     * @var \Curriculum
     *
     * @ORM\ManyToOne(targetEntity="Curriculum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curriculum_id", referencedColumnName="id")
     * })
     */
    private $curriculum;


}
