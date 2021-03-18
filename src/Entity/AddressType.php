<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressType
 *
 * @ORM\Table(name="address_type", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"}), @ORM\UniqueConstraint(name="UNIQ_F19287C25E237E06", columns={"name"})})
 * @ORM\Entity
 */
class AddressType
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
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;


}
