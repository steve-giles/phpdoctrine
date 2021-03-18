<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryType
 *
 * @ORM\Table(name="delivery_type", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"})}, indexes={@ORM\Index(name="is_active", columns={"is_active"})})
 * @ORM\Entity
 */
class DeliveryType
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
     * @var string|null
     *
     * @ORM\Column(name="constant", type="string", length=30, nullable=true)
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
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;


}
