<?php

namespace App\Providers;

use App\Jobs\RabbitTestJob;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        $this->app->bindMethod([RabbitTestJob::class, 'handle'], function ($job){
//            return $job->handle();
//        });
    }
}
