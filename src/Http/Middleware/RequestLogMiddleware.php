<?php

namespace ApiArchitect\Log\Http\Middleware;

use Closure;
use Psr\Http\Message\ServerRequestInterface;
use ApiArchitect\Log\Events\RequestLogEvent;
use ApiArchitect\Log\Repositories\RequestLogRepository;

/**
 * Class RequestLog
 *
 * @package Api\Middleware
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class RequestLogMiddleware
{

    /**
     * Request log middleware constructor.
     *
     * @param RequestLogEvent $requestLogEvent
     * @param RequestLogRepository $repo
     */
    public function __construct(RequestLogEvent $requestLogEvent,RequestLogRepository $repo)
    {
        $this->requestEvent = $requestLogEvent;
        $this->repository = $repo;
    }

    /**
     * @param ServerRequest $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(ServerRequestInterface $request, Closure $next)
    {
        $this->repository->createLog($request);
        return $next($request);
    }
}