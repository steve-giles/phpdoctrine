<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicenseType
 *
 * @ORM\Table(name="license_type", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="FK_631023A2044870", columns={"license_group_id"})})
 * @ORM\Entity
 */
class LicenseType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="constant", type="string", length=30, nullable=true)
     */
    private $constant;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=false)
     */
    private $isPublic;

    /**
     * @var \LicenseGroup
     *
     * @ORM\ManyToOne(targetEntity="LicenseGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="license_group_id", referencedColumnName="id")
     * })
     */
    private $licenseGroup;


}
