<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DelUsers
 *
 * @ORM\Table(name="del_users")
 * @ORM\Entity
 */
class DelUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';


}
