<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclMemoryObjects
 *
 * @ORM\Table(name="acl_memory_objects", uniqueConstraints={@ORM\UniqueConstraint(name="company_obj_hash", columns={"company_id", "object_hash"}), @ORM\UniqueConstraint(name="company_id", columns={"company_id"})})
 * @ORM\Entity
 */
class AclMemoryObjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="memory_object_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memoryObjectId;

    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false, options={"comment"="ID Of the company owning the object, this should not be a foreign key"})
     */
    private $companyId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_hash", type="string", length=33, nullable=false)
     */
    private $objectHash;

    /**
     * @var string
     *
     * @ORM\Column(name="serialized_object", type="blob", length=0, nullable=false, options={"comment"="Serialized version of the ACL object"})
     */
    private $serializedObject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';


}
