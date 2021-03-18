<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentMetaTag
 *
 * @ORM\Table(name="content_meta_tag", indexes={@ORM\Index(name="IDX_CCFDAF66A88ACCF7", columns={"meta_tag_id"}), @ORM\Index(name="IDX_CCFDAF6684A0A3ED", columns={"content_id"})})
 * @ORM\Entity
 */
class ContentMetaTag
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
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
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
     * @var \Content
     *
     * @ORM\ManyToOne(targetEntity="Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="id")
     * })
     */
    private $content;

    /**
     * @var \MetaTag
     *
     * @ORM\ManyToOne(targetEntity="MetaTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meta_tag_id", referencedColumnName="id")
     * })
     */
    private $metaTag;


}
