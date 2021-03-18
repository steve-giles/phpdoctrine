<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAddress
 *
 * @ORM\Table(name="user_address", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="state_id", columns={"state_id"}), @ORM\Index(name="user_id", columns={"user_id", "address_type_id", "deleted_at"}), @ORM\Index(name="country_id", columns={"country_id"}), @ORM\Index(name="address_type_id", columns={"address_type_id"}), @ORM\Index(name="IDX_5543718BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserAddress
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
     * @ORM\Column(name="address_1", type="string", length=100, nullable=false)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_2", type="string", length=150, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=false)
     */
    private $zip;

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
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \AddressType
     *
     * @ORM\ManyToOne(targetEntity="AddressType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_type_id", referencedColumnName="id")
     * })
     */
    private $addressType;

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
