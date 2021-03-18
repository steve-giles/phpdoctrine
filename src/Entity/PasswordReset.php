<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordReset
 *
 * @ORM\Table(name="password_reset", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class PasswordReset
{
    /**
     * @var int
     *
     * @ORM\Column(name="password_reset_id", type="integer", nullable=false, options={"comment"="password reset id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $passwordResetId;

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
