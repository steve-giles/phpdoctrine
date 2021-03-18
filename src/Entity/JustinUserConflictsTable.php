<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JustinUserConflictsTable
 *
 * @ORM\Table(name="justin_user_conflicts_table")
 * @ORM\Entity
 */
class JustinUserConflictsTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="is_duplicate", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $isDuplicate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="original_user_id", type="integer", nullable=false)
     */
    private $originalUserId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="original_user_username", type="string", length=128, nullable=true)
     */
    private $originalUserUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="original_user_firstname", type="string", length=100, nullable=false)
     */
    private $originalUserFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="original_user_lastname", type="string", length=100, nullable=false)
     */
    private $originalUserLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="original_user_email_address", type="string", length=250, nullable=true, options={"comment"="User email address"})
     */
    private $originalUserEmailAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="email_user_id", type="integer", nullable=false, options={"comment"="Primary key user table"})
     */
    private $emailUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_user_username", type="string", length=128, nullable=true)
     */
    private $emailUserUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user_firstname", type="string", length=100, nullable=false)
     */
    private $emailUserFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user_lastname", type="string", length=100, nullable=false)
     */
    private $emailUserLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user_email_address", type="string", length=250, nullable=false, options={"comment"="User email address"})
     */
    private $emailUserEmailAddress;


}
