<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrganizationalUnitPaths
 *
 * @ORM\Table(name="organizational_unit_paths", indexes={@ORM\Index(name="IDX_64B14BE7FB84408A", columns={"organizational_unit_id"})})
 * @ORM\Entity
 */
class OrganizationalUnitPaths
{
    /**
     * @var string
     *
     * @ORM\Column(name="delimiter", type="string", length=8, nullable=false, options={"comment"="Path delimiter."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $delimiter;

    /**
     * @var string
     *
     * @ORM\Column(name="organizational_unit_path", type="text", length=65535, nullable=false, options={"comment"="Cached organizational unit path."})
     */
    private $organizationalUnitPath;

    /**
     * @var \OrganizationalUnit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="OrganizationalUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organizational_unit_id", referencedColumnName="id")
     * })
     */
    private $organizationalUnit;


}
