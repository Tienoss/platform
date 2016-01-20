<?php

namespace Kiwi\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="t_project")
 * @ORM\Entity(repositoryClass="Kepler\CoreBundle\Entity\Repository\ProjectRepository")
 */
class Project extends CommonEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;
}
