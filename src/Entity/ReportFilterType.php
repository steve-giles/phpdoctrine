<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportFilterType
 *
 * @ORM\Table(name="report_filter_type")
 * @ORM\Entity
 */
class ReportFilterType
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
     * @var string
     *
     * @ORM\Column(name="type", type="text", length=0, nullable=false)
     */
    private $type;


}
