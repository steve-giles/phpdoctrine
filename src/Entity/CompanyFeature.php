<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyFeature
 *
 * @ORM\Table(name="company_feature", indexes={@ORM\Index(name="company_id", columns={"company_id", "feature_id"})})
 * @ORM\Entity
 */
class CompanyFeature
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
     * @ORM\Column(name="feature_id", type="integer", nullable=false)
     */
    private $featureId;


}
