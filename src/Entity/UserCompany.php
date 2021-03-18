<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCompany
 *
 * @ORM\Table(name="user_company", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id", "company_id"}), @ORM\UniqueConstraint(name="employee_id", columns={"employee_id", "company_id"})}, indexes={@ORM\Index(name="organizational_unit_id", columns={"organizational_unit_id", "is_active", "deleted_at"}), @ORM\Index(name="IDX_17B21745FB84408A", columns={"organizational_unit_id"}), @ORM\Index(name="IDX_17B21745A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserCompany
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
     * @ORM\Column(name="company_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $companyId = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

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
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isActive = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hire_date", type="datetime", nullable=true)
     */
    private $hireDate;

    /**
     * @var int
     *
     * @ORM\Column(name="access_level_id", type="smallint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $accessLevelId = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_corporate_admin", type="boolean", nullable=false)
     */
    private $isCorporateAdmin = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_id", type="string", length=128, nullable=true)
     */
    private $employeeId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscription_expires_on", type="date", nullable=true)
     */
    private $subscriptionExpiresOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_summary", type="text", length=65535, nullable=true)
     */
    private $groupSummary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=true, options={"comment"="This is not the same as user.email_address"})
     */
    private $emailAddress;

    /**
     * @var \OrganizationalUnit
     *
     * @ORM\ManyToOne(targetEntity="OrganizationalUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organizational_unit_id", referencedColumnName="id")
     * })
     */
    private $organizationalUnit;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
