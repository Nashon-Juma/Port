<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'target_date'];

    public function scheduleNotification($hoursBefore = 24)
    {
        $scheduledTime = $this->target_date->subHours($hoursBefore);

        Notification::create([
            'type' => 'goal',
            'message' => "Reminder: Goal '{$this->title}' is due soon!",
            'scheduled_at' => $scheduledTime,
        ]);
    }
}
