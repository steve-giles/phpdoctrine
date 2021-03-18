<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaxCourseApprovalAvailableForSale
 *
 * @ORM\Table(name="max_course_approval_available_for_sale", indexes={@ORM\Index(name="state_id", columns={"state_id"}), @ORM\Index(name="max_approval", columns={"max_approval"}), @ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="license_type_id", columns={"license_type_id"})})
 * @ORM\Entity
 */
class MaxCourseApprovalAvailableForSale
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="smallint", nullable=false)
     */
    private $stateId;

    /**
     * @var int
     *
     * @ORM\Column(name="license_type_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $licenseTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="item_name", type="string", length=255, nullable=false)
     */
    private $itemName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="max_approval", type="date", nullable=true)
     */
    private $maxApproval;


}
