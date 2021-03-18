<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AshaExtract
 *
 * @ORM\Table(name="asha_extract", indexes={@ORM\Index(name="file_name", columns={"file_name"})})
 * @ORM\Entity
 */
class AshaExtract
{
    /**
     * @var int
     *
     * @ORM\Column(name="pkey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkey;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=18, nullable=false, options={"fixed"=true})
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="record", type="text", length=65535, nullable=false)
     */
    private $record;


}
