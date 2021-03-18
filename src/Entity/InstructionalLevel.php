<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstructionalLevel
 *
 * @ORM\Table(name="instructional_level")
 * @ORM\Entity
 */
class InstructionalLevel
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


}
