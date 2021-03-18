<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MonthIteratorTemp
 *
 * @ORM\Table(name="month_iterator_temp")
 * @ORM\Entity
 */
class MonthIteratorTemp
{
    /**
     * @var int
     *
     * @ORM\Column(name="pkey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkey;

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=16, nullable=false, options={"default"="percent_complete"})
     */
    private $month = 'percent_complete';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;


}
