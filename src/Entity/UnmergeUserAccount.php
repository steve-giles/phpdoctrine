<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnmergeUserAccount
 *
 * @ORM\Table(name="unmerge_user_account")
 * @ORM\Entity
 */
class UnmergeUserAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderItemId;


}
