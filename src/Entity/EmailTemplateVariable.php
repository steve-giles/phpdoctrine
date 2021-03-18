<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplateVariable
 *
 * @ORM\Table(name="email_template_variable", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C610A8395E237E06", columns={"name"}), @ORM\UniqueConstraint(name="UNIQ_C610A839989D9B62", columns={"slug"})})
 * @ORM\Entity
 */
class EmailTemplateVariable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=30, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;


}
