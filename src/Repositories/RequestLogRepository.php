<?php

namespace ApiArchitect\Log\Repositories;

use ApiArchitect\Log\Entities\RequestLog;
use ApiArchitect\Compass\Repositories\AbstractRepository;

/**
 * Class RequestLogRepository
 *
 * @package app\Repositories\RequestLogRepository
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogRepository extends AbstractRepository
{

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return RequestLog
     */
    public function createLog(\Psr\Http\Message\ServerRequestInterface $request)
    {
        $requestLog = new RequestLog();
        $requestLog->setRoute(json_encode($request->getUri()));
        $requestLog->setMethod(json_encode($request->getMethod()));
        $requestLog->setParams(json_encode($request->getQueryParams()));
        $requestLog->setVersion('v1');//@TODO get this from uri or something similar
        $this->_em->persist($requestLog);
        $this->_em->flush();
        return $requestLog;
    }

    /**
     * @param array $data
     * @return bool
     */

//    public function create(array $data)
//    {
//        return false;
//    }

//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @return mixed
//     * @deprecated apiKeys no longer used
//     */
//    public function apiKey()
//    {
//        return $this->hasOne(Config::get('apiguard.model'));
//    }

//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @param $apiKeyId
//     * @param $routeAction
//     * @param $method
//     * @param $keyIncrementTime
//     * @return mixed
//     */
//    public function countApiKeyRequests($apiKeyId, $routeAction, $method, $keyIncrementTime)
//    {
//        return self::where('api_key_id', '=', $apiKeyId)
//            ->where('route', '=', $routeAction)
//            ->where('method', '=', $method)
//            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
//            ->where('created_at', '<=', date('Y-m-d H:i:s'))
//            ->count();
//    }

//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @param $routeAction
//     * @param $method
//     * @param $keyIncrementTime
//     * @return mixed
//     */
//    public function countMethodRequests($routeAction, $method, $keyIncrementTime)
//    {
//        return self::where('route', '=', $routeAction)
//            ->where('method', '=', $method)
//            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
//            ->where('created_at', '<=', date('Y-m-d H:i:s'))
//            ->count();
//    }

    /**
     * @param int $id
     * @param array $updatedEntity
     * @return bool
     * @deprecated
     */
    public function update($id, array $updatedEntity)
    {
        return false;
    }
}