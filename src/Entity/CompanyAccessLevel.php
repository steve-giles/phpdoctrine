<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyAccessLevel
 *
 * @ORM\Table(name="company_access_level", indexes={@ORM\Index(name="access_level_id_IDX", columns={"access_level_id", "deleted_at"}), @ORM\Index(name="company_id", columns={"company_id"}), @ORM\Index(name="IDX_8DB27A8E32A48A96", columns={"access_level_id"})})
 * @ORM\Entity
 */
class CompanyAccessLevel
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
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

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
     * @var \AccessLevel
     *
     * @ORM\ManyToOne(targetEntity="AccessLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="access_level_id", referencedColumnName="id")
     * })
     */
    private $accessLevel;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
