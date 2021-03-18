<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthClient
 *
 * @ORM\Table(name="oauth_client")
 * @ORM\Entity
 */
class OauthClient
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
     * @ORM\Column(name="random_id", type="string", length=255, nullable=false)
     */
    private $randomId;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255, nullable=false)
     */
    private $secret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redirect_uris", type="string", length=255, nullable=true)
     */
    private $redirectUris;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allowed_grant_types", type="string", length=255, nullable=true)
     */
    private $allowedGrantTypes;


}
