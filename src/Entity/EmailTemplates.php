<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplates
 *
 * @ORM\Table(name="email_templates")
 * @ORM\Entity
 */
class EmailTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="email_template_id", type="integer", nullable=false, options={"comment"="Email template primary key identifier."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true, options={"comment"="User ID of template creator."})
     */
    private $createdBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true, options={"comment"="User ID of template modifier."})
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=150, nullable=false, options={"comment"="Email subject line."})
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false, options={"comment"="Email body template."})
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="Date and time of template creation"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"comment"="Date and time of template modification."})
     */
    private $updatedAt;


}
