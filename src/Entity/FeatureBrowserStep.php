<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserStep
 *
 * @ORM\Table(name="feature_browser_step", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="scenario_id", columns={"scenario_id"}), @ORM\Index(name="app_version_updated", columns={"app_version_updated"}), @ORM\Index(name="feature_browser_load_id", columns={"feature_browser_load_id"}), @ORM\Index(name="app_version_introduced", columns={"app_version_introduced"}), @ORM\Index(name="app_version_removed", columns={"app_version_removed"})})
 * @ORM\Entity
 */
class FeatureBrowserStep
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
     * @var int|null
     *
     * @ORM\Column(name="scenario_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $scenarioId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="example_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $exampleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serialized_step", type="text", length=0, nullable=true)
     */
    private $serializedStep;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


}
