<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPrimaryEmails
 *
 * @ORM\Table(name="user_primary_emails", indexes={@ORM\Index(name="user_email_id_idx", columns={"user_email_id"})})
 * @ORM\Entity
 */
class UserPrimaryEmails
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \UserEmails
     *
     * @ORM\ManyToOne(targetEntity="UserEmails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_email_id", referencedColumnName="user_email_id")
     * })
     */
    private $userEmail;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
