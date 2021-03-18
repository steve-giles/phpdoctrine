<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserScenarioTag
 *
 * @ORM\Table(name="feature_browser_scenario_tag", indexes={@ORM\Index(name="tag_id", columns={"tag_id"}), @ORM\Index(name="scenario_id", columns={"scenario_id"})})
 * @ORM\Entity
 */
class FeatureBrowserScenarioTag
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
     * @var int
     *
     * @ORM\Column(name="scenario_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $scenarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tagId;


}
