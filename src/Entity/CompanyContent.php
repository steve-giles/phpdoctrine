<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyContent
 *
 * @ORM\Table(name="company_content", indexes={@ORM\Index(name="company_id", columns={"company_id", "content_id"})})
 * @ORM\Entity
 */
class CompanyContent
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
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     */
    private $contentId;


}
