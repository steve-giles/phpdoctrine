<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AshaPurge
 *
 * @ORM\Table(name="asha_purge")
 * @ORM\Entity
 */
class AshaPurge
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="order_item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderItemId = '0';


}
