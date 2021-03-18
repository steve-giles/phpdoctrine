<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersZendeskEmailAddress
 *
 * @ORM\Table(name="users_zendesk_email_address", indexes={@ORM\Index(name="zendesk_id", columns={"zendesk_id"})})
 * @ORM\Entity
 */
class UsersZendeskEmailAddress
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="processed", type="datetime", nullable=true, options={"comment"="Datetime email address was uploaded to zendesk"})
     */
    private $processed;

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

    /**
     * @var \ZendeskIds
     *
     * @ORM\ManyToOne(targetEntity="ZendeskIds")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zendesk_id", referencedColumnName="zendesk_id")
     * })
     */
    private $zendesk;


}
