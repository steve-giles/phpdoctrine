<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApprovalStatus
 *
 * @ORM\Table(name="approval_status", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"})})
 * @ORM\Entity
 */
class ApprovalStatus
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
     * @var string|null
     *
     * @ORM\Column(name="constant", type="string", length=60, nullable=true)
     */
    private $constant;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_available_for_sale", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isAvailableForSale = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_credit", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isCredit = true;


}
