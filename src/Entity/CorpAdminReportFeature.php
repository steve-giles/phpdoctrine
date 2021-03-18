<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorpAdminReportFeature
 *
 * @ORM\Table(name="corp_admin_report_feature")
 * @ORM\Entity
 */
class CorpAdminReportFeature
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
     * @ORM\Column(name="corp_admin_report_id", type="integer", nullable=false)
     */
    private $corpAdminReportId;

    /**
     * @var int
     *
     * @ORM\Column(name="feature_id", type="integer", nullable=false)
     */
    private $featureId;


}
