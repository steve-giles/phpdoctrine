<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderTotalByDay
 *
 * @ORM\Table(name="_order_total_by_day")
 * @ORM\Entity
 */
class OrderTotalByDay
{
    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $day;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;


}
