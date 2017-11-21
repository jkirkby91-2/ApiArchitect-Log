<?php

namespace ApiArchitect\Log\Entities;

use ApiArchitect\Log\Abstracts\Entities\AbstractLog;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Util\ClassUtils;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

/**
 * Class RequestLog
 *
 * @package app\Entities
 * @author James Kirkby <hello@jameskirkby.com>
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="app\Log\Repositories\RequestLogRepository")
 * @ORM\Table(name="request_log", indexes={@ORM\Index(name="request_log_search_idx", columns={"route", "id"})})
 */
class RequestLog extends AbstractLog
{

    /**
     * @var
     *
     * @Gedmo\Blameable(on="create")
     * @Gedmo\IpTraceable(on="create")
     * @ORM\Column(type="string", unique=false, nullable=false)
     */
    protected $route;

    /**
     * @var
     *
     * @Gedmo\Blameable(on="create")
     * @Gedmo\IpTraceable(on="create")
     * @ORM\Column(type="string", unique=false, nullable=false)
     */
    protected $method;

    /**
     * @var
     *
     * @ORM\Column(type="string", unique=false, nullable=false)
     */
    protected $params;

    /**
     * @var
     *
     * @ORM\Column(type="string", unique=false, nullable=false)
     */
    protected $version;

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     * @return RequestLog
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}