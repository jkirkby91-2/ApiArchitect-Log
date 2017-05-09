<?php

namespace ApiArchitect\Log\Events;

use ApiArchitect\Log\Abstracts\Entities\AbstractLog;

/**
 * Class RequestLogEvent
 *
 * @package app\Events
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class RequestLogEvent extends AbstractLog
{
    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}