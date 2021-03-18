<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XapiLaunchedStatements
 *
 * @ORM\Table(name="xapi_launched_statements", indexes={@ORM\Index(name="actor_account_name", columns={"actor_account_name"})})
 * @ORM\Entity
 */
class XapiLaunchedStatements
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_account_name", type="string", length=255, nullable=false)
     */
    private $actorAccountName;

    /**
     * @var string
     *
     * @ORM\Column(name="context_registration", type="string", length=255, nullable=false)
     */
    private $contextRegistration;

    /**
     * @var string
     *
     * @ORM\Column(name="xapi_activity_id", type="string", length=255, nullable=false)
     */
    private $xapiActivityId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="destination_id", type="integer", nullable=false)
     */
    private $destinationId;


}
