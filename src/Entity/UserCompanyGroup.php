<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCompanyGroup
 *
 * @ORM\Table(name="user_company_group", indexes={@ORM\Index(name="user_company_id", columns={"user_company_id", "group_id"}), @ORM\Index(name="IDX_C4BF4BF0FE54D947", columns={"group_id"}), @ORM\Index(name="IDX_C4BF4BF030FCDC3A", columns={"user_company_id"})})
 * @ORM\Entity
 */
class UserCompanyGroup
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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

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
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \UserCompany
     *
     * @ORM\ManyToOne(targetEntity="UserCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_company_id", referencedColumnName="id")
     * })
     */
    private $userCompany;


}
