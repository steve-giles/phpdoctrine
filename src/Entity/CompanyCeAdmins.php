<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCeAdmins
 *
 * @ORM\Table(name="company_ce_admins", indexes={@ORM\Index(name="image_resource_id", columns={"image_resource_id"}), @ORM\Index(name="company_id", columns={"company_id"})})
 * @ORM\Entity
 */
class CompanyCeAdmins
{
    /**
     * @var int
     *
     * @ORM\Column(name="ce_admin_id", type="integer", nullable=false, options={"comment"="CE Admin identity."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceAdminId;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_text", type="string", length=128, nullable=false, options={"comment"="Text for image."})
     */
    private $signatureText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_title", type="string", length=256, nullable=true, options={"comment"="Admin's title"})
     */
    private $adminTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="effective_date", type="date", nullable=false, options={"comment"="Effective date for signature image."})
     */
    private $effectiveDate;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ImageResources
     *
     * @ORM\ManyToOne(targetEntity="ImageResources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_resource_id", referencedColumnName="image_resource_id")
     * })
     */
    private $imageResource;


}
