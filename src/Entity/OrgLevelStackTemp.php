<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgLevelStackTemp
 *
 * @ORM\Table(name="org_level_stack_temp")
 * @ORM\Entity
 */
class OrgLevelStackTemp
{
    /**
     * @var int
     *
     * @ORM\Column(name="organizational_unit_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $organizationalUnitId;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;


}
