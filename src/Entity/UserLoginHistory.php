<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLoginHistory
 *
 * @ORM\Table(name="user_login_history", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="month", columns={"month"})})
 * @ORM\Entity
 */
class UserLoginHistory
{
    /**
     * @var bool
     *
     * @ORM\Column(name="month", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $month;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logged_in_at", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loggedInAt;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_ip", type="string", length=15, nullable=true)
     */
    private $userIp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_js_enabled", type="boolean", nullable=true)
     */
    private $isJsEnabled;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="used_quick_link", type="boolean", nullable=true)
     */
    private $usedQuickLink;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="admin_used_log_in_as", type="boolean", nullable=true)
     */
    private $adminUsedLogInAs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_id", type="integer", nullable=true)
     */
    private $companyId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="admin_user_id", type="integer", nullable=true, options={"comment"="always null"})
     */
    private $adminUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_id", type="string", length=128, nullable=true)
     */
    private $sessionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=250, nullable=true)
     */
    private $userAgent;


}
