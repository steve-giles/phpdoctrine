<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DuplicateUserCompany
 *
 * @ORM\Table(name="duplicate_user_company", indexes={@ORM\Index(name="user_company_ibfk_4", columns={"user_id"}), @ORM\Index(name="organizational_unit_id", columns={"organizational_unit_id"})})
 * @ORM\Entity
 */
class DuplicateUserCompany
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

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
     * @var int|null
     *
     * @ORM\Column(name="organizational_unit_id", type="integer", nullable=true)
     */
    private $organizationalUnitId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_summary", type="string", length=250, nullable=true)
     */
    private $groupSummary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=true, options={"comment"="This is not the same as user.email_address"})
     */
    private $emailAddress;


}
