<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XapiAnsweredStatements
 *
 * @ORM\Table(name="xapi_answered_statements", indexes={@ORM\Index(name="actor_account_name", columns={"actor_account_name", "xapi_activity_id", "response_id"})})
 * @ORM\Entity
 */
class XapiAnsweredStatements
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
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="xapi_activity_id", type="string", length=255, nullable=false)
     */
    private $xapiActivityId;

    /**
     * @var int
     *
     * @ORM\Column(name="destination_id", type="integer", nullable=false)
     */
    private $destinationId;

    /**
     * @var string
     *
     * @ORM\Column(name="question_id", type="string", length=255, nullable=false)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="question_text", type="string", length=255, nullable=false)
     */
    private $questionText;

    /**
     * @var string
     *
     * @ORM\Column(name="response_id", type="string", length=255, nullable=false)
     */
    private $responseId;

    /**
     * @var string
     *
     * @ORM\Column(name="response_text", type="string", length=255, nullable=false)
     */
    private $responseText;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="success", type="boolean", nullable=true)
     */
    private $success;


}
