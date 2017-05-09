<?php

namespace ApiArchitect\Log\Abstracts\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractLog
 *
 * @ORM\MappedSuperclass
 *
 * @package ApiArchitect\Log
 * @author James Kirkby <hello@jameskirkby.com>
 */
abstract class AbstractLog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
