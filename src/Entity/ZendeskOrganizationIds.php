<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZendeskOrganizationIds
 *
 * @ORM\Table(name="zendesk_organization_ids", uniqueConstraints={@ORM\UniqueConstraint(name="organization_id", columns={"organization_id"})})
 * @ORM\Entity
 */
class ZendeskOrganizationIds
{
    /**
     * @var int
     *
     * @ORM\Column(name="organization_id", type="bigint", nullable=false, options={"comment"="Zendesk org ID"})
     */
    private $organizationId;

    /**
     * @var \Company
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
