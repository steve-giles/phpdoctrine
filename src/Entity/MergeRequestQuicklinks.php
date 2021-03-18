<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MergeRequestQuicklinks
 *
 * @ORM\Table(name="merge_request_quicklinks", indexes={@ORM\Index(name="new_user_id", columns={"new_user_id"}), @ORM\Index(name="company_id", columns={"company_id"}), @ORM\Index(name="original_user_id", columns={"original_user_id"})})
 * @ORM\Entity
 */
class MergeRequestQuicklinks
{
    /**
     * @var \Quicklinks
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quicklinks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quicklink_hash", referencedColumnName="quicklink_hash")
     * })
     */
    private $quicklinkHash;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="original_user_id", referencedColumnName="id")
     * })
     */
    private $originalUser;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="new_user_id", referencedColumnName="id")
     * })
     */
    private $newUser;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
