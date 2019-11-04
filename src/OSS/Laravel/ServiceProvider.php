<?php

namespace OSS\Laravel;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use OSS\OssClient;

class ServiceProvider extends SupportServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'oss'
        );

        $this->app->singleton('oss', function ($app) {
            $config = $app->make('config')->get('oss');
            return new OssClient($config['id'], $config['key'], $config['endpoint']);
        });
    }
}
