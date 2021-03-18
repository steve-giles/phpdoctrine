<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationLevel
 *
 * @ORM\Table(name="notification_level")
 * @ORM\Entity
 */
class NotificationLevel
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="constant", type="string", length=255, nullable=false)
     */
    private $constant;


}
