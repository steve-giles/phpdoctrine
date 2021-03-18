<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AshaExtractRef
 *
 * @ORM\Table(name="asha_extract_ref")
 * @ORM\Entity
 */
class AshaExtractRef
{
    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=18, nullable=false, options={"fixed"=true,"comment"="Used both as a key and the dest file name"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=200, nullable=false, options={"comment"="Course users last name"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="asha_code", type="string", length=16, nullable=false, options={"comment"="User asha ID."})
     */
    private $ashaCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_1", type="string", length=100, nullable=true, options={"comment"="Users address line 1"})
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_2", type="string", length=150, nullable=true, options={"comment"="Users address line 2"})
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address_3", type="string", length=1, nullable=false, options={"fixed"=true,"comment"="Always empty string"})
     */
    private $address3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true, options={"comment"="Users city"})
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state_name", type="string", length=100, nullable=true, options={"comment"="Users state"})
     */
    private $stateName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true, options={"comment"="Users zip code"})
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=100, nullable=false, options={"default"="United States","comment"="Users contry"})
     */
    private $countryName = 'United States';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=false, options={"comment"="Users phone number"})
     */
    private $phone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=false, options={"comment"="Users email_address"})
     */
    private $emailAddress = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"comment"="Users CEMS user ID"})
     */
    private $userId;


}
