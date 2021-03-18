<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserLoad
 *
 * @ORM\Table(name="feature_browser_load", indexes={@ORM\Index(name="app_version_id", columns={"app_version_id"})})
 * @ORM\Entity
 */
class FeatureBrowserLoad
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loaded_at", type="datetime", nullable=true)
     */
    private $loadedAt;

    /**
     * @var \FeatureBrowserAppVersion
     *
     * @ORM\ManyToOne(targetEntity="FeatureBrowserAppVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="app_version_id", referencedColumnName="id")
     * })
     */
    private $appVersion;


}
