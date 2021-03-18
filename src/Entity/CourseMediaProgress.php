<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseMediaProgress
 *
 * @ORM\Table(name="course_media_progress")
 * @ORM\Entity
 */
class CourseMediaProgress
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_on", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP","comment"="Datetime video was completed."})
     */
    private $completedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_progress", type="decimal", precision=5, scale=2, nullable=true, options={"default"="0.00","comment"="Percent of media progress"})
     */
    private $mediaProgress = '0.00';

    /**
     * @var \OrderItem
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="OrderItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_item_id", referencedColumnName="id")
     * })
     */
    private $orderItem;


}
