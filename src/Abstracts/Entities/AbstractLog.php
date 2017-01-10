<?php

namespace ApiArchitect\Log\Abstracts\Entities;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class LogEntryAbstract
 *
 * @package app\Abstracts
 * @see Gedmo\Loggable\Entity\AbstractLog
 * @author James Kirkby <hello@jameskirkby.com>
 *
 * @ORM\MappedSuperclass
 */
abstract class AbstractLog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected $id;

//    /**
//     * @var \Ramsey\Uuid\Uuid
//     *
//     * @ORM\Column(type="uuid")
//     * @ORM\GeneratedValue(strategy="CUSTOM")
//     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
//     */
//    protected $uid;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

//    /**
//     * @return \Ramsey\Uuid\Uuid
//     */
//    public function getUID()
//    {
//        return $this->uid;
//    }

}