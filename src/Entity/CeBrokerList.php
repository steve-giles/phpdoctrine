<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CeBrokerList
 *
 * @ORM\Table(name="ce_broker_list")
 * @ORM\Entity
 */
class CeBrokerList
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderItemId;


}
