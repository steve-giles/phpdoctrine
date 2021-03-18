<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationType
 *
 * @ORM\Table(name="notification_type")
 * @ORM\Entity
 */
class NotificationType
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
