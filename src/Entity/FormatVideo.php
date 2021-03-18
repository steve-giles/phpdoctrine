<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatVideo
 *
 * @ORM\Table(name="format_video")
 * @ORM\Entity
 */
class FormatVideo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=200, nullable=false)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=200, nullable=false)
     */
    private $link;

    /**
     * @var int
     *
     * @ORM\Column(name="item_format_id", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $itemFormatId;


}
