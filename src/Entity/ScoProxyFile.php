<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScoProxyFile
 *
 * @ORM\Table(name="sco_proxy_file")
 * @ORM\Entity
 */
class ScoProxyFile
{
    /**
     * @var int
     *
     * @ORM\Column(name="course_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $courseId;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=256, nullable=false)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=256, nullable=true)
     */
    private $location;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';


}
