<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecurrenceRule
 *
 * @ORM\Table(name="recurrence_rule")
 * @ORM\Entity
 */
class RecurrenceRule
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
     * @ORM\Column(name="freq", type="string", length=50, nullable=false)
     */
    private $freq;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtstart", type="datetime", nullable=true)
     */
    private $dtstart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="until", type="datetime", nullable=true)
     */
    private $until;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rule_interval", type="integer", nullable=true)
     */
    private $ruleInterval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bysecond", type="string", length=50, nullable=true)
     */
    private $bysecond;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byminute", type="string", length=50, nullable=true)
     */
    private $byminute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byhour", type="string", length=50, nullable=true)
     */
    private $byhour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byday", type="string", length=50, nullable=true)
     */
    private $byday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bymonthday", type="string", length=50, nullable=true)
     */
    private $bymonthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byyearday", type="string", length=50, nullable=true)
     */
    private $byyearday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="byweekno", type="string", length=50, nullable=true)
     */
    private $byweekno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bymonth", type="string", length=50, nullable=true)
     */
    private $bymonth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bysetpos", type="string", length=50, nullable=true)
     */
    private $bysetpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wkst", type="string", length=50, nullable=true)
     */
    private $wkst;


}
