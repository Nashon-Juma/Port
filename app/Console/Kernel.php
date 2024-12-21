<?php

namespace App\Console;

use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use App\Http\Middleware\TrackVisitor;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $middleware = [
        TrackVisitor::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $notifications = Notification::pending()->where('scheduled_at', '<=', now())->get();

            foreach ($notifications as $notification) {
                // Send email notification (example)
                Mail::to('nahshonjumaz@gmail.com')->send(new \App\Mail\NotificationMail($notification));

                // Mark as sent
                $notification->update(['sent' => true]);
            }
        })->everyMinute(); // Adjust frequency as needed
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
