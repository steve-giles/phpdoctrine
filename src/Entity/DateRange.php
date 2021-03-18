<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateRange
 *
 * @ORM\Table(name="date_range")
 * @ORM\Entity
 */
class DateRange
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
     * @var \DateTime
     *
     * @ORM\Column(name="beginning_date", type="datetime", nullable=false)
     */
    private $beginningDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;


}
