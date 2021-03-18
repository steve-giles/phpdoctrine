<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserDirectory
 *
 * @ORM\Table(name="feature_browser_directory", indexes={@ORM\Index(name="app_version_introduced", columns={"app_version_introduced"}), @ORM\Index(name="app_version_removed", columns={"app_version_removed"}), @ORM\Index(name="feature_browser_load_id", columns={"feature_browser_load_id"}), @ORM\Index(name="app_version_updated", columns={"app_version_updated"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class FeatureBrowserDirectory
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_directory_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $parentDirectoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

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
