<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogPageRequests
 *
 * @ORM\Table(name="log_page_requests", indexes={@ORM\Index(name="url", columns={"url"}), @ORM\Index(name="created_at", columns={"created_at"})})
 * @ORM\Entity
 */
class LogPageRequests
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=true)
     */
    private $domain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="get", type="text", length=65535, nullable=true)
     */
    private $get;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post", type="text", length=65535, nullable=true)
     */
    private $post;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session", type="text", length=65535, nullable=true)
     */
    private $session;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=true)
     */
    private $sessionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cookie", type="text", length=65535, nullable=true)
     */
    private $cookie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accept", type="string", length=255, nullable=true)
     */
    private $accept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referrer", type="string", length=255, nullable=true)
     */
    private $referrer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_headers", type="text", length=65535, nullable=true)
     */
    private $responseHeaders;


}
