<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syncer
 *
 * @ORM\Table(name="syncer", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"})})
 * @ORM\Entity
 */
class Syncer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="private_key", type="string", length=255, nullable=true)
     */
    private $privateKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_key", type="string", length=255, nullable=true)
     */
    private $apiKey;

    /**
     * @var string
     *
     * @ORM\Column(name="base_url", type="string", length=255, nullable=false)
     */
    private $baseUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false, options={"default"="3"})
     */
    private $formId = '3';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_sync", type="datetime", nullable=true)
     */
    private $lastSync;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;


}
