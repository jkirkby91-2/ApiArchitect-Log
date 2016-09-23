<?php

namespace ApiArchitect\Log\Providers;

use ApiArchitect\Log\Providers\RequestLogRepositoryServiceProvider;

class LogServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->registerServiceProviders();
        $this->registerMiddleware();
        //@TODO merge doctrine config with an ApiArchitect/Log/config/doctrine.php that defines the entity path for entities in this package
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register Service providers
     */
    public function registerServiceProviders()
    {
        $this->app->register(RequestLogRepositoryServiceProvider::class);
    }

    /**
     * Register middleware
     */
    public function registerMiddleware()
    {
        $this->app->middleware(\ApiArchitect\Log\Http\Middleware\RequestLogMiddleware::class);
    }
}