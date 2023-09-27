<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;


class RiotApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton('RiotApi', function ($app) {
            return new Client([
                'base_uri' => config('services.riot.base_url'),
                'headers' => [
                    'X-Riot-Token' => config('services.riot.api_key'),
                ],
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
