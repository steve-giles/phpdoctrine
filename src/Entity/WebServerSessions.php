<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebServerSessions
 *
 * @ORM\Table(name="web_server_sessions")
 * @ORM\Entity
 */
class WebServerSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=100, nullable=false)
     */
    private $userAgent;

    /**
     * @var int
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false)
     */
    private $lastActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_data", type="text", length=65535, nullable=false)
     */
    private $userData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';


}
