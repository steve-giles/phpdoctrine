<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyLicensetype
 *
 * @ORM\Table(name="company_licensetype", indexes={@ORM\Index(name="company_id", columns={"company_id", "license_type_id"})})
 * @ORM\Entity
 */
class CompanyLicensetype
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
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var int
     *
     * @ORM\Column(name="license_type_id", type="integer", nullable=false)
     */
    private $licenseTypeId;


}
