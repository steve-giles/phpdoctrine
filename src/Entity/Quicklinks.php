<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quicklinks
 *
 * @ORM\Table(name="quicklinks", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Quicklinks
{
    /**
     * @var string
     *
     * @ORM\Column(name="quicklink_hash", type="string", length=128, nullable=false, options={"comment"="Hash of actual quicklink."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $quicklinkHash;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Date and time of row creation."})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expire_date", type="datetime", nullable=true, options={"comment"="Expiration date of this row."})
     */
    private $expireDate;

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
