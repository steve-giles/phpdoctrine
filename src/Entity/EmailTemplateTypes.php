<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplateTypes
 *
 * @ORM\Table(name="email_template_types", uniqueConstraints={@ORM\UniqueConstraint(name="constant", columns={"constant"})})
 * @ORM\Entity
 */
class EmailTemplateTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="email_template_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailTemplateTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_template_type", type="string", length=64, nullable=false, options={"comment"="Email template type print name"})
     */
    private $emailTemplateType;

    /**
     * @var string
     *
     * @ORM\Column(name="constant", type="string", length=64, nullable=false, options={"comment"="Email template type search name"})
     */
    private $constant;


}
