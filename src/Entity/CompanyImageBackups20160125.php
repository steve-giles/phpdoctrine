<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyImageBackups20160125
 *
 * @ORM\Table(name="_company_image_backups_20160125")
 * @ORM\Entity
 */
class CompanyImageBackups20160125
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_url", type="string", length=255, nullable=false)
     */
    private $primaryUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_image_url", type="text", length=0, nullable=true)
     */
    private $companyImageUrl;


}
