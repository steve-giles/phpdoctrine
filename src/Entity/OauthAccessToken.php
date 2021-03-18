<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessToken
 *
 * @ORM\Table(name="oauth_access_token", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="expires_at_IDX", columns={"expires_at"}), @ORM\Index(name="client_id", columns={"client_id"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class OauthAccessToken
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=86, nullable=false, options={"fixed"=true,"comment"="Was VARCHAR(255).  
                                                                                  DB shows all to be 86 long."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $token;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="expires_at", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=4, nullable=false, options={"fixed"=true,"comment"="Was VARCHAR(255).  
                                                                                      DB shows all to be 4 long."})
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
