<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSummaryInformation
 *
 * @ORM\Table(name="user_summary_information", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_UNIQUE", columns={"user_id"})})
 * @ORM\Entity
 */
class UserSummaryInformation
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="license1_summary", type="string", length=100, nullable=true)
     */
    private $license1Summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="license2_summary", type="string", length=100, nullable=true)
     */
    private $license2Summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="license3_summary", type="string", length=100, nullable=true)
     */
    private $license3Summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_summary", type="string", length=100, nullable=true)
     */
    private $addressSummary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_summary", type="string", length=20, nullable=true)
     */
    private $phoneSummary;

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
