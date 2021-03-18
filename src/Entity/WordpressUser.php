<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WordpressUser
 *
 * @ORM\Table(name="wordpress_user", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class WordpressUser
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
     * @var int
     *
     * @ORM\Column(name="wordpress_id", type="integer", nullable=false)
     */
    private $wordpressId;

    /**
     * @var string
     *
     * @ORM\Column(name="wordpress_referer", type="text", length=65535, nullable=false)
     */
    private $wordpressReferer;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}
