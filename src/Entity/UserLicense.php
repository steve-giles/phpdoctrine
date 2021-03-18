<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLicense
 *
 * @ORM\Table(name="user_license", indexes={@ORM\Index(name="FK_user_license_license_type_id", columns={"license_type_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="license_people_id", columns={"user_id"}), @ORM\Index(name="FK_user_license_state_id", columns={"state_id"}), @ORM\Index(name="user_id", columns={"user_id", "deleted_at"})})
 * @ORM\Entity
 */
class UserLicense
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
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=20, nullable=true)
     */
    private $number;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_on", type="date", nullable=true)
     */
    private $expiresOn;

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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var \LicenseType
     *
     * @ORM\ManyToOne(targetEntity="LicenseType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license_type_id", referencedColumnName="id")
     * })
     */
    private $licenseType;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

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
