<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="instructional_level_id", columns={"instructional_level_id"}), @ORM\Index(name="company_id_2", columns={"company_id", "deleted_at"}), @ORM\Index(name="type_2", columns={"type", "deleted_at"}), @ORM\Index(name="royalty_owner_id", columns={"royalty_owner_id"}), @ORM\Index(name="type_3", columns={"type", "is_active", "deleted_at"}), @ORM\Index(name="survey_id", columns={"survey_id"}), @ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="boc_instructional_level_id", columns={"boc_instructional_level_id"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="exam_id", columns={"exam_id"}), @ORM\Index(name="item_format_id", columns={"item_format_id"}), @ORM\Index(name="updated_at", columns={"updated_at"}), @ORM\Index(name="copied_from_id", columns={"copied_from_id"}), @ORM\Index(name="IDX_1F1B251E979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class Item
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
     * @ORM\Column(name="atccode", type="string", length=100, nullable=true)
     */
    private $atccode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="version", type="string", length=12, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outline", type="text", length=0, nullable=true)
     */
    private $outline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="online_price", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $onlinePrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_price", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mailPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=100, nullable=true)
     */
    private $code;

    /**
     * @var float|null
     *
     * @ORM\Column(name="hours", type="float", precision=10, scale=2, nullable=true)
     */
    private $hours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="text", length=0, nullable=true)
     */
    private $summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="goals", type="text", length=0, nullable=true)
     */
    private $goals;

    /**
     * @var string|null
     *
     * @ORM\Column(name="broadcast_chat_link", type="text", length=65535, nullable=true)
     */
    private $broadcastChatLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embedded_video", type="text", length=65535, nullable=true)
     */
    private $embeddedVideo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_keywords", type="text", length=0, nullable=true)
     */
    private $seoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_description", type="text", length=0, nullable=true)
     */
    private $seoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asha_code", type="string", length=12, nullable=true)
     */
    private $ashaCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
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
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="format_video_id", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $formatVideoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false, options={"default"="0000-01-01 00:00:00"})
     */
    private $deletedAt = '0000-01-01 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="preview_type", type="string", length=0, nullable=true)
     */
    private $previewType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preview_name", type="string", length=255, nullable=true)
     */
    private $previewName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preview_link", type="string", length=255, nullable=true)
     */
    private $previewLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_summary", type="string", length=100, nullable=true)
     */
    private $authorSummary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mimeo_product_id", type="string", length=255, nullable=true)
     */
    private $mimeoProductId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exam_locked_access_key", type="string", length=64, nullable=true)
     */
    private $examLockedAccessKey;

    /**
     * @var \Exam
     *
     * @ORM\ManyToOne(targetEntity="Exam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exam_id", referencedColumnName="id")
     * })
     */
    private $exam;

    /**
     * @var \Survey
     *
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     * })
     */
    private $survey;

    /**
     * @var \ItemFormat
     *
     * @ORM\ManyToOne(targetEntity="ItemFormat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_format_id", referencedColumnName="id")
     * })
     */
    private $itemFormat;

    /**
     * @var \RoyaltyOwner
     *
     * @ORM\ManyToOne(targetEntity="RoyaltyOwner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="royalty_owner_id", referencedColumnName="id")
     * })
     */
    private $royaltyOwner;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="copied_from_id", referencedColumnName="id")
     * })
     */
    private $copiedFrom;

    /**
     * @var \InstructionalLevel
     *
     * @ORM\ManyToOne(targetEntity="InstructionalLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instructional_level_id", referencedColumnName="id")
     * })
     */
    private $instructionalLevel;

    /**
     * @var \BocInstructionalLevel
     *
     * @ORM\ManyToOne(targetEntity="BocInstructionalLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="boc_instructional_level_id", referencedColumnName="id")
     * })
     */
    private $bocInstructionalLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAtccode(): ?string
    {
        return $this->atccode;
    }

    public function setAtccode(?string $atccode): self
    {
        $this->atccode = $atccode;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOutline(): ?string
    {
        return $this->outline;
    }

    public function setOutline(?string $outline): self
    {
        $this->outline = $outline;

        return $this;
    }

    public function getOnlinePrice(): ?string
    {
        return $this->onlinePrice;
    }

    public function setOnlinePrice(?string $onlinePrice): self
    {
        $this->onlinePrice = $onlinePrice;

        return $this;
    }

    public function getMailPrice(): ?string
    {
        return $this->mailPrice;
    }

    public function setMailPrice(?string $mailPrice): self
    {
        $this->mailPrice = $mailPrice;

        return $this;
    }

    public function getIsFeatured(): ?bool
    {
        return $this->isFeatured;
    }

    public function setIsFeatured(bool $isFeatured): self
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getHours(): ?float
    {
        return $this->hours;
    }

    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getGoals(): ?string
    {
        return $this->goals;
    }

    public function setGoals(?string $goals): self
    {
        $this->goals = $goals;

        return $this;
    }

    public function getBroadcastChatLink(): ?string
    {
        return $this->broadcastChatLink;
    }

    public function setBroadcastChatLink(?string $broadcastChatLink): self
    {
        $this->broadcastChatLink = $broadcastChatLink;

        return $this;
    }

    public function getEmbeddedVideo(): ?string
    {
        return $this->embeddedVideo;
    }

    public function setEmbeddedVideo(?string $embeddedVideo): self
    {
        $this->embeddedVideo = $embeddedVideo;

        return $this;
    }

    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    public function setSeoKeywords(?string $seoKeywords): self
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription(?string $seoDescription): self
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAshaCode(): ?string
    {
        return $this->ashaCode;
    }

    public function setAshaCode(?string $ashaCode): self
    {
        $this->ashaCode = $ashaCode;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedBy(): ?int
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?int $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getFormatVideoId(): ?int
    {
        return $this->formatVideoId;
    }

    public function setFormatVideoId(?int $formatVideoId): self
    {
        $this->formatVideoId = $formatVideoId;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getPreviewType(): ?string
    {
        return $this->previewType;
    }

    public function setPreviewType(?string $previewType): self
    {
        $this->previewType = $previewType;

        return $this;
    }

    public function getPreviewName(): ?string
    {
        return $this->previewName;
    }

    public function setPreviewName(?string $previewName): self
    {
        $this->previewName = $previewName;

        return $this;
    }

    public function getPreviewLink(): ?string
    {
        return $this->previewLink;
    }

    public function setPreviewLink(?string $previewLink): self
    {
        $this->previewLink = $previewLink;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getAuthorSummary(): ?string
    {
        return $this->authorSummary;
    }

    public function setAuthorSummary(?string $authorSummary): self
    {
        $this->authorSummary = $authorSummary;

        return $this;
    }

    public function getMimeoProductId(): ?string
    {
        return $this->mimeoProductId;
    }

    public function setMimeoProductId(?string $mimeoProductId): self
    {
        $this->mimeoProductId = $mimeoProductId;

        return $this;
    }

    public function getExamLockedAccessKey(): ?string
    {
        return $this->examLockedAccessKey;
    }

    public function setExamLockedAccessKey(?string $examLockedAccessKey): self
    {
        $this->examLockedAccessKey = $examLockedAccessKey;

        return $this;
    }

    public function getExam(): ?Exam
    {
        return $this->exam;
    }

    public function setExam(?Exam $exam): self
    {
        $this->exam = $exam;

        return $this;
    }

    public function getSurvey(): ?Survey
    {
        return $this->survey;
    }

    public function setSurvey(?Survey $survey): self
    {
        $this->survey = $survey;

        return $this;
    }

    public function getItemFormat(): ?ItemFormat
    {
        return $this->itemFormat;
    }

    public function setItemFormat(?ItemFormat $itemFormat): self
    {
        $this->itemFormat = $itemFormat;

        return $this;
    }

    public function getRoyaltyOwner(): ?RoyaltyOwner
    {
        return $this->royaltyOwner;
    }

    public function setRoyaltyOwner(?RoyaltyOwner $royaltyOwner): self
    {
        $this->royaltyOwner = $royaltyOwner;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getCopiedFrom(): ?self
    {
        return $this->copiedFrom;
    }

    public function setCopiedFrom(?self $copiedFrom): self
    {
        $this->copiedFrom = $copiedFrom;

        return $this;
    }

    public function getInstructionalLevel(): ?InstructionalLevel
    {
        return $this->instructionalLevel;
    }

    public function setInstructionalLevel(?InstructionalLevel $instructionalLevel): self
    {
        $this->instructionalLevel = $instructionalLevel;

        return $this;
    }

    public function getBocInstructionalLevel(): ?BocInstructionalLevel
    {
        return $this->bocInstructionalLevel;
    }

    public function setBocInstructionalLevel(?BocInstructionalLevel $bocInstructionalLevel): self
    {
        $this->bocInstructionalLevel = $bocInstructionalLevel;

        return $this;
    }


}
