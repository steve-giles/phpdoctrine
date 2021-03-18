<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZendeskUsersOrganizations
 *
 * @ORM\Table(name="zendesk_users_organizations", uniqueConstraints={@ORM\UniqueConstraint(name="zendesk_user_id", columns={"zendesk_user_id"})}, indexes={@ORM\Index(name="zendesk_organization", columns={"zendesk_organization"})})
 * @ORM\Entity
 */
class ZendeskUsersOrganizations
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zendesk_user_id", type="bigint", nullable=true)
     */
    private $zendeskUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zendesk_organization", type="string", length=32, nullable=true)
     */
    private $zendeskOrganization;


}
