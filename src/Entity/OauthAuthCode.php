<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCode
 *
 * @ORM\Table(name="oauth_auth_code", indexes={@ORM\Index(name="IDX_4D12F0E0A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_4D12F0E019EB6921", columns={"client_id"})})
 * @ORM\Entity
 */
class OauthAuthCode
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
     * @ORM\Column(name="redirect_uri", type="string", length=255, nullable=false)
     */
    private $redirectUri;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var int
     *
     * @ORM\Column(name="expires_at", type="integer", nullable=false)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255, nullable=false)
     */
    private $scope;

    /**
     * @var \OauthClient
     *
     * @ORM\ManyToOne(targetEntity="OauthClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
