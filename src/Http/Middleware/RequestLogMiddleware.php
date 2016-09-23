<?php

namespace ApiArchitect\Log\Http\Middleware;

use Closure;
use Zend\Diactoros\ServerRequest;
use ApiArchitect\Log\Events\RequestLogEvent;
use ApiArchitect\Log\Repositories\RequestLogRepository;

/**
 * Class RequestLog
 *
 * @package Api\Middleware
 * @author James Kirkby <me@jameskirkby.com>
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
    public function handle(ServerRequest $request, Closure $next)
    {
//        dd($request);
//        $guzzleRequest = new \GuzzleHttp\Psr7\ServerRequest($request->getMethod(),$request->getUri(),$request->headers->all(),$request->getContent());
        $this->repository->createLog($request);
        return $next($request);
    }
}