<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilteredReportFilterSet
 *
 * @ORM\Table(name="filtered_report_filter_set", indexes={@ORM\Index(name="fk_filter_set_idx", columns={"filter_set_id"}), @ORM\Index(name="fk_filtered_report_id_idx", columns={"filtered_report_id"})})
 * @ORM\Entity
 */
class FilteredReportFilterSet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FilterSet
     *
     * @ORM\ManyToOne(targetEntity="FilterSet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filter_set_id", referencedColumnName="id")
     * })
     */
    private $filterSet;

    /**
     * @var \FilteredReport
     *
     * @ORM\ManyToOne(targetEntity="FilteredReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filtered_report_id", referencedColumnName="id")
     * })
     */
    private $filteredReport;


}
