<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEmails
 *
 * @ORM\Table(name="user_emails", uniqueConstraints={@ORM\UniqueConstraint(name="email_address", columns={"email_address"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserEmails
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_email_id", type="integer", nullable=false, options={"comment"="Primary key"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userEmailId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=false, options={"comment"="User email address"})
     */
    private $emailAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_confirmed", type="boolean", nullable=false, options={"comment"="email confirmation flag"})
     */
    private $isConfirmed = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
