<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompaniesEmailTemplates
 *
 * @ORM\Table(name="companies_email_templates", indexes={@ORM\Index(name="email_template_type_id", columns={"email_template_type_id"}), @ORM\Index(name="email_template_id", columns={"email_template_id"}), @ORM\Index(name="IDX_213DA103979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class CompaniesEmailTemplates
{
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

    /**
     * @var \EmailTemplateTypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="EmailTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_template_type_id", referencedColumnName="email_template_type_id")
     * })
     */
    private $emailTemplateType;

    /**
     * @var \EmailTemplates
     *
     * @ORM\ManyToOne(targetEntity="EmailTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_template_id", referencedColumnName="email_template_id")
     * })
     */
    private $emailTemplate;


}
