<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZendeskUsersCompanies
 *
 * @ORM\Table(name="zendesk_users_companies", uniqueConstraints={@ORM\UniqueConstraint(name="zendesk_user_company_id", columns={"zendesk_user_company_id"})})
 * @ORM\Entity
 */
class ZendeskUsersCompanies
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="zendesk_user_company_id", type="bigint", nullable=true, options={"unsigned"=true,"comment"="PKEY from zendesk"})
     */
    private $zendeskUserCompanyId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="processed", type="datetime", nullable=true, options={"comment"="Datetiem of processing"})
     */
    private $processed;

    /**
     * @var \UserCompany
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="UserCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_company_id", referencedColumnName="id")
     * })
     */
    private $userCompany;


}
