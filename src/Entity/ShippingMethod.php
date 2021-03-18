<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShippingMethod
 *
 * @ORM\Table(name="shipping_method", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class ShippingMethod
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="days", type="string", length=10, nullable=true)
     */
    private $days;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $cost;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=true)
     */
    private $isAdmin;


}
