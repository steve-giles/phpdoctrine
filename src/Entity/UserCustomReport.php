<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCustomReport
 *
 * @ORM\Table(name="user_custom_report", indexes={@ORM\Index(name="fk_user_custom_report_2_idx", columns={"filtered_report_id"}), @ORM\Index(name="fk_user_custom_report_1_idx", columns={"corp_admin_report_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class UserCustomReport
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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \CorpAdminReport
     *
     * @ORM\ManyToOne(targetEntity="CorpAdminReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corp_admin_report_id", referencedColumnName="id")
     * })
     */
    private $corpAdminReport;

    /**
     * @var \FilteredReport
     *
     * @ORM\ManyToOne(targetEntity="FilteredReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filtered_report_id", referencedColumnName="id")
     * })
     */
    private $filteredReport;


}
