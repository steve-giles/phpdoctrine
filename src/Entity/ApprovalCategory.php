<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApprovalCategory
 *
 * @ORM\Table(name="approval_category", uniqueConstraints={@ORM\UniqueConstraint(name="unq_comment", columns={"name"})})
 * @ORM\Entity
 */
class ApprovalCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;


}
