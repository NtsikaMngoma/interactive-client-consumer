<?php

namespace InteractiveClient\ApiConsumer;

use Illuminate\Support\ServiceProvider;
use InteractiveClient\ApiConsumer\Commands\ApiConsumerEndpointMakeCommand;
use InteractiveClient\ApiConsumer\Commands\ApiConsumerMakeCollectionCallback;
use InteractiveClient\ApiConsumer\Commands\ApiConsumerMakeCommand;
use InteractiveClient\ApiConsumer\Commands\ApiConsumerShapeMakeCommand;

class ApiConsumerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/api-consumers.php' => config_path('api-consumers.php'),
            ], 'config');

            $this->commands([
                ApiConsumerMakeCommand::class,
                ApiConsumerEndpointMakeCommand::class,
                ApiConsumerShapeMakeCommand::class,
                ApiConsumerMakeCollectionCallback::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/api-consumers.php', 'api-consumers');
    }
}
