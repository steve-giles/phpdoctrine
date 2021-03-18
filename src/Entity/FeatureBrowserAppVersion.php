<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserAppVersion
 *
 * @ORM\Table(name="feature_browser_app_version")
 * @ORM\Entity
 */
class FeatureBrowserAppVersion
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
     * @var string|null
     *
     * @ORM\Column(name="app_version", type="string", length=15, nullable=true)
     */
    private $appVersion;


}
