<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketStatus
 *
 * @ORM\Table(name="ticket_status", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"}), @ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class TicketStatus
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


}
