<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="FK_user_referral_source_id", columns={"referral_source_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="is_admin", columns={"is_admin"}), @ORM\Index(name="email_address", columns={"email_address", "firstname", "lastname", "deleted_at"}), @ORM\Index(name="asha_code", columns={"asha_code", "deleted_at"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=false)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=128, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=50, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_password_hashed", type="boolean", nullable=true)
     */
    private $isPasswordHashed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refer_details", type="string", length=100, nullable=true)
     */
    private $referDetails;

    /**
     * @var bool
     *
     * @ORM\Column(name="has_confirmed_email", type="boolean", nullable=false)
     */
    private $hasConfirmedEmail = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="has_confirmed_licenses", type="boolean", nullable=false)
     */
    private $hasConfirmedLicenses = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="has_changed_password", type="boolean", nullable=false)
     */
    private $hasChangedPassword = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_order_completed_at", type="datetime", nullable=true)
     */
    private $firstOrderCompletedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_original_user_id", type="integer", nullable=true)
     */
    private $originalUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=true)
     */
    private $emailAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_subscribed_to_newsletter", type="boolean", nullable=false)
     */
    private $isSubscribedToNewsletter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="most_recent_order_completed_at", type="datetime", nullable=true)
     */
    private $mostRecentOrderCompletedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="merged_user_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $mergedUserId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="asha_code", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ashaCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nab_id", type="string", length=64, nullable=true)
     */
    private $nabId;

    /**
     * @var \ReferralSource
     *
     * @ORM\ManyToOne(targetEntity="ReferralSource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referral_source_id", referencedColumnName="id")
     * })
     */
    private $referralSource;



    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->userPhone = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
