<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SyncableCompanies
 *
 * @ORM\Table(name="syncable_companies", indexes={@ORM\Index(name="company_id", columns={"company_id"})})
 * @ORM\Entity
 */
class SyncableCompanies
{
    /**
     * @var \Company
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}
