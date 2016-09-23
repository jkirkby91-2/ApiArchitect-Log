<?php

namespace ApiArchitect\Log\Contracts;

/**
 * Interface DatabaseLogContract
 *
 * @package app\Contracts
 * @author James Kirkby <hello@jameskirkby.com>
 */
interface DatabaseLogContract
{
    /**
     * @return mixed
     */
    public function getUsername();
}