<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatus
 *
 * @ORM\Table(name="order_status", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"})}, indexes={@ORM\Index(name="is_completed", columns={"is_completed"})})
 * @ORM\Entity
 */
class OrderStatus
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
     * @ORM\Column(name="is_completed", type="boolean", nullable=false)
     */
    private $isCompleted = '0';


}
