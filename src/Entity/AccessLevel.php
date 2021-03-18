<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessLevel
 *
 * @ORM\Table(name="access_level", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"})})
 * @ORM\Entity
 */
class AccessLevel
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
