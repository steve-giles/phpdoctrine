<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyUsernames
 *
 * @ORM\Table(name="company_usernames", indexes={@ORM\Index(name="user_company_fk", columns={"user_company_id"})})
 * @ORM\Entity
 */
class CompanyUsernames
{
    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var \UserCompany
     *
     * @ORM\ManyToOne(targetEntity="UserCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_company_id", referencedColumnName="id")
     * })
     */
    private $userCompany;


}
