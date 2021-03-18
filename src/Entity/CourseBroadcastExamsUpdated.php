<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseBroadcastExamsUpdated
 *
 * @ORM\Table(name="course_broadcast_exams_updated")
 * @ORM\Entity
 */
class CourseBroadcastExamsUpdated
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="rows_affected", type="integer", nullable=false)
     */
    private $rowsAffected;


}
