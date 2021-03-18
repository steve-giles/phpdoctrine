<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="referral_user_id", columns={"referral_user_id"}), @ORM\Index(name="order_mode_id", columns={"order_mode_id"}), @ORM\Index(name="order_status_id", columns={"order_status_id"}), @ORM\Index(name="FK_order_promo", columns={"promo_id"}), @ORM\Index(name="user_id_3", columns={"user_id", "completed_on"}), @ORM\Index(name="order_created_at", columns={"created_at"}), @ORM\Index(name="referral_source_id", columns={"referral_source_id"}), @ORM\Index(name="shipping_method_id", columns={"shipping_method_id"}), @ORM\Index(name="company_id", columns={"company_id"}), @ORM\Index(name="user_id_2", columns={"user_id", "order_status_id"}), @ORM\Index(name="IDX_E52FFDEEA76ED395", columns={"user_id"})})
 */
class Orders
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
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="discount_total", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $discountTotal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="sub_total", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subTotal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="total_override", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalOverride = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="referral_source_other", type="string", length=100, nullable=true)
     */
    private $referralSourceOther;

    /**
     * @var string|null
     *
     * @ORM\Column(name="credit_card_last_four", type="string", length=4, nullable=true)
     */
    private $creditCardLastFour;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_total", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $shippingTotal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="authorizenet_transaction_id", type="string", length=32, nullable=false)
     */
    private $authorizenetTransactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="authnet_transaction_response", type="string", length=128, nullable=false)
     */
    private $authnetTransactionResponse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_on", type="datetime", nullable=true)
     */
    private $completedOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

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
     * @var \ReferralSource
     *
     * @ORM\ManyToOne(targetEntity="ReferralSource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referral_source_id", referencedColumnName="id")
     * })
     */
    private $referralSource;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \OrderStatus
     *
     * @ORM\ManyToOne(targetEntity="OrderStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $orderStatus;

    /**
     * @var \Promo
     *
     * @ORM\ManyToOne(targetEntity="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo_id", referencedColumnName="id")
     * })
     */
    private $promo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referral_user_id", referencedColumnName="id")
     * })
     */
    private $referralUser;

    /**
     * @var \ShippingMethod
     *
     * @ORM\ManyToOne(targetEntity="ShippingMethod")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_method_id", referencedColumnName="id")
     * })
     */
    private $shippingMethod;

    /**
     * @var \OrderMode
     *
     * @ORM\ManyToOne(targetEntity="OrderMode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_mode_id", referencedColumnName="id")
     * })
     */
    private $orderMode;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt ;
    }

    /**
     * @return string
     */
    public function getCreatedAtFormatted()
    {
        return $this->getCreatedAt()->format('m/d/Y');
    }

    /**
     * @return OrderStatusInterface
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

}
