<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserScenario
 *
 * @ORM\Table(name="feature_browser_scenario", indexes={@ORM\Index(name="feature_id", columns={"feature_id"}), @ORM\Index(name="app_version_updated", columns={"app_version_updated"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="feature_browser_load_id", columns={"feature_browser_load_id"}), @ORM\Index(name="app_version_introduced", columns={"app_version_introduced"}), @ORM\Index(name="app_version_removed", columns={"app_version_removed"})})
 * @ORM\Entity
 */
class FeatureBrowserScenario
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="feature_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $featureId;

    /**
     * @var int
     *
     * @ORM\Column(name="app_version_introduced", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $appVersionIntroduced;

    /**
     * @var int|null
     *
     * @ORM\Column(name="app_version_updated", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $appVersionUpdated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="app_version_removed", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $appVersionRemoved;

    /**
     * @var int
     *
     * @ORM\Column(name="feature_browser_load_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $featureBrowserLoadId;


}
