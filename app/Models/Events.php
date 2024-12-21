<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date'];

    public function scheduleNotification($hoursBefore = 24)
    {
        $scheduledTime = $this->start_date->subHours($hoursBefore);

        Notification::create([
            'type' => 'event',
            'message' => "Reminder: Event '{$this->title}' is starting soon!",
            'scheduled_at' => $scheduledTime,
        ]);
    }
}
