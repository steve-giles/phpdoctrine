<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderIds
 *
 * @ORM\Table(name="order_ids")
 * @ORM\Entity
 */
class OrderIds
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;


}
