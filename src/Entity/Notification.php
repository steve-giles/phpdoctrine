<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="fk_notification_2_idx", columns={"user_id"}), @ORM\Index(name="is_read", columns={"is_read"}), @ORM\Index(name="user_id", columns={"user_id", "is_read", "deleted_at"}), @ORM\Index(name="fk_notification_1_idx", columns={"notification_type_id"}), @ORM\Index(name="fk_notification_3_idx", columns={"notification_level_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class Notification
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
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=false)
     */
    private $isRead = '0';

    /**
     * @var \NotificationType
     *
     * @ORM\ManyToOne(targetEntity="NotificationType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_type_id", referencedColumnName="id")
     * })
     */
    private $notificationType;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \NotificationLevel
     *
     * @ORM\ManyToOne(targetEntity="NotificationLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_level_id", referencedColumnName="id")
     * })
     */
    private $notificationLevel;


}
