<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchResult
 *
 * @ORM\Table(name="batch_result", indexes={@ORM\Index(name="IDX_C091A763B1355962", columns={"batch_process_id"})})
 * @ORM\Entity
 */
class BatchResult
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
     * @var string|null
     *
     * @ORM\Column(name="entity_name", type="string", length=50, nullable=true)
     */
    private $entityName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity_id", type="integer", nullable=true)
     */
    private $entityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_text", type="text", length=0, nullable=true)
     */
    private $responseText;

    /**
     * @var int
     *
     * @ORM\Column(name="status_code", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $statusCode;

    /**
     * @var int
     *
     * @ORM\Column(name="row_number", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rowNumber;

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
     * @var string|null
     *
     * @ORM\Column(name="action_performed", type="string", length=50, nullable=true)
     */
    private $actionPerformed;

    /**
     * @var \BatchProcess
     *
     * @ORM\ManyToOne(targetEntity="BatchProcess")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_process_id", referencedColumnName="id")
     * })
     */
    private $batchProcess;


}
