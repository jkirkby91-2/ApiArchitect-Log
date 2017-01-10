<?php

namespace ApiArchitect\Log\Events;

use ApiArchitect\Compass\Abstracts\LogEntryAbstract;

/**
 * Class RequestLogEvent
 *
 * @package app\Events
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogEvent extends LogEntryAbstract
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