<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamResponseXapiStatement
 *
 * @ORM\Table(name="exam_response_xapi_statement")
 * @ORM\Entity
 */
class ExamResponseXapiStatement
{
    /**
     * @var int
     *
     * @ORM\Column(name="exam_response_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $examResponseId;

    /**
     * @var string
     *
     * @ORM\Column(name="xapi_passed_statement_id", type="string", length=255, nullable=false)
     */
    private $xapiPassedStatementId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
