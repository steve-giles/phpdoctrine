<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZendeskCompanies
 *
 * @ORM\Table(name="zendesk_companies", uniqueConstraints={@ORM\UniqueConstraint(name="zendesk_company_id", columns={"zendesk_company_id"})}, indexes={@ORM\Index(name="processed", columns={"processed"})})
 * @ORM\Entity
 */
class ZendeskCompanies
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="zendesk_company_id", type="bigint", nullable=true, options={"unsigned"=true,"comment"="zendesk PKEY"})
     */
    private $zendeskCompanyId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="processed", type="datetime", nullable=true, options={"comment"="Datetime uploaded to zendesk"})
     */
    private $processed;

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
