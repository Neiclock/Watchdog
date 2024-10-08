<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('monitor:urls')->everyMinute();
        $schedule->command('notify-user')->everyMinute();
        // $schedule->command('inspire')->hourly();
        $schedule->command('monitor:check-uptime')->everyMinute();
        $schedule->command('monitor:check-certificate')->daily();
        $schedule->call(function () {
            \Log::debug("message from schedule" . now());
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
