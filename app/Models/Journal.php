<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'planning_group_id'];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function challenges()
    {
        return $this->hasMany(Challenge::class);
    }

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
