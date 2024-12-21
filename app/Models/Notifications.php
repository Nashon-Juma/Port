<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'message', 'sent', 'scheduled_at'];

    public function scopePending($query)
    {
        return $query->where('sent', false);
    }
}
