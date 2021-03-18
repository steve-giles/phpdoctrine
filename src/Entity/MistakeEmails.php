<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MistakeEmails
 *
 * @ORM\Table(name="_mistake_emails")
 * @ORM\Entity
 */
class MistakeEmails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=250, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_names", type="text", length=65535, nullable=true)
     */
    private $courseNames;


}
