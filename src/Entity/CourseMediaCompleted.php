<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseMediaCompleted
 *
 * @ORM\Table(name="course_media_completed", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CourseMediaCompleted
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_on", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP","comment"="Datetime video was completed."})
     */
    private $completedOn = 'CURRENT_TIMESTAMP';

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

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;


}
