<?php

namespace ApiArchitect\Log\Providers;

use ApiArchitect\Log\Repositories\RequestLogRepository;
use ApiArchitect\Log\Entities\RequestLog;

/**
 * Class ApiArchitectLogServiceProvider
 *
 * @package app\Providers
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogRepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //inject deps to RequestLogRepository
        $this->app->bind(RequestLogRepository::class, function($app) {
            // This is what Doctrine's EntityRepository needs in its constructor.
            return new RequestLogRepository(
                $app['em'],
                $app['em']->getClassMetaData(RequestLog::class)
            );
        });

        //make ioc aware of the repo
//        $this->app->make('ApiArchitect\Log\Repositories\RequestLogRepository');
    }

    /**
     * Get the services provided by the provider since we are deferring load.
     *
     * @return array
     */
    public function provides()
    {
        return ['ApiArchitect\Log\Repositories\RequestLogRepository'];
    }
}