<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScheduledCommand
 *
 * @ORM\Table(name="scheduled_command", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"ID_SCHEDULED_COMMAND"})})
 * @ORM\Entity
 */
class ScheduledCommand
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_SCHEDULED_COMMAND", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idScheduledCommand;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMAND", type="string", length=100, nullable=false)
     */
    private $command;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ARGUMENTS", type="string", length=250, nullable=true)
     */
    private $arguments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CRON_EXPRESSION", type="string", length=100, nullable=true)
     */
    private $cronExpression;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DH_LAST_EXECUTION", type="datetime", nullable=true)
     */
    private $dhLastExecution;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LAST_RETURN_CODE", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastReturnCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOG_FILE", type="string", length=100, nullable=true)
     */
    private $logFile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PRIORITY", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $priority;

    /**
     * @var bool
     *
     * @ORM\Column(name="B_EXECUTE_IMMEDIATELY", type="boolean", nullable=false)
     */
    private $bExecuteImmediately;

    /**
     * @var bool
     *
     * @ORM\Column(name="B_DISABLED", type="boolean", nullable=false)
     */
    private $bDisabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="B_LOCKED", type="boolean", nullable=false)
     */
    private $bLocked;


}
