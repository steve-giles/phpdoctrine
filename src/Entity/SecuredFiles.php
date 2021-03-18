<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecuredFiles
 *
 * @ORM\Table(name="secured_files", indexes={@ORM\Index(name="created_at", columns={"created_at"})})
 * @ORM\Entity
 */
class SecuredFiles
{
    /**
     * @var string
     *
     * @ORM\Column(name="file_hash", type="string", length=32, nullable=false, options={"fixed"=true,"comment"="SHA1 hash of file for download."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fileHash;

    /**
     * @var string
     *
     * @ORM\Column(name="access_key", type="string", length=64, nullable=false, options={"comment"="User authentication key for download."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accessKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="pathname", type="string", length=256, nullable=false, options={"comment"="File path."})
     */
    private $pathname;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=256, nullable=false, options={"comment"="File name."})
     */
    private $fileName;


}
