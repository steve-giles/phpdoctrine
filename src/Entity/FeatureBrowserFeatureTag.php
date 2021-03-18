<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeatureBrowserFeatureTag
 *
 * @ORM\Table(name="feature_browser_feature_tag", indexes={@ORM\Index(name="tag_id", columns={"tag_id"}), @ORM\Index(name="feature_id", columns={"feature_id"})})
 * @ORM\Entity
 */
class FeatureBrowserFeatureTag
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
     * @ORM\Column(name="feature_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $featureId;

    /**
     * @var int
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tagId;


}
