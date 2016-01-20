<?php

namespace Kiwi\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommonEntity
 */
class CommonEntity
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;
}
