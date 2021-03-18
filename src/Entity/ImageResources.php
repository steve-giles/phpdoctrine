<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageResources
 *
 * @ORM\Table(name="image_resources")
 * @ORM\Entity
 */
class ImageResources
{
    /**
     * @var int
     *
     * @ORM\Column(name="image_resource_id", type="integer", nullable=false, options={"comment"="Image Resource ID."})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imageResourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=256, nullable=false, options={"comment"="Image name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=100, nullable=false, options={"comment"="Extension for file (jpg, jpeg, png, etc...)"})
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=100, nullable=false, options={"comment"="Mime type of the image"})
     */
    private $mimeType;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=false, options={"comment"="Base 64 encoded image"})
     */
    private $data;


}
