<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoyaltyOwner
 *
 * @ORM\Table(name="royalty_owner", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="FK_royalty_owner_state_id", columns={"state_id"})})
 * @ORM\Entity
 */
class RoyaltyOwner
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
     * @ORM\Column(name="company", type="string", length=150, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=150, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=150, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="address_1", type="string", length=150, nullable=false)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=150, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=false)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    private $fax;

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
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
