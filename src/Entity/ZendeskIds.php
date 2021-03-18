<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZendeskIds
 *
 * @ORM\Table(name="zendesk_ids", uniqueConstraints={@ORM\UniqueConstraint(name="zendesk_id", columns={"zendesk_id"})})
 * @ORM\Entity
 */
class ZendeskIds
{
    /**
     * @var int
     *
     * @ORM\Column(name="zendesk_id", type="bigint", nullable=false, options={"unsigned"=true,"comment"="zendesk user ID"})
     */
    private $zendeskId;

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
