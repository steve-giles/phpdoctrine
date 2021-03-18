<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnrollmentXapiRegistrations
 *
 * @ORM\Table(name="enrollment_xapi_registrations")
 * @ORM\Entity
 */
class EnrollmentXapiRegistrations
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderItemId;

    /**
     * @var string
     *
     * @ORM\Column(name="xapi_registration", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $xapiRegistration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
