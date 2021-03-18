<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceOverrideReason
 *
 * @ORM\Table(name="price_override_reason")
 * @ORM\Entity
 */
class PriceOverrideReason
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;


}
