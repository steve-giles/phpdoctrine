<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrganizationalUnit
 *
 * @ORM\Table(name="organizational_unit", indexes={@ORM\Index(name="path_2", columns={"path", "deleted_at"}), @ORM\Index(name="parent_id_2", columns={"parent_id", "deleted_at"}), @ORM\Index(name="path_name_2", columns={"path_name"}), @ORM\Index(name="path", columns={"path", "deleted_at"}), @ORM\Index(name="parent_id", columns={"parent_id", "deleted_at"}), @ORM\Index(name="company_id", columns={"company_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="path_name", columns={"path_name"})})
 * @ORM\Entity
 */
class OrganizationalUnit
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="left_side", type="integer", nullable=true)
     */
    private $leftSide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="right_side", type="integer", nullable=true)
     */
    private $rightSide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var int|null
     *
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path_name", type="string", length=1000, nullable=true)
     */
    private $pathName;


}
