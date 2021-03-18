<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersTemp
 *
 * @ORM\Table(name="users_temp")
 * @ORM\Entity
 */
class UsersTemp
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
