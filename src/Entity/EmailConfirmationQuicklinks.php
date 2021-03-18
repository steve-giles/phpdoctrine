<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailConfirmationQuicklinks
 *
 * @ORM\Table(name="email_confirmation_quicklinks", indexes={@ORM\Index(name="user_email_id", columns={"user_email_id"})})
 * @ORM\Entity
 */
class EmailConfirmationQuicklinks
{
    /**
     * @var \Quicklinks
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quicklinks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quicklink_hash", referencedColumnName="quicklink_hash")
     * })
     */
    private $quicklinkHash;

    /**
     * @var \UserEmails
     *
     * @ORM\ManyToOne(targetEntity="UserEmails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_email_id", referencedColumnName="user_email_id")
     * })
     */
    private $userEmail;


}
