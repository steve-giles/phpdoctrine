<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchProcess
 *
 * @ORM\Table(name="batch_process", indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="IDX_D6CB92CC6BF700BD", columns={"status_id"})})
 * @ORM\Entity
 */
class BatchProcess
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
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", length=0, nullable=false)
     */
    private $metadata;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pid", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $pid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_text", type="text", length=0, nullable=true)
     */
    private $responseText;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entities_created", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $entitiesCreated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entities_updated", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $entitiesUpdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="process_type", type="string", length=100, nullable=true)
     */
    private $processType;

    /**
     * @var \Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;


}
