<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company", uniqueConstraints={@ORM\UniqueConstraint(name="name_deleted_at_IDX", columns={"name", "deleted_at"}), @ORM\UniqueConstraint(name="unique_api_key", columns={"api_key"})}, indexes={@ORM\Index(name="deleted_at", columns={"deleted_at"}), @ORM\Index(name="copied_from_id", columns={"copied_from_id"}), @ORM\Index(name="company_theme_id_fk", columns={"theme_id"}), @ORM\Index(name="company_contract_status_id", columns={"company_contract_status_id"}), @ORM\Index(name="api_key", columns={"api_key"})})
 * @ORM\Entity
 */
class Company
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
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="support_email", type="string", length=255, nullable=true)
     */
    private $supportEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embedded_css", type="text", length=65535, nullable=true)
     */
    private $embeddedCss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asset_folder_location", type="string", length=255, nullable=true)
     */
    private $assetFolderLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_watermark", type="string", length=255, nullable=true)
     */
    private $usernameWatermark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_label", type="string", length=255, nullable=true)
     */
    private $usernameLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="example_username", type="string", length=255, nullable=true)
     */
    private $exampleUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="username_type", type="string", length=10, nullable=false)
     */
    private $usernameType;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_url", type="string", length=255, nullable=false)
     */
    private $primaryUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_search_type", type="string", length=255, nullable=true)
     */
    private $courseSearchType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_search_link", type="string", length=255, nullable=true)
     */
    private $courseSearchLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ecommerce_text", type="string", length=255, nullable=true)
     */
    private $ecommerceText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ecommerce_link", type="string", length=255, nullable=true)
     */
    private $ecommerceLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="white_label_certificate_cc_addresses", type="string", length=255, nullable=true)
     */
    private $whiteLabelCertificateCcAddresses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="certificate_cc_addresses", type="string", length=255, nullable=true)
     */
    private $certificateCcAddresses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_welcome_message", type="text", length=65535, nullable=true)
     */
    private $loginWelcomeMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complete_homepage_replacement_message", type="text", length=65535, nullable=true)
     */
    private $completeHomepageReplacementMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="demo"})
     */
    private $status = 'demo';

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
     * @var string|null
     *
     * @ORM\Column(name="api_key", type="string", length=255, nullable=true)
     */
    private $apiKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_input_label", type="string", length=50, nullable=true)
     */
    private $usernameInputLabel;

    /**
     * @var int
     *
     * @ORM\Column(name="username_input_min_length", type="integer", nullable=false, options={"default"="1"})
     */
    private $usernameInputMinLength = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="username_input_max_length", type="integer", nullable=false, options={"default"="50"})
     */
    private $usernameInputMaxLength = '50';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_input_rules", type="string", length=255, nullable=true)
     */
    private $usernameInputRules;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_prefix", type="string", length=50, nullable=true)
     */
    private $usernamePrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asha_provider_code", type="string", length=4, nullable=true, options={"default"="ACGB"})
     */
    private $ashaProviderCode = 'ACGB';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ce_broker_provider_code", type="integer", nullable=true, options={"default"="8744","unsigned"=true})
     */
    private $ceBrokerProviderCode = '8744';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_image_url", type="text", length=0, nullable=true)
     */
    private $companyImageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_cert_image_url", type="text", length=0, nullable=true)
     */
    private $companyCertImageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to_email", type="text", length=0, nullable=true)
     */
    private $replyToEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_sender_name", type="text", length=0, nullable=true)
     */
    private $emailSenderName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to_email_sender_name", type="text", length=0, nullable=true)
     */
    private $replyToEmailSenderName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_length_in_days", type="integer", nullable=true)
     */
    private $subscriptionLengthInDays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="organizational_unit_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $organizationalUnitId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="settings_json", type="text", length=65535, nullable=true)
     */
    private $settingsJson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_type", type="string", length=255, nullable=true, options={"default"="SUBSCRIPTION"})
     */
    private $companyType = 'SUBSCRIPTION';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="display_receipt_links_in_lms", type="boolean", nullable=true, options={"default"="1"})
     */
    private $displayReceiptLinksInLms = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="disable_corporate_email", type="boolean", nullable=false)
     */
    private $disableCorporateEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vanilla_forum_url", type="string", length=255, nullable=true)
     */
    private $vanillaForumUrl;

    /**
     * @var \CompanyContractStatus
     *
     * @ORM\ManyToOne(targetEntity="CompanyContractStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_contract_status_id", referencedColumnName="id")
     * })
     */
    private $companyContractStatus;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="copied_from_id", referencedColumnName="id")
     * })
     */
    private $copiedFrom;

    /**
     * @var \Theme
     *
     * @ORM\ManyToOne(targetEntity="Theme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     * })
     */
    private $theme;


}
