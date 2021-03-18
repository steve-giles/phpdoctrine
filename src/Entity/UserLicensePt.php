<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLicensePt
 *
 * @ORM\Table(name="user_license_pt")
 * @ORM\Entity
 */
class UserLicensePt
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stateId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="license_type_id", type="integer", nullable=true)
     */
    private $licenseTypeId;


}
