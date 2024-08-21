<?php

namespace App\Providers;

use App\Notifications\NativeNotificationChannel;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\ServiceProvider;
use Native\Laravel\Facades\Notification;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
