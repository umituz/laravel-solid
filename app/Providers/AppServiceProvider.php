<?php

namespace App\Providers;

use App\Services\Log\FileLogger;
use App\Services\Log\Logger;
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
        $this->app->bind(Logger::class, FileLogger::class);
    }
}
